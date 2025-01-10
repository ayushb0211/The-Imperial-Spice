<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "minip";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];

    // Insert new menu item into the database
    $sql = "INSERT INTO menu_items (name,description,price) VALUES ('$name', '$description', '$price')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New menu item added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>

