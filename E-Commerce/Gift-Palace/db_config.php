<?php
// Database configuration
$servername = "localhost"; // Change this to your database server name if different
$username = "your_username"; // Change this to your database username
$password = "your_password"; // Change this to your database password
$database = "your_database"; // Change this to your database name

// Create connection
$connection = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>