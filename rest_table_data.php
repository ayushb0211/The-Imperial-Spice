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
$sql = "SELECT table_id ,is_booked FROM restaurant_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table>";
  echo "<h1>Table Booking Information</h1>";
  echo "<thead>";
  echo "<tr>";
  
  echo "<th style='border: 1px solid black;'>table id</th>";
  echo "<th style='border: 1px solid black;'>booking info</th>";
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";

  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    
    echo "<td style='border: 1px solid black;'>" . $row["table_id"] . "</td>";
    echo "<td style='border: 1px solid black;'>" . $row["is_booked"] . "</td>";
    echo "</tr>";
  }

  echo "</tbody>";
  echo "</table>";
} else {
  echo "No bookings found";
}

?>