<?php
$host = "localhost";
$db_user = "31300146_maichrzik";
$db_password = "PCdi553a";
$db_name = "31300146_maichrzik";

// Create connection
$conn = @new mysqli($host, $db_user, $db_password, $db_name);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pageInfo (pageTitle, pageDesc, pageIndex, pageH1, pageH2, pageText)
VALUES ('Next page title', 'Next page desc ', 'index', 'Next page blog header h1', 'Another page blog h2', 'text text')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 