// 2. Static Site Compiler / Regenerator
if ($path === '/regenerate') {
    $is_vercel = isset($_SERVER['VERCEL_ENV']) || isset($_SERVER['NOW_REGION']);
    
    if ($is_vercel) {
        header("Content-Type: text/html; charset=utf-8");
        echo "<h1>Vercel Deployment Preview Mode</h1>";
        echo "<p>Static file writing is disabled on read-only serverless instances. Below are your compiled assets:</p><hr>";
    } else {
        header("Content-Type: text/plain; charset=utf-8");
        echo "Starting lightning-fast static site compilation...\n\n";
    }

    $scheme = $_SERVER['REQUEST_SCHEME'] ?? 'http';
    $host = $_SERVER['HTTP_HOST']; 
    $local_domain = $scheme . '://' . $host;

    $discovered_php_files = [];
    if (is_dir($public_root)) {
        $dir_items = scandir($public_root);
        foreach ($dir_items as $item) {
            if (pathinfo($item, PATHINFO_EXTENSION) === 'php' && $item[0] !== '.') {
                $discovered_php_files[] = $item;
            }
        }
    }

    // Step 1: Process Templates
    foreach ($discovered_php_files as $php_source) {
        $filename = pathinfo($php_source, PATHINFO_FILENAME);
        $targetFile = ($php_source === 'index.php') ? $public_root . '/index.html' : $public_root . '/' . $filename . '.html';
        $source_absolute_path = $public_root . '/' . $php_source;

        if (file_exists($source_absolute_path)) {
            ob_start();
            include $source_absolute_path;
            $output = ob_get_clean();
            
            if (!$is_vercel) {
                @file_put_contents($targetFile, $output);
                echo "Compiling HTML -> File [{$php_source}] to " . basename($targetFile) . " --> Success!\n";
            }
        }
    }

    // Step 2: Build Sitemaps
    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";
    $html = "<!DOCTYPE html>\n<html>\n<head><title>Sitemap</title></head>\n<body>\n<h1>Sitemap</h1>\n<ul>\n";

    foreach ($discovered_php_files as $php_source) {
        $filename = pathinfo($php_source, PATHINFO_FILENAME);
        $urlPath = ($php_source === 'index.php') ? '/' : '/' . $filename;
        $cleanUrl = $local_domain . $urlPath;
        $lastmod = date('Y-m-d', filemtime($public_root . '/' . $php_source));

        $xml .= "    <url>\n        <loc>" . htmlspecialchars($cleanUrl) . "</loc>\n        <lastmod>" . $lastmod . "</lastmod>\n        <changefreq>weekly</changefreq>\n        <priority>" . ($urlPath === '/' ? '1.0' : '0.8') . "</priority>\n    </url>\n";
        $html .= "    <li><a href=\"" . htmlspecialchars($urlPath) . "\">" . ($urlPath === '/' ? 'Home' : ucfirst($filename)) . "</a></li>\n";
    }
    $xml .= '</urlset>';
    $html .= "</ul>\n</body>\n</html>";

    if (!$is_vercel) {
        @file_put_contents($public_root . '/sitemap.xml', $xml);
        @file_put_contents($public_root . '/sitemap.html', $html);
        echo "--> Successfully wrote physical sitemap.xml\n";
        echo "--> Successfully wrote physical sitemap.html\n\nCompilation complete!";
    } else {
        echo "<h3>Generated sitemap.xml Content:</h3><pre>" . htmlspecialchars($xml) . "</pre>";
        echo "<h3>Generated sitemap.html Content:</h3><pre>" . htmlspecialchars($html) . "</pre>";
    }
    exit;
}