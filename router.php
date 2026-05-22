<?php
$public_root = __DIR__ . '/public_html';
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$request_file = $public_root . $path;

// 2. Handle Directory Roots (e.g., / looking for /index.php or /index.html)
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

// 3. Handle Static Files (CSS, JS, Images, etc.)
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

// 4. Handle Clean URLs (e.g., browsing to /about targets /about.php)
$phpFile = $public_root . $path . '.php';
if (file_exists($phpFile)) {
    include $phpFile;
    exit;
}

// 5. Catch alternative trailing slash variants (e.g., /about/ targets /about.php)
$phpFileSlash = $public_root . rtrim($path, '/') . '.php';
if (file_exists($phpFileSlash)) {
    include $phpFileSlash;
    exit;
}

// 6. Final Fallback: 404 Error Page
http_response_code(404);
header("Content-Type: text/html; charset=utf-8");
echo "Router Error: Cannot find " . htmlspecialchars($path) . "<br>";
echo "Looking in: " . htmlspecialchars($public_root);