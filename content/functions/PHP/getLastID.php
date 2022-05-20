<?php
require_once "connect.php";
//create connection
$connect= new mysqli($host, $db_user, $db_password, $db_name);

$result = mysqli_query($connect, "SELECT MAX(pageID) FROM pageInfo;");
$row = mysqli_fetch_array($result);
echo $row['MAX(pageID)'];

?>