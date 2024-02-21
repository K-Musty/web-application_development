<?php
// Start the session
session_start();

// Check if product is added to cart
if(isset($_POST['add_to_cart'])){
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Add product to cart session variable
    $_SESSION['cart'][$product_id] = $quantity;
}

// Display cart items
if(isset($_SESSION['cart'])){
    foreach($_SESSION['cart'] as $product_id => $quantity){
        // Retrieve product details from database based on $product_id
        // Display product details and quantity in the cart
        echo "Product ID: " . $product_id . " - Quantity: " . $quantity . "<br>";
    }
} else {
    echo "Your cart is empty";
}

// Checkout logic goes here
?>
