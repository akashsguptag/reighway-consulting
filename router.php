<?php
/**
 * PHP Router - Works without .htaccess
 * This file handles clean URLs when mod_rewrite is not available
 */

// Get the requested path
$request_uri = $_SERVER['REQUEST_URI'];
$script_name = $_SERVER['SCRIPT_NAME'];

// Remove query string
$request_uri = strtok($request_uri, '?');

// Remove base path if in subdirectory
$base_path = str_replace(basename($script_name), '', $script_name);
if ($base_path !== '/') {
    $request_uri = str_replace($base_path, '', $request_uri);
}

// Remove leading/trailing slashes
$request_uri = trim($request_uri, '/');

// Default to index if empty
if (empty($request_uri)) {
    $request_uri = 'index';
}

// Map clean URLs to PHP files
$routes = [
    '' => 'index.php',
    'index' => 'index.php',
    'home' => 'index.php',
    'about' => 'about.php',
    'service' => 'service.php',
    'services' => 'service.php',
    'contact' => 'contact.php',
    'career' => 'career.php',
    'careers' => 'career.php',
    'privacy-policy' => 'privacy-policy.php',
    'privacy' => 'privacy-policy.php',
];

// Check if route exists
if (isset($routes[$request_uri])) {
    $file = $routes[$request_uri];
    if (file_exists($file)) {
        require_once $file;
        exit;
    }
}

// If direct PHP file request, serve it
if (file_exists($request_uri . '.php')) {
    require_once $request_uri . '.php';
    exit;
}

// 404 - Page not found
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: #f5f5f5;
        }
        .error-container {
            text-align: center;
            padding: 40px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 { color: #e74c3c; font-size: 72px; margin: 0; }
        h2 { color: #333; margin: 20px 0; }
        p { color: #666; margin: 20px 0; }
        a {
            display: inline-block;
            padding: 10px 20px;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        a:hover { background: #2980b9; }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>404</h1>
        <h2>Page Not Found</h2>
        <p>The page you are looking for does not exist.</p>
        <a href="/">Go to Homepage</a>
    </div>
</body>
</html>

