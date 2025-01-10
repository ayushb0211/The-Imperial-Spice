<?php
// Establish database connection (replace these details with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$database = "minip";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id,name,description,price FROM menu_items";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table>";
  echo "<h1>Menu Items</h1>";
  echo "<thead>";
  echo "<tr>";
  
  echo "<th style='border: 1px solid black;'>id</th>";
  echo "<th style='border: 1px solid black;'>name</th>";
  echo "<th style='border: 1px solid black;'>description</th>";
  echo "<th style='border: 1px solid black;'>price</th>";
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";

  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    
    echo "<td style='border: 1px solid black;'>" . $row["id"] . "</td>";
    echo "<td style='border: 1px solid black;'>" . $row["name"] . "</td>";
    echo "<td style='border: 1px solid black;'>" . $row["description"] . "</td>";
    echo "<td style='border: 1px solid black;'>" . $row["price"] . "</td>";
  
  

    echo "</tr>";
  }

  echo "</tbody>";
  echo "</table>";
} else {
  echo "No bookings found";
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Menu</title>
</head>
<body>
    <h1>Add New Menu Item</h1>
    <form action="addmenu.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="description">description:</label>
        <textarea id="ingredients" name="ingredients" required></textarea><br><br>
        
        <label for="price">Price:</label>
        <input type="text" id="price" name="price" required><br><br>
        
        
        <input type="submit" value="Add Menu Item">
    </form>
</body>
</html>
