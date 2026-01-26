<?php
/**
 * Router for PHP Built-in Server
 * This handles clean URLs when using php -S localhost:8000
 */

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Serve static files directly
if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    return false;
}

// Remove trailing slash
$uri = rtrim($uri, '/');

// Route mapping
$routes = [
    // English routes
    '' => 'index.php',
    '/' => 'index.php',
    '/contact' => 'contact.php',
    '/legal-fields' => 'legal-fields.php',
    '/our-team' => 'our-team.php',
    '/careers' => 'careers.php',
    '/jurisdictions' => 'jurisdictions.php',
    '/news' => 'news.php',
    '/news-single' => 'news-single.php',
    
    // Serbian routes
    '/sr' => 'sr/index.php',
    '/sr/' => 'sr/index.php',
    '/sr/kontakt' => 'sr/kontakt.php',
    '/sr/pravne-oblasti' => 'sr/pravne-oblasti.php',
    '/sr/nas-tim' => 'sr/nas-tim.php',
    '/sr/karijere' => 'sr/karijere.php',
    '/sr/jurisdikcije' => 'sr/jurisdikcije.php',
    '/sr/vesti' => 'sr/vesti.php',
    '/sr/vest' => 'sr/vest.php',
];

// Check if route exists
if (isset($routes[$uri])) {
    $file = __DIR__ . '/' . $routes[$uri];
    if (file_exists($file)) {
        include $file;
        exit;
    }
}

// If no route found, try direct file access
if (file_exists(__DIR__ . $uri . '.php')) {
    include __DIR__ . $uri . '.php';
    exit;
}

// 404 Not Found
http_response_code(404);
echo '<!DOCTYPE html>
<html>
<head>
    <title>404 - Page Not Found</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; padding: 50px; }
        h1 { color: #333; }
    </style>
</head>
<body>
    <h1>404 - Page Not Found</h1>
    <p>The page you requested could not be found.</p>
    <p><a href="/">Return to Homepage</a></p>
</body>
</html>';
