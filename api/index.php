<?php
// Look directly into Vercel's global compiled folder destination root
$base_dir = '/var/task';
$public_root = $base_dir . '/public_html';

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// 1. Handle Homepage Request (/)
if ($path === '/') {
    $index_php = $public_root . '/index.php';
    if (file_exists($index_php)) {
        include $index_php;
        exit;
    }
}

// 2. Handle Clean PHP URLs (e.g., /about maps to /public_html/about.php)
$phpFile = $public_root . rtrim($path, '/') . '.php';
if (file_exists($phpFile)) {
    include $phpFile;
    exit;
}

// 3. Fallback to reading the statically bound asset directory contents directly
$staticFile = $public_root . $path;
if (file_exists($staticFile) && !is_dir($staticFile)) {
    $ext = pathinfo($staticFile, PATHINFO_EXTENSION);
    $mimes = [
        'css'  => 'text/css',
        'js'   => 'application/javascript',
        'png'  => 'image/png',
        'jpg'  => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'pdf'  => 'application/pdf',
        'ico'  => 'image/x-icon',
        'svg'  => 'image/svg+xml'
    ];
    if (isset($mimes[$ext])) {
        header("Content-Type: " . $mimes[$ext]);
    }
    readfile($staticFile);
    exit;
}

// 4. Fallback Page
http_response_code(404);
echo "404 Not Found";