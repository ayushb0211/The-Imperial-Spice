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


// Fetch menu items from the database
$sql = "SELECT name, email, phone, date, time, message,table_id FROM booking";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table>";
  echo "<h1>Customer booking</h1>";
  echo "<thead>";
  echo "<tr>";
  echo "<th style='border: 1px solid black;'>Name</th>"; // Add border style inline
  echo "<th style='border: 1px solid black;'>Email</th>";
  echo "<th style='border: 1px solid black;'>Phone</th>";
  echo "<th style='border: 1px solid black;'>Date</th>";
  echo "<th style='border: 1px solid black;'>Time</th>";
  echo "<th style='border: 1px solid black;'>Message</th>";
  echo "<th style='border: 1px solid black;'>Table_id</th>";
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";

  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td style='border: 1px solid black;'>" . $row["name"] . "</td>";
    echo "<td style='border: 1px solid black;'>" . $row["email"] . "</td>";
    echo "<td style='border: 1px solid black;'>" . $row["phone"] . "</td>";
    echo "<td style='border: 1px solid black;'>" . $row["date"] . "</td>";
    echo "<td style='border: 1px solid black;'>" . $row["time"] . "</td>";
    echo "<td style='border: 1px solid black;'>" . $row["message"] . "</td>";
    echo "<td style='border: 1px solid black;'>" . $row["table_id"] . "</td>";

    echo "</tr>";
  }

  echo "</tbody>";
  echo "</table>";
} else {
  echo "No bookings found";
}
//direct to web site


?>
