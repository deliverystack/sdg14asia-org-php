<?php
$public_root = __DIR__ . '/public_html';
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$request_file = $public_root . $path; // Fixed name collision: changed $file to $request_file


// 1. Handle Static Files
if ($path !== '/' && file_exists($request_file) && !is_dir($request_file)) {
    $ext = pathinfo($request_file, PATHINFO_EXTENSION);
    $mimes = [
        'css' => 'text/css',
        'js'  => 'application/javascript',
        'png' => 'image/png',
        'pdf' => 'application/pdf',
        'ico' => 'image/x-icon'
    ];
    if (isset($mimes[$ext])) header("Content-Type: " . $mimes[$ext]);
    readfile($request_file);
    exit;
}

// 2. Static Site Compiler / Regenerator
if ($path === '/regenerate') {
    header("Content-Type: text/plain; charset=utf-8");
    echo "Starting lightning-fast static site compilation...\n\n";

    // Set fake global server variables so templates render correctly
    $scheme = $_SERVER['REQUEST_SCHEME'] ?? 'http';
    $host = $_SERVER['HTTP_HOST']; 
    $local_domain = $scheme . '://' . $host;

    $discovered_php_files = [];
    if (is_dir($public_root)) {
        $dir_items = scandir($public_root);
        foreach ($dir_items as $item) {
            // Find only template source files, explicitly skip router file dependencies
            if (pathinfo($item, PATHINFO_EXTENSION) === 'php' && $item[0] !== '.') {
                $discovered_php_files[] = $item;
            }
        }
    }

    // Step 1: Run the files directly on the filesystem and capture output buffer
    foreach ($discovered_php_files as $php_source) {
        $filename = pathinfo($php_source, PATHINFO_FILENAME);
        $targetFile = ($php_source === 'index.php') ? $public_root . '/index.html' : $public_root . '/' . $filename . '.html';

        echo "Compiling HTML -> File [{$php_source}] to " . basename($targetFile) . "\n";
        
        $source_absolute_path = $public_root . '/' . $php_source;

        if (file_exists($source_absolute_path)) {
            ob_start();                     // Start capturing output
            include $source_absolute_path;  // Execute the PHP code natively on disk
            $output = ob_get_clean();       // Drop captured content into variable
            
            @file_put_contents($targetFile, $output);
            echo "  --> Success!\n";
        } else {
            echo "  --> Error: File path missing.\n";
        }
    }

    // Step 2: Build the raw sitemap string natively right here
    echo "\nCompiling Sitemaps -> sitemap.xml & sitemap.html\n";

    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    $html = "<!DOCTYPE html>\n<html>\n<head><title>Sitemap</title></head>\n<body>\n<h1>Sitemap</h1>\n<ul>\n";

    foreach ($discovered_php_files as $php_source) {
        $filename = pathinfo($php_source, PATHINFO_FILENAME);
        $urlPath = ($php_source === 'index.php') ? '/' : '/' . $filename;
        $cleanUrl = $local_domain . $urlPath;
        $lastmod = date('Y-m-d', filemtime($public_root . '/' . $php_source));

        $xml .= "    <url>\n";
        $xml .= "        <loc>" . htmlspecialchars($cleanUrl) . "</loc>\n";
        $xml .= "        <lastmod>" . $lastmod . "</lastmod>\n";
        $xml .= "        <changefreq>weekly</changefreq>\n";
        $xml .= "        <priority>" . ($urlPath === '/' ? '1.0' : '0.8') . "</priority>\n";
        $xml .= "    </url>\n";

        $html .= "    <li><a href=\"" . htmlspecialchars($urlPath) . "\">" . ($urlPath === '/' ? 'Home' : ucfirst($filename)) . "</a></li>\n";
    }

    $xml .= '</urlset>';
    $html .= "</ul>\n</body>\n</html>";

    @file_put_contents($public_root . '/sitemap.xml', $xml);
    @file_put_contents($public_root . '/sitemap.html', $html);

    echo "--> Successfully wrote physical sitemap.xml\n";
    echo "--> Successfully wrote physical sitemap.html\n";

    echo "\nCompilation complete! Flat files are now sitting in public_html/";
    exit;
}

// 3. Handle Root Index Request
if ($path === '/') {
    $index = $public_root . '/index.php';
    if (file_exists($index)) {
        include $index;
        exit;
    }
}

// 4. Handle Clean URLs
$phpFile = $public_root . $path . '.php';
if (file_exists($phpFile)) {
    include $phpFile;
    exit;
}

// If we got here, it's a real 404
http_response_code(404);
echo "Router Error: Cannot find " . htmlspecialchars($path) . "<br>";
echo "Looking in: " . htmlspecialchars($public_root);