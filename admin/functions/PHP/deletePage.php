<?php
require_once "connect.php";
//create connection
$connect= new mysqli($host, $db_user, $db_password, $db_name);

//check connection
if(mysqli_connect_errno($connect))
{
   echo 'Failed to connect to database: '.mysqli_connect_error();
}

$deletePageID = isset($_POST['deletePageID']) ? $_POST['deletePageID'] : '';

$result=mysqli_query($connect,"select * from pageInfo");

  if(isset($_POST['deletePageButton']))
  {
    //Sending data to DB
    $sql = $connect -> query("DELETE FROM `pageInfo` WHERE pageID = '$deletePageID'");
  }
?>




 