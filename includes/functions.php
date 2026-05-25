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
  $current = strtok($_SERVER['REQUEST_URI'], '?') === $href;
  return $current
    ? '<span class="nav-current">' . $label . '</span>'
    : '<a href="' . $href . '">' . $label . '</a>';
}
