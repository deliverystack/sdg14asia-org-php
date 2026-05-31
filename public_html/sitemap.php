<?php
require_once __DIR__ . '/../includes/functions.php';
$metaJSON = '{
    "title": "Sitemap",
    "description": "All pages on this site."
}';
$meta = preprocess_JSON($metaJSON);
include_once __DIR__ . '/../includes/header.php';

$knownPages = [
    ['path' => '/about-us',                        'title' => 'About Us'],
    ['path' => '/cookie-policy',                   'title' => 'Cookie Policy'],
    ['path' => '/disclaimer-terms',                'title' => 'Disclaimer & Terms'],
    ['path' => '/membership',                      'title' => 'Membership'],
    ['path' => '/projects',                        'title' => 'Projects'],
    ['path' => '/projects/marine-kindergarten',    'title' => 'Marine Kindergarten'],
];

function collect_php_tree(string $dir, string $url_prefix, array $knownPages): array {
    $knownPaths = array_column($knownPages, 'path');
    $node = ['files' => [], 'dirs' => []];
    $items = @scandir($dir);
    if (!$items) return $node;

    foreach ($items as $item) {
        if ($item === '.' || $item === '..') continue;
        $full = $dir . '/' . $item;
        $skip = ['sitemap.php', 'index.php'];

        if (is_dir($full)) {
            $child = collect_php_tree($full, $url_prefix . '/' . $item, $knownPages);
            if (!empty($child['files']) || !empty($child['dirs'])) {
                $node['dirs'][$item] = $child;
            }
        } elseif (pathinfo($item, PATHINFO_EXTENSION) === 'php' && $item[0] !== '.' && !in_array($item, $skip)) {
            $filename = pathinfo($item, PATHINFO_FILENAME);
            $urlPath  = rtrim($url_prefix, '/') . '/' . $filename;
            $knownIndex = array_search($urlPath, $knownPaths);
            $label = $knownIndex !== false
                ? $knownPages[$knownIndex]['title']
                : ucfirst($filename);
            $node['files'][] = [
                'urlPath' => $urlPath,
                'label'   => $label,
            ];
        }
    }
    return $node;
}

function render_html_tree(array $node): string {
    $out = "<ul>\n";
    $merged = [];
    foreach ($node['files'] as $f) {
        $basename = basename($f['urlPath']);
        if (isset($node['dirs'][$basename])) {
            $merged[$basename] = $f;
        }
    }
    foreach ($node['files'] as $f) {
        $basename = basename($f['urlPath']);
        if (isset($merged[$basename])) continue;
        $out .= "  <li><a href=\"" . htmlspecialchars($f['urlPath']) . "\">"
              . htmlspecialchars($f['label']) . "</a></li>\n";
    }
    foreach ($node['dirs'] as $dirname => $child) {
        if (isset($merged[$dirname])) {
            $f    = $merged[$dirname];
            $out .= "  <li><a href=\"" . htmlspecialchars($f['urlPath']) . "\">"
                  . htmlspecialchars($f['label']) . "</a>\n"
                  . render_html_tree($child)
                  . "  </li>\n";
        } else {
            $out .= "  <li><strong>" . htmlspecialchars(ucfirst($dirname)) . "</strong>\n"
                  . render_html_tree($child)
                  . "  </li>\n";
        }
    }
    $out .= "</ul>\n";
    return $out;
}

$tree = collect_php_tree(__DIR__, '', $knownPages);
?>
<main class="content-section">
  <div class="container">
    <header class="section-header">
      <h1 class="page-title">Sitemap</h1>
    </header>
    <section class="content-block sitemap-tree">
        <?= render_html_tree($tree) ?>
    </section>
  </div>
</main>
<?php include_once __DIR__ . '/../includes/footer.php'; ?>