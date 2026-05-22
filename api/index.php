<?php
// Define the root of the project (one level up from /api)
$project_root = dirname(__DIR__);
$public_root = $project_root . '/public_html';

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// 1. Handle the Home Request (/)
if ($path === '/') {
    if (file_exists($public_root . '/index.php')) {
        include $public_root . '/index.php';
        exit;
    }
}

// 2. Handle Clean URLs (e.g., /about matches /public_html/about.php)
$phpFile = $public_root . rtrim($path, '/') . '.php';
if (file_exists($phpFile)) {
    include $phpFile;
    exit;
}

// 3. Handle Static Assets (CSS, JS, Images, PDFs)
$staticFile = $public_root . $path;
if (file_exists($staticFile) && !is_dir($staticFile)) {
    // Dynamically detect content type for static files
    $ext = pathinfo($staticFile, PATHINFO_EXTENSION);
    $mimes = [
        'css' => 'text/css',
        'js'  => 'application/javascript',
        'png' => 'image/png',
        'jpg' => 'image/jpeg',
        'jpeg'=> 'image/jpeg',
        'pdf' => 'application/pdf',
        'ico' => 'image/x-icon'
    ];
    if (isset($mimes[$ext])) {
        header("Content-Type: " . $mimes[$ext]);
    }
    readfile($staticFile);
    exit;
}

// 4. Final Fallback
http_response_code(404);
echo "404 Not Found";