<?php
/**
 * Custom Sofa Prices - Admin Panel (front controller)
 * Single entry point: first-run setup -> login -> deployment dashboard.
 */
define('ADMIN', true);

$cfg = require __DIR__ . '/inc/config.php';
require __DIR__ . '/inc/auth.php';
require __DIR__ . '/inc/github.php';
require __DIR__ . '/inc/render.php';

// Load the shared header/footer chrome (admin/data/embed.json -> embed/defaults fallback).
function chrome_defaults_path(string $f): string { return __DIR__ . '/../embed/defaults/' . $f; }
function chrome_load(): array {
    $d = read_json('embed.json');
    $hdr = ($d['header_html'] ?? '') !== '' ? $d['header_html'] : (@file_get_contents(chrome_defaults_path('header.html')) ?: '');
    $ftr = ($d['footer_html'] ?? '') !== '' ? $d['footer_html'] : (@file_get_contents(chrome_defaults_path('footer.html')) ?: '');
    return ['header_html' => $hdr, 'footer_html' => $ftr, 'allow_scripts' => !empty($d['allow_scripts']), 'version' => (int)($d['version'] ?? 0)];
}

start_secure_session((int)$cfg['session_idle_minutes']);

$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
$action = $_POST['action'] ?? '';
$base   = strtok($_SERVER['REQUEST_URI'] ?? '/admin/', '?'); // self URL, no query
$flash  = null;

/* ============ 1. FIRST-RUN SETUP ============ */
if (!creds_exist()) {
    if ($method === 'POST' && $action === 'setup') {
        $key   = $_POST['setup_key'] ?? '';
        $user  = trim($_POST['username'] ?? '');
        $pass  = (string)($_POST['password'] ?? '');
        $pass2 = (string)($_POST['password2'] ?? '');

        if (!csrf_verify($_POST['csrf'] ?? null)) {
            $flash = ['type' => 'error', 'msg' => 'Session expired. Please try again.'];
        } elseif (!hash_equals((string)$cfg['setup_key'], (string)$key)) {
            $flash = ['type' => 'error', 'msg' => 'Invalid setup key.'];
        } elseif (mb_strlen($user) < 3) {
            $flash = ['type' => 'error', 'msg' => 'Username must be at least 3 characters.'];
        } elseif (strlen($pass) < 8) {
            $flash = ['type' => 'error', 'msg' => 'Password must be at least 8 characters.'];
        } elseif ($pass !== $pass2) {
            $flash = ['type' => 'error', 'msg' => 'Passwords do not match.'];
        } else {
            save_creds([
                'username'      => $user,
                'password_hash' => password_hash($pass, PASSWORD_DEFAULT),
                'github_token'  => '',
                'created_at'    => date('c'),
            ]);
            login_user($user);
            header('Location: ' . $base);
            exit;
        }
    }
    render_setup($cfg, $flash);
    exit;
}

/* ============ 2. LOGIN ============ */
if (!is_logged_in()) {
    if ($method === 'POST' && $action === 'login') {
        $ip = client_ip();
        $locked = throttle_locked($ip);
        if ($locked > 0) {
            $flash = ['type' => 'error', 'msg' => 'Too many attempts. Try again in ' . ceil($locked / 60) . ' minute(s).'];
        } elseif (!csrf_verify($_POST['csrf'] ?? null)) {
            $flash = ['type' => 'error', 'msg' => 'Session expired. Please try again.'];
        } else {
            $user = trim($_POST['username'] ?? '');
            $pass = (string)($_POST['password'] ?? '');
            $c = load_creds();
            if (hash_equals((string)($c['username'] ?? ''), $user) && password_verify($pass, (string)($c['password_hash'] ?? ''))) {
                throttle_reset($ip);
                login_user($user);
                header('Location: ' . $base);
                exit;
            }
            throttle_register_fail($ip, (int)$cfg['max_login_attempts'], (int)$cfg['lockout_minutes']);
            $flash = ['type' => 'error', 'msg' => 'Incorrect username or password.'];
        }
    }
    render_login($cfg, $flash);
    exit;
}

/* ============ 3. AUTHENTICATED ACTIONS ============ */
if ($method === 'POST') {
    if (!csrf_verify($_POST['csrf'] ?? null)) {
        $flash = ['type' => 'error', 'msg' => 'Session expired. Please retry.'];
    } elseif ($action === 'logout') {
        logout_user();
        header('Location: ' . $base);
        exit;
    } elseif ($action === 'save_token') {
        $c = load_creds();
        $c['github_token'] = trim($_POST['github_token'] ?? '');
        save_creds($c);
        $flash = ['type' => 'success', 'msg' => $c['github_token'] === '' ? 'GitHub token removed.' : 'GitHub token saved.'];
    } elseif ($action === 'deploy') {
        if (!gh_configured()) {
            $flash = ['type' => 'error', 'msg' => 'Add a GitHub token first to trigger deploys from here.'];
        } else {
            $r = gh_dispatch($cfg);
            $log = read_json('deploy_log.json');
            if ($r['code'] === 204) {
                $flash = ['type' => 'success', 'msg' => 'Deploy triggered. It will appear below in a few seconds.'];
                array_unshift($log, ['at' => time(), 'by' => $_SESSION['user'] ?? 'admin', 'result' => 'triggered']);
            } else {
                $msg = $r['body']['message'] ?? ($r['error'] ?: ('HTTP ' . $r['code']));
                $flash = ['type' => 'error', 'msg' => 'Could not trigger deploy: ' . $msg];
                array_unshift($log, ['at' => time(), 'by' => $_SESSION['user'] ?? 'admin', 'result' => 'failed: ' . $msg]);
            }
            write_json('deploy_log.json', array_slice($log, 0, 20));
        }
    } elseif ($action === 'save_chrome') {
        $c = read_json('embed.json');
        $c['header_html']   = (string)($_POST['header_html'] ?? '');
        $c['footer_html']   = (string)($_POST['footer_html'] ?? '');
        $c['allow_scripts'] = isset($_POST['allow_scripts']);
        $c['version']       = time();
        $c['updated_at']    = date('c');
        write_json('embed.json', $c);
        $flash = ['type' => 'success', 'msg' => 'Header & Footer saved. Live on all embedded sites within ~1 minute.'];
    }
}

/* ============ 4. ROUTING ============ */
$page = $_GET['page'] ?? 'deploy';
if ($page === 'chrome') {
    render_chrome($cfg, $flash, chrome_load());
} else {
    $runs = gh_configured() ? gh_recent_runs($cfg, 6) : [];
    $log  = read_json('deploy_log.json');
    render_dashboard($cfg, $flash, $runs, $log);
}
