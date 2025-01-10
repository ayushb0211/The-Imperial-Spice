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


$sql = "SELECT Name,Email,Subject,Message FROM contact";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table>";
  echo "<h1>customer Feedback</h1>";
  echo "<thead>";
  echo "<tr>";
  
  echo "<th style='border: 1px solid black;'>Name</th>";
  echo "<th style='border: 1px solid black;'>Email</th>";
  echo "<th style='border: 1px solid black;'>Subject</th>";
  echo "<th style='border: 1px solid black;'>Feedback</th>";
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";

  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    
    echo "<td style='border: 1px solid black;'>" . $row["Name"] . "</td>";
    echo "<td style='border: 1px solid black;'>" . $row["Email"] . "</td>";
    echo "<td style='border: 1px solid black;'>" . $row["Subject"] . "</td>";
    echo "<td style='border: 1px solid black;'>" . $row["Message"] . "</td>";
    echo "</tr>";
  }

  echo "</tbody>";
  echo "</table>";
} else {
  echo "No bookings found";
}



?>