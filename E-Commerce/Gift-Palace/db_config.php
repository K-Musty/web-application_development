<?php
// Database configuration
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "gift-palace"; 


$connection = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($connection) {
    echo "connection successful"
}else{
    die("Connection failed: " . mysqli_connect_error());
}
?>