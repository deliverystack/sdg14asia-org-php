<?php
// 1. DYNAMIC PATH RESOLUTION
// If running on Vercel, use their native task root. Otherwise, fall back to parent dir.
$base_dir = isset($_SERVER['LAMBDA_TASK_ROOT']) ? $_SERVER['LAMBDA_TASK_ROOT'] : dirname(__DIR__);
$public_root = rtrim($base_dir, '/') . '/public_html';

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// 2. Handle the Homepage Routing Module (/)
if ($path === '/') {
    $index_php = $public_root . '/index.php';
    $index_html = $public_root . '/index.html';
    
    if (file_exists($index_php)) {
        include $index_php;
        exit;
    } elseif (file_exists($index_html)) {
        header("Content-Type: text/html; charset=utf-8");
        readfile($index_html);
        exit;
    }
}

// 3. Handle Clean PHP Extension URLs (e.g., /about maps to /public_html/about.php)
$phpFile = $public_root . rtrim($path, '/') . '.php';
if (file_exists($phpFile)) {
    include $phpFile;
    exit;
}

// 4. Handle Raw Static Assets (CSS, JS, Images, PDFs)
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

// 5. Ultimate Fallback Route Page
http_response_code(404);
header("Content-Type: text/html; charset=utf-8");
echo "<h2>404 Not Found</h2>";
echo "Requested URL: " . htmlspecialchars($path) . "<br>";
echo "Resolved Public Root: " . htmlspecialchars($public_root);