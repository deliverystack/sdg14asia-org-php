<?php
// Look directly inside the public_html folder sitting next to /api
$public_root = dirname(__DIR__) . '/public_html';

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// If root is requested, load your primary index file
if ($path === '/') {
    if (file_exists($public_root . '/index.php')) {
        include $public_root . '/index.php';
        exit;
    } elseif (file_exists($public_root . '/index.html')) {
        readfile($public_root . '/index.html');
        exit;
    }
}

// Handle clean URLs (e.g. /about tries to find /public_html/about.php)
$phpFile = $public_root . rtrim($path, '/') . '.php';
if (file_exists($phpFile)) {
    include $phpFile;
    exit;
}

// Final fallback to raw static assets or 404
$staticFile = $public_root . $path;
if (file_exists($staticFile) && !is_dir($staticFile)) {
    readfile($staticFile);
    exit;
}

http_response_code(404);
echo "404 Not Found";