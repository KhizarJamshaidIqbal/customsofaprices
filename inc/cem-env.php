<?php
declare(strict_types=1);

/**
 * Minimal .env reader for CEM webhook integration.
 *
 * Candidate search order:
 *   1. __DIR__ . '/.env'                          — local dev (inc/.env)
 *   2. dirname(DOCUMENT_ROOT) . '/.env'           — Hostinger prod (sibling of public_html)
 *   3. dirname(__DIR__, 2) . '/.env'              — fallback: two levels up from webroot
 *   4. getenv() system environment                — container / cPanel env vars
 *
 * Usage:
 *   require __DIR__ . '/inc/cem-env.php';
 *   $url = cem_env('CEM_WEBHOOK_URL');
 */

function cem_env(string $key, string $default = ''): string
{
    static $cache = null;

    if ($cache === null) {
        $cache = [];

        $candidates = [
            __DIR__ . '/.env',
        ];

        // Hostinger: .env sits one level above public_html (DOCUMENT_ROOT).
        if (!empty($_SERVER['DOCUMENT_ROOT'])) {
            $candidates[] = dirname($_SERVER['DOCUMENT_ROOT']) . '/.env';
        }

        // Generic fallback: two dirs above this file (inc → webroot → parent).
        $candidates[] = dirname(__DIR__, 2) . '/.env';

        foreach ($candidates as $path) {
            if (is_file($path) && is_readable($path)) {
                $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                if ($lines === false) {
                    continue;
                }
                foreach ($lines as $line) {
                    $line = trim($line);
                    // Skip comments and lines without '='.
                    if ($line === '' || $line[0] === '#') {
                        continue;
                    }
                    $pos = strpos($line, '=');
                    if ($pos === false) {
                        continue;
                    }
                    $k = trim(substr($line, 0, $pos));
                    $v = trim(substr($line, $pos + 1));
                    // Strip surrounding quotes (single or double).
                    if (
                        strlen($v) >= 2
                        && (($v[0] === '"' && $v[-1] === '"') || ($v[0] === "'" && $v[-1] === "'"))
                    ) {
                        $v = substr($v, 1, -1);
                    }
                    $cache[$k] = $v;
                }
                break; // Use the first .env file found.
            }
        }
    }

    if (isset($cache[$key]) && $cache[$key] !== '') {
        return $cache[$key];
    }

    // Fall back to system environment variables.
    $env = getenv($key);
    return ($env !== false && $env !== '') ? $env : $default;
}
