<?php
// Shared library for the embeddable header/footer "chrome".
// Content is stored in admin/data/embed.json (edited from the admin panel);
// seed defaults live in embed/defaults/*.html. Output is a standalone page
// designed to be loaded in an <iframe> on any site, auto-resizing via postMessage.

function embed_data_file(): string { return __DIR__ . '/../admin/data/embed.json'; }
function embed_defaults_dir(): string { return __DIR__ . '/defaults'; }

function embed_load(): array {
    $data = [
        'header_html'   => @file_get_contents(embed_defaults_dir() . '/header.html') ?: '',
        'footer_html'   => @file_get_contents(embed_defaults_dir() . '/footer.html') ?: '',
        'allow_scripts' => false,
        'version'       => 0,
    ];
    $f = embed_data_file();
    if (is_file($f)) {
        $j = json_decode((string)file_get_contents($f), true);
        if (is_array($j)) {
            foreach (['header_html', 'footer_html'] as $k) {
                if (isset($j[$k]) && $j[$k] !== '') $data[$k] = $j[$k];
            }
            if (isset($j['allow_scripts'])) $data['allow_scripts'] = (bool)$j['allow_scripts'];
            if (isset($j['version']))       $data['version'] = (int)$j['version'];
        }
    }
    return $data;
}

// Remove dangerous bits. Inline event handlers + javascript: URIs are ALWAYS
// stripped; <script> only survives when Allow Custom Scripts is ON.
function embed_sanitize(string $html, bool $allowScripts): string {
    $html = preg_replace('/\son[a-z]+\s*=\s*("[^"]*"|\'[^\']*\'|[^\s>]+)/i', '', $html);
    $html = preg_replace('/(href|src)\s*=\s*("|\')\s*javascript:[^"\']*\2/i', '$1=$2#$2', $html);
    if (!$allowScripts) {
        $html = preg_replace('#<script\b[^>]*>.*?</script>#is', '', $html);
        $html = preg_replace('#<script\b[^>]*?/?>#i', '', $html);
    }
    return $html;
}

function embed_render(string $part): void {
    $part = $part === 'footer' ? 'footer' : 'header';
    $d = embed_load();
    $html = embed_sanitize($part === 'footer' ? $d['footer_html'] : $d['header_html'], (bool)$d['allow_scripts']);

    // Allow this page to be framed by ANY site; keep it fresh so edits go live.
    header('Content-Type: text/html; charset=utf-8');
    header_remove('X-Frame-Options');
    header('Content-Security-Policy: frame-ancestors *');
    header('Cache-Control: no-cache, no-store, must-revalidate');
    header('Pragma: no-cache');
    ?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="noindex, nofollow">
<title>Custom Sofa Prices &mdash; <?= htmlspecialchars(ucfirst($part), ENT_QUOTES) ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script>tailwind.config={theme:{extend:{fontFamily:{display:['"Playfair Display"','Georgia','serif'],body:['Inter','system-ui','sans-serif']},colors:{gold:{DEFAULT:'#C9A96E',light:'#DFC9A0',dark:'#A68942'},charcoal:{DEFAULT:'#2D2D2D',light:'#4A4A4A',dark:'#1A1A1A'},cream:{DEFAULT:'#FAFAF6',dark:'#F0EDE5'}}}}};</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>html,body{margin:0;padding:0;overflow-x:hidden;background:transparent}body{font-family:Inter,system-ui,sans-serif}.font-display{font-family:'Playfair Display',Georgia,serif}</style>
</head>
<body>
<div id="csp-embed-root"><?= $html ?></div>
<script>
(function () {
  var PART = <?= json_encode($part) ?>;
  var root = document.getElementById('csp-embed-root');
  function postHeight() {
    var h = Math.ceil(root.getBoundingClientRect().height);
    try { parent.postMessage({ cspEmbed: PART, height: h }, '*'); } catch (e) {}
  }
  window.addEventListener('load', postHeight);
  window.addEventListener('resize', postHeight);
  if (window.ResizeObserver) { new ResizeObserver(postHeight).observe(root); }
  // Re-measure after fonts / Tailwind CDN apply.
  setTimeout(postHeight, 300);
  setTimeout(postHeight, 1200);
})();
</script>
</body>
</html><?php
}
