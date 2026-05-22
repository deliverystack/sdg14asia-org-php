<?php
$public_root = __DIR__ . '/public_html';
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$request_file = $public_root . $path;

// 1. Handle Directory Roots (/)
if ($path === '/') {
    if (file_exists($public_root . '/index.php')) {
        include $public_root . '/index.php';
        exit;
    } elseif (file_exists($public_root . '/index.html')) {
        header("Content-Type: text/html");
        readfile($public_root . '/index.html');
        exit;
    }
}

// 2. Handle Static Files (CSS, JS, Images, etc.)
if ($path !== '/' && file_exists($request_file) && !is_dir($request_file)) {
    $ext = pathinfo($request_file, PATHINFO_EXTENSION);
    $mimes = [
        'css'  => 'text/css',
        'js'   => 'application/javascript',
        'png'  => 'image/png',
        'jpg'  => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'gif'  => 'image/gif',
        'svg'  => 'image/svg+xml',
        'pdf'  => 'application/pdf',
        'ico'  => 'image/x-icon',
        'html' => 'text/html'
    ];
    if (isset($mimes[$ext])) {
        header("Content-Type: " . $mimes[$ext]);
    }
    readfile($request_file);
    exit;
}

// 3. Handle Clean URLs (e.g., /about -> /about.php)
$phpFile = $public_root . $path . '.php';
if (file_exists($phpFile)) {
    include $phpFile;
    exit;
}

// 4. Alternative trailing slash options
$phpFileSlash = $public_root . rtrim($path, '/') . '.php';
if (file_exists($phpFileSlash)) {
    include $phpFileSlash;
    exit;
}

// 5. Final Fallback
http_response_code(404);
header("Content-Type: text/html; charset=utf-8");
echo "Router Error: Cannot find " . htmlspecialchars($path);