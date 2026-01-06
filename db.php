<?php

// Use environment variables for Docker or fallback to defaults
$servername = getenv('DB_HOST') ?: "localhost";
$username = getenv('DB_USER') ?: "root";
$password = getenv('DB_PASSWORD');
if ($password === false) {
    $password = ""; // Fallback for non-Docker environments
}
$db = getenv('DB_NAME') ?: "onlineshop";

// Create connection
$con = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
