<?php
require_once "../../../connect.php";
//create connection
$connect= new mysqli($host, $db_user, $db_password, $db_name);

$deletePageID = isset($_POST['deletePageID']) ? $_POST['deletePageID'] : '';

$result=mysqli_query($connect,"select * from pageInfo");

  if(isset($_POST['deletePageButton']))
  {
    //Sending data to DB
    $sql = $connect -> query("DELETE FROM `pageInfo` WHERE pageID = '$deletePageID'");
  }

  $result=mysqli_query($connect,"select * from dragdrop");

  if(isset($_POST['deletePageButton']))
  {
    //Sending data to DB
    $deletePageFromMenu = '/blog/'.$deletePageID;
    $sql = $connect -> query("DELETE FROM `dragdrop` WHERE href = '$deletePageFromMenu'");
  }
?>




 