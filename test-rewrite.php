<?php
/**
 * Test file to verify .htaccess rewrite rules are working
 * Access this file at: https://reighway.com/test-rewrite
 * If you see this content, the rewrite is working!
 */

echo "<!DOCTYPE html>
<html>
<head>
    <title>Rewrite Test</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 40px; background: #f5f5f5; }
        .success { background: #4CAF50; color: white; padding: 20px; border-radius: 5px; }
        .info { background: #2196F3; color: white; padding: 15px; border-radius: 5px; margin-top: 20px; }
    </style>
</head>
<body>
    <div class='success'>
        <h1>✅ Rewrite Rules Are Working!</h1>
        <p>If you can see this page at <strong>/test-rewrite</strong> (without .php), then your .htaccess is configured correctly.</p>
    </div>
    
    <div class='info'>
        <h2>Server Information:</h2>
        <p><strong>PHP Version:</strong> " . phpversion() . "</p>
        <p><strong>Request URI:</strong> " . $_SERVER['REQUEST_URI'] . "</p>
        <p><strong>Script Name:</strong> " . $_SERVER['SCRIPT_NAME'] . "</p>
        <p><strong>Server Software:</strong> " . $_SERVER['SERVER_SOFTWARE'] . "</p>
    </div>
    
    <div class='info'>
        <h2>Test Links:</h2>
        <ul>
            <li><a href='/'>Home</a></li>
            <li><a href='/about'>About</a></li>
            <li><a href='/service'>Service</a></li>
            <li><a href='/contact'>Contact</a></li>
            <li><a href='/career'>Career</a></li>
        </ul>
    </div>
</body>
</html>";
?>

