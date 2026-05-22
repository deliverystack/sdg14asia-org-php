<?php
// Track the request path
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// 1. Handle Homepage Request (/)
if ($path === '/') {
    // This explicit include forces Vercel to bundle the file into your deployment
    require __DIR__ . '/../public_html/index.php';
    exit;
}

// 2. Handle Clean URLs manually for your individual core pages
// Add your clean URL mappings here so Vercel compiles them explicitly
if ($path === '/about') {
    require __DIR__ . '/../public_html/about.php'; // Update path if you have about.php
    exit;
}

// 3. Fallback for Static Assets (CSS, JS, Images, PDFs)
// Since Vercel hides the directory tree, we output a header loop to serve assets
$public_root = __DIR__ . '/../public_html';
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

// 4. Ultimate 404 Fallback
http_response_code(404);
header("Content-Type: text/html; charset=utf-8");
echo "<h2>404 Not Found</h2>";