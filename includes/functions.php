<?php

if (!defined('APP_ROOT')) {
    define('APP_ROOT', dirname(__FILE__, 2)); // includes/ -> repo root
}
function preprocess_JSON($rawJson) {
    if (empty($rawJson)) {
        return (object)[];
    }

    // Trivial native decoding with no modifications
    $decoded = json_decode($rawJson);

    return $decoded ?: (object)[];
}

function nav_link(string $href, string $label): string {
    $uri = strtok($_SERVER['REQUEST_URI'], '?');
    $exact   = $uri === $href;
    $ancestor = $href !== '/' && str_starts_with($uri, rtrim($href, '/') . '/');

    if ($exact) {
        return '<span class="nav-current">' . $label . '</span>';
    }
    if ($ancestor) {
        return '<a href="' . $href . '" class="nav-ancestor">' . $label . '</a>';
    }
    return '<a href="' . $href . '">' . $label . '</a>';
}