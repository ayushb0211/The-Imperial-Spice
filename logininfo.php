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
$sql = "SELECT id,name,password FROM customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table>";
  echo "<h1>Customer Login Information</h1>";
  echo "<thead>";
  echo "<tr>";
  
  echo "<th style='border: 1px solid black;'>id</th>";
  echo "<th style='border: 1px solid black;'>name</th>";
  echo "<th style='border: 1px solid black;'>password</th>";
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";

  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    
    echo "<td style='border: 1px solid black;'>" . $row["id"] . "</td>";
    echo "<td style='border: 1px solid black;'>" . $row["name"] . "</td>";
    echo "<td style='border: 1px solid black;'>" . $row["password"] . "</td>";
    echo "</tr>";
  }

  echo "</tbody>";
  echo "</table>";
} else {
  echo "No bookings found";
}

?>