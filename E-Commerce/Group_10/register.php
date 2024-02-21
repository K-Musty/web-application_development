<?php
// Establish database connection (assuming you've already done this)
// Include database configuration file
include 'db_config.php';

// Check if form is submitted
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Get form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into database
    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
    $result = mysqli_query($connection, $query);

    if($result){
        // Registration successful
        echo "Registration successful!";
    } else {
        // Registration failed
        echo "Error: " . mysqli_error($connection);
    }
}
?>
