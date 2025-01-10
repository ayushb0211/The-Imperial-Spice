<?php
session_start();

// Database connection parameters
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'minip';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['login'])) {
    $user_type = $_POST['user_type'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    
    if ($user_type === 'customer') 
    {
        // Check if the customer exists in the database
        $query = "Select * from customers WHERE name='$name' AND password='$password'";
        $result = mysqli_query($conn, $query);
        
        if(mysqli_num_rows($result) == 1) {
            // Customer exists, login
            $_SESSION['customer'] = $name;
            header('Location: index1.php'); // Redirect to customer dashboard upon successful login
            exit();
        } else {
            $insert_query = "INSERT INTO customers (name, password) VALUES ('$name', '$password')";
            if(mysqli_query($conn, $insert_query)) {
                // New customer added successfully, log in
                $_SESSION['customer'] = $name;
                header('Location: index1.php'); // Redirect to customer dashboard
                exit();
            } else {
                // Error adding new customer
                echo "Error: " . mysqli_error($conn);
                // Handle the error as needed
            }    
        }
    } elseif ($user_type === 'admin')
     {
        // Check if the admin credentials are valid
        $admin_query = "SELECT * FROM admins WHERE name='$name' AND password='$password'";
        $admin_result = mysqli_query($conn, $admin_query);
        
        if(mysqli_num_rows($admin_result) == 1) {
            // Admin login
            $_SESSION['admin'] = $name;
            header('Location: admin_dashboard.php'); // Redirect to admin dashboard upon successful login
            exit();
        } else {
            // Invalid admin credentials
            include("popup.html");
        }
    }
}

mysqli_close($conn);
?>

