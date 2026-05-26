<?php
define('APP_ROOT', __DIR__);
// Look for public_html relative to the router's exact file location
$public_root = realpath(__DIR__ . '/public_html');
// Fallback to strict string concatenation if paths are inside isolated virtual mounts
if (!$public_root) {
    $public_root = __DIR__ . '/public_html';
}
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$request_file = $public_root . $path;

// 1. Handle Static Files Natively (CSS, JS, Images, PDFs)
if ($path !== '/' && file_exists($request_file) && !is_dir($request_file)) {
    $ext = pathinfo($request_file, PATHINFO_EXTENSION);
    $mimes = [
        'css'  => 'text/css',
        'js'   => 'application/javascript',
        'png'  => 'image/png',
        'jpg'  => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'svg'  => 'image/svg+xml',
        'pdf'  => 'application/pdf',
        'ico'  => 'image/x-icon'
    ];
    if (isset($mimes[$ext])) {
        header("Content-Type: " . $mimes[$ext]);
    }
    readfile($request_file);
    exit;
}


// 2. Handle Dynamic XML Sitemap Requests
if ($path === '/sitemap.xml') {
    header("Content-Type: text/xml; charset=utf-8");

    $scheme = $_SERVER['REQUEST_SCHEME'] ?? 'http';
    $host   = $_SERVER['HTTP_HOST'];
    $local_domain = $scheme . '://' . $host;

    echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    if (is_dir($public_root)) {
        foreach (scandir($public_root) as $item) {
            if (pathinfo($item, PATHINFO_EXTENSION) === 'php' && $item[0] !== '.') {
                $filename = pathinfo($item, PATHINFO_FILENAME);
                $urlPath  = ($item === 'index.php') ? '/' : '/' . $filename;
                $lastmod  = date('Y-m-d', filemtime($public_root . '/' . $item));
                echo "    <url>\n";
                echo "        <loc>" . htmlspecialchars($local_domain . $urlPath) . "</loc>\n";
                echo "        <lastmod>" . $lastmod . "</lastmod>\n";
                echo "        <changefreq>weekly</changefreq>\n";
                echo "        <priority>" . ($urlPath === '/' ? '1.0' : '0.8') . "</priority>\n";
                echo "    </url>\n";
            }
        }
    }
    echo '</urlset>';
    exit;
}

// 4. Handle Root Index Request (/)
if ($path === '/') {
    $index = $public_root . '/index.php';
    if (file_exists($index)) {
        include $index;
        exit;
    }
}

// 5. Handle Clean URLs (/about, /membership, etc.)
$phpFile = $public_root . $path . '.php';
if (file_exists($phpFile)) {
    include $phpFile;
    exit;
}

// 7. Explicit 404 Fallback
http_response_code(404);
echo "Router Error: Cannot find " . htmlspecialchars($path) . "<br>";
echo "Looking in: " . htmlspecialchars($public_root);