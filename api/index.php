<?php
// Force errors to display on screen during Vercel deployment debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Execute your root router script cleanly
require __DIR__ . '/../router.php';