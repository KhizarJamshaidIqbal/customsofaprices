<?php
if (!defined('ADMIN')) { http_response_code(403); exit('Forbidden'); }

function gh_token(): string {
    $c = load_creds();
    return isset($c['github_token']) && is_string($c['github_token']) ? trim($c['github_token']) : '';
}

function gh_configured(): bool {
    return gh_token() !== '';
}

function gh_request(string $method, string $path, ?array $body = null): array {
    $token = gh_token();
    $ch = curl_init('https://api.github.com' . $path);
    $headers = [
        'Accept: application/vnd.github+json',
        'X-GitHub-Api-Version: 2022-11-28',
        'User-Agent: CSP-Admin-Panel',
    ];
    if ($token !== '') $headers[] = 'Authorization: Bearer ' . $token;
    curl_setopt_array($ch, [
        CURLOPT_CUSTOMREQUEST  => $method,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER     => $headers,
        CURLOPT_TIMEOUT        => 15,
        CURLOPT_SSL_VERIFYPEER => true,
        CURLOPT_SSL_VERIFYHOST => 2,
    ]);
    if ($body !== null) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
    }
    $resp = curl_exec($ch);
    $code = (int) curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
    $err  = curl_error($ch);
    curl_close($ch);
    return [
        'code'  => $code,
        'body'  => $resp ? json_decode($resp, true) : null,
        'error' => $err,
    ];
}

function gh_recent_runs(array $cfg, int $limit = 6): array {
    $path = sprintf(
        '/repos/%s/%s/actions/workflows/%s/runs?per_page=%d',
        rawurlencode($cfg['github_owner']),
        rawurlencode($cfg['github_repo']),
        rawurlencode($cfg['workflow_file']),
        $limit
    );
    $r = gh_request('GET', $path);
    if ($r['code'] === 200 && isset($r['body']['workflow_runs']) && is_array($r['body']['workflow_runs'])) {
        return $r['body']['workflow_runs'];
    }
    return [];
}

function gh_dispatch(array $cfg): array {
    $path = sprintf(
        '/repos/%s/%s/actions/workflows/%s/dispatches',
        rawurlencode($cfg['github_owner']),
        rawurlencode($cfg['github_repo']),
        rawurlencode($cfg['workflow_file'])
    );
    return gh_request('POST', $path, ['ref' => $cfg['deploy_branch']]);
}
