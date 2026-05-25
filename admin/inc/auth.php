<?php
if (!defined('ADMIN')) { http_response_code(403); exit('Forbidden'); }

/* ---------------- JSON storage (admin/data) ---------------- */

function data_dir(): string {
    return __DIR__ . '/../data';
}

function data_file(string $name): string {
    return data_dir() . '/' . $name;
}

function read_json(string $name, array $default = []): array {
    $f = data_file($name);
    if (!is_file($f)) return $default;
    $raw = file_get_contents($f);
    if ($raw === false || $raw === '') return $default;
    $data = json_decode($raw, true);
    return is_array($data) ? $data : $default;
}

function write_json(string $name, array $data): bool {
    $dir = data_dir();
    if (!is_dir($dir)) { @mkdir($dir, 0775, true); }
    $json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    return file_put_contents(data_file($name), $json, LOCK_EX) !== false;
}

/* ---------------- Secure session ---------------- */

function start_secure_session(int $idleMinutes): void {
    if (session_status() === PHP_SESSION_ACTIVE) return;
    $https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
          || (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https');
    session_set_cookie_params([
        'lifetime' => 0,
        'path'     => '/',
        'secure'   => $https,
        'httponly' => true,
        'samesite' => 'Lax',
    ]);
    session_name('cspadmin');
    session_start();

    $now = time();
    if (isset($_SESSION['last_seen']) && ($now - (int)$_SESSION['last_seen']) > $idleMinutes * 60) {
        $_SESSION = [];
        session_regenerate_id(true);
    }
    $_SESSION['last_seen'] = $now;
}

/* ---------------- CSRF ---------------- */

function csrf_token(): string {
    if (empty($_SESSION['csrf'])) {
        $_SESSION['csrf'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf'];
}

function csrf_verify($token): bool {
    return !empty($_SESSION['csrf']) && is_string($token) && hash_equals($_SESSION['csrf'], $token);
}

/* ---------------- Credentials ---------------- */

function creds_exist(): bool {
    $c = read_json('credentials.json');
    return !empty($c['password_hash']);
}

function load_creds(): array {
    return read_json('credentials.json');
}

function save_creds(array $c): bool {
    return write_json('credentials.json', $c);
}

/* ---------------- Auth state ---------------- */

function is_logged_in(): bool {
    return !empty($_SESSION['authed']);
}

function login_user(string $username): void {
    session_regenerate_id(true);
    $_SESSION['authed']    = true;
    $_SESSION['user']      = $username;
    $_SESSION['last_seen'] = time();
}

function logout_user(): void {
    $_SESSION = [];
    if (ini_get('session.use_cookies')) {
        $p = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $p['path'], $p['domain'] ?? '', $p['secure'], $p['httponly']);
    }
    session_destroy();
}

/* ---------------- Login throttle (per IP) ---------------- */

function client_ip(): string {
    $ip = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
    foreach (['HTTP_CF_CONNECTING_IP', 'HTTP_X_FORWARDED_FOR'] as $h) {
        if (!empty($_SERVER[$h])) {
            $ip = trim(explode(',', $_SERVER[$h])[0]);
            break;
        }
    }
    return $ip;
}

function throttle_locked(string $ip): int {
    $all = read_json('throttle.json');
    $s = $all[$ip] ?? ['fails' => 0, 'lock_until' => 0];
    $remain = (int)($s['lock_until'] ?? 0) - time();
    return $remain > 0 ? $remain : 0;
}

function throttle_register_fail(string $ip, int $max, int $lockMinutes): void {
    $all = read_json('throttle.json');
    $s = $all[$ip] ?? ['fails' => 0, 'lock_until' => 0];
    $s['fails'] = (int)($s['fails'] ?? 0) + 1;
    if ($s['fails'] >= $max) {
        $s['lock_until'] = time() + $lockMinutes * 60;
        $s['fails'] = 0;
    }
    $all[$ip] = $s;
    write_json('throttle.json', $all);
}

function throttle_reset(string $ip): void {
    $all = read_json('throttle.json');
    if (isset($all[$ip])) {
        unset($all[$ip]);
        write_json('throttle.json', $all);
    }
}
