<?php
// This script handles redirects for various URL patterns

// Get the requested URI
$request_uri = $_SERVER['REQUEST_URI'];

// Extract the path (remove query string if present)
$path = parse_url($request_uri, PHP_URL_PATH);

// Remove leading and trailing slashes
$path = trim($path, '/');

// Check if it's a Netlify-style URL or contains unusual patterns
if (strpos($path, 'netlify') !== false || strpos($request_uri, '404.html') !== false) {
    // Redirect to homepage
    header('Location: /mark_sluis/index.php');
    exit;
}

// Map common paths to appropriate pages
$path_map = [
    'over' => 'index.php',
    'over-ons' => 'index.php',
    'about' => 'index.php',
    'contact' => 'inschrijven.php',
    'training' => 'trainingen.php',
    'trainings' => 'trainingen.php',
    'courses' => 'trainingen.php',
    'signup' => 'inschrijven.php',
    'register' => 'inschrijven.php',
    'terms' => 'voorwaarden.php',
    'voorwaarde' => 'voorwaarden.php',
    'conditions' => 'voorwaarden.php'
];

// Check if the requested path is in our map
if (array_key_exists($path, $path_map)) {
    header('Location: /mark_sluis/' . $path_map[$path]);
    exit;
}

// If we don't recognize the path, redirect to the 404 page
header('Location: /mark_sluis/404.php');
exit;
?>
