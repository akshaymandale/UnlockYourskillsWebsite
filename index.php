<?php
/**
 * UnlockYourSkills Marketing Website Entry Point
 * Standalone Website - Independent from main LMS application
 * URLs: index.php, index.php/features, index.php/pricing, etc.
 */

// Start session to check if user is logged in (optional - for future integration)
session_start();

// ===================================
// CLEAN URL ROUTING using PATH_INFO
// ===================================

// Get the page from PATH_INFO or query parameter
if (isset($_SERVER['PATH_INFO'])) {
    // Clean URLs: index.php/features, index.php/pricing, etc.
    $request = trim($_SERVER['PATH_INFO'], '/');
} elseif (isset($_GET['page'])) {
    // Backward compatibility: index.php?page=features
    $request = $_GET['page'];
} else {
    // Default: index.php shows homepage
    $request = 'home';
}

// Clean and validate the request
$request = strtolower(trim($request));
$request = preg_replace('/[^a-z0-9\-_]/', '', $request); // Security: allow only alphanumeric, dash, underscore

// Define valid routes
$routes = [
    'home' => 'pages/home.php',
    '' => 'pages/home.php', // Empty PATH_INFO = home
    'features' => 'pages/features.php',
    'demo' => 'pages/demo.php',
    'contact' => 'pages/contact.php',
    'pricing' => 'pages/pricing.php',
    'about' => 'pages/about.php',
];

// Get the page to display
$page = $routes[$request] ?? $routes['home'];
$pageFile = __DIR__ . '/' . $page;

// Check if page exists
if (!file_exists($pageFile)) {
    http_response_code(404);
    $page = 'pages/404.php';
    $pageFile = __DIR__ . '/' . $page;
}

// Load the page
include $pageFile;
?>

