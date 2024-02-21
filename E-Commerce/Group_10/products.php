<?php
// Include database configuration file
include 'db_config.php';

// Fetch products from database
$query = "SELECT * FROM products";
$result = mysqli_query($connection, $query);

if(mysqli_num_rows($result) > 0){
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)){
        echo "Product: " . $row["name"]. " - Price: $" . $row["price"]. "<br>";
    }
} else {
    echo "No products available";
}

// Close database connection
mysqli_close($connection);
?>
