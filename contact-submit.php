<?php
declare(strict_types=1);

/**
 * CEM Webhook Proxy — contact-submit.php
 *
 * Accepts form POST from same-origin JS, signs with HMAC-SHA256,
 * and forwards to the CEM webhook. Never logs PII or payloads.
 *
 * Env vars (from inc/.env or system env):
 *   CEM_WEBHOOK_URL, CEM_WEBHOOK_SECRET, CEM_ALLOWED_ORIGIN, CEM_CA_BUNDLE
 */

require __DIR__ . '/inc/cem-env.php';

// ---------------------------------------------------------------------------
// CORS
// ---------------------------------------------------------------------------
$allowedOrigins = array_filter(array_map('trim', explode(',', cem_env('CEM_ALLOWED_ORIGIN'))));
$requestOrigin  = $_SERVER['HTTP_ORIGIN'] ?? '';

if ($requestOrigin !== '' && in_array($requestOrigin, $allowedOrigins, true)) {
    header('Access-Control-Allow-Origin: ' . $requestOrigin);
    header('Vary: Origin');
    header('Access-Control-Allow-Methods: POST, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type');
    header('Access-Control-Max-Age: 86400');
}

// Handle OPTIONS preflight.
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

// POST only.
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    header('Allow: POST, OPTIONS');
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['ok' => false, 'error' => 'method_not_allowed']);
    exit;
}

header('Content-Type: application/json; charset=utf-8');

// ---------------------------------------------------------------------------
// Parse input: JSON body preferred, $_POST fallback.
// ---------------------------------------------------------------------------
$rawBody = file_get_contents('php://input');
$input   = [];

if ($rawBody !== false && $rawBody !== '') {
    $decoded = json_decode($rawBody, true);
    if (is_array($decoded)) {
        $input = $decoded;
    }
}

if (empty($input)) {
    $input = $_POST;
}

// ---------------------------------------------------------------------------
// Honeypot — silent success so bots never retry.
// ---------------------------------------------------------------------------
if (!empty($input['website_url'])) {
    echo json_encode(['ok' => true]);
    exit;
}

// ---------------------------------------------------------------------------
// Validate & sanitize fields.
// ---------------------------------------------------------------------------
$name    = mb_substr(trim((string)($input['name'] ?? '')), 0, 190);
$email   = mb_substr(trim((string)($input['email'] ?? '')), 0, 190);
$phone   = mb_substr(trim((string)($input['phone'] ?? '')), 0, 190);
$subject = mb_substr(trim((string)($input['subject'] ?? '')), 0, 190);
$message = mb_substr(trim((string)($input['message'] ?? '')), 0, 5000);

// Email is mandatory per CEM contract.
if ($email === '' || filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'invalid_email']);
    exit;
}

// At least one of name/phone/message must be non-empty.
if ($name === '' && $phone === '' && $message === '') {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'empty_submission']);
    exit;
}

// ---------------------------------------------------------------------------
// Build CEM payload.
// ---------------------------------------------------------------------------

// Collect any extra fields (seating_setup, fabric_preference, selected_collection, etc.)
$knownKeys = ['name', 'email', 'phone', 'subject', 'message', 'website_url',
              '_subject', '_captcha', '_next', '_template'];
$extras = [];
foreach ($input as $k => $v) {
    if (!in_array($k, $knownKeys, true) && is_string($v) && trim($v) !== '') {
        $extras[$k] = mb_substr(trim($v), 0, 500);
    }
}

// Determine source page.
$referer = $_SERVER['HTTP_REFERER'] ?? '';
$page = 'unknown';
if (stripos($referer, '/contact') !== false) {
    $page = 'contact';
} elseif (stripos($referer, '/collection') !== false) {
    $page = 'collection';
} elseif ($referer !== '') {
    $parsed = parse_url($referer, PHP_URL_PATH);
    $page = $parsed ? ltrim((string)$parsed, '/') : 'home';
}

// Build message body — append extras into the message for CEM thread.
$fullMessage = $message;
if (!empty($extras)) {
    $fullMessage .= "\n\n--- Additional Details ---";
    foreach ($extras as $k => $v) {
        $label = ucwords(str_replace('_', ' ', $k));
        $fullMessage .= "\n{$label}: {$v}";
    }
}

$payload = [
    'name'         => $name ?: 'Website Visitor',
    'email'        => $email,
    'subject'      => $subject ?: ($page === 'collection' ? 'Custom Sofa Quote Inquiry' : 'Contact Form Submission'),
    'message'      => $fullMessage,
    'phone'        => $phone,
    'source'       => 'customsofaprices.com',
    'page'         => $page,
    'intent'       => $page === 'collection' ? 'quote_request' : 'contact',
    'submitted_at' => gmdate('c'),
];

// ---------------------------------------------------------------------------
// Sign & forward to CEM.
// ---------------------------------------------------------------------------
$webhookUrl    = cem_env('CEM_WEBHOOK_URL');
$webhookSecret = cem_env('CEM_WEBHOOK_SECRET');

if ($webhookUrl === '' || $webhookSecret === '') {
    error_log('[CEM] Missing CEM_WEBHOOK_URL or CEM_WEBHOOK_SECRET');
    http_response_code(502);
    echo json_encode(['ok' => false, 'error' => 'upstream_misconfigured']);
    exit;
}

$jsonBody  = json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
$signature = 'sha256=' . hash_hmac('sha256', $jsonBody, $webhookSecret);

// ---------------------------------------------------------------------------
// CA bundle auto-discovery for portable SSL verification.
// ---------------------------------------------------------------------------
$caBundleCandidates = [
    cem_env('CEM_CA_BUNDLE'),
    'C:\\xampp\\php\\extras\\cacert.pem',
    'C:\\xampp\\apache\\bin\\curl-ca-bundle.crt',
    '/etc/ssl/certs/ca-certificates.crt',
    '/etc/pki/tls/certs/ca-bundle.crt',
    '/usr/local/etc/openssl@3/cert.pem',
    '/opt/homebrew/etc/openssl@3/cert.pem',
];

$caBundle = '';
foreach ($caBundleCandidates as $candidate) {
    if ($candidate !== '' && is_file($candidate)) {
        $caBundle = $candidate;
        break;
    }
}

// ---------------------------------------------------------------------------
// cURL request to CEM.
// ---------------------------------------------------------------------------
$ch = curl_init($webhookUrl);
curl_setopt_array($ch, [
    CURLOPT_POST           => true,
    CURLOPT_HTTPHEADER     => [
        'Content-Type: application/json',
        'X-CEM-Signature: ' . $signature,
    ],
    CURLOPT_POSTFIELDS     => $jsonBody,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT        => 10,
    CURLOPT_CONNECTTIMEOUT => 5,
    CURLOPT_SSL_VERIFYPEER => true,
    CURLOPT_SSL_VERIFYHOST => 2,
]);

if ($caBundle !== '') {
    curl_setopt($ch, CURLOPT_CAINFO, $caBundle);
}

$response   = curl_exec($ch);
$curlErr    = curl_error($ch);
$httpStatus = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($curlErr !== '') {
    error_log('[CEM] cURL error: ' . $curlErr);
    http_response_code(502);
    echo json_encode(['ok' => false, 'error' => 'upstream_unreachable']);
    exit;
}

// Log only status, never payload.
error_log('[CEM] upstream responded ' . $httpStatus);

if ($httpStatus >= 200 && $httpStatus < 300) {
    echo json_encode(['ok' => true]);
} else {
    http_response_code(502);
    echo json_encode(['ok' => false, 'error' => 'upstream_rejected', 'upstream_status' => $httpStatus]);
}
