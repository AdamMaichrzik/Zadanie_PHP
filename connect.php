<?php
$servername = "localhost";
$username = "31300146_maichrzik";
$password = "PCdi553a";
$dbname = "31300146_maichrzik";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT userID, user, pass FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["userID"]. " - Name: " . $row["user"]. "Pass:  " . $row["pass"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?> 