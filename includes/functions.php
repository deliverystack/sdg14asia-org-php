<?php

function preprocess_JSON($rawJson) {
    if (empty($rawJson)) {
        return (object)[];
    }

    // Trivial native decoding with no modifications
    $decoded = json_decode($rawJson);

    return $decoded ?: (object)[];
}