<?php
require_once "../../../connect.php";
//create connection
$connect= new mysqli($host, $db_user, $db_password, $db_name);

$mainHeader = isset($_POST['mainHeader']) ? $_POST['mainHeader'] : '';
$secondHeader = isset($_POST['secondHeader']) ? $_POST['secondHeader'] : '';
$firstPartHeader = isset($_POST['firstPartHeader']) ? $_POST['firstPartHeader'] : '';
$secondPartHeader = isset($_POST['secondPartHeader']) ? $_POST['secondPartHeader'] : '';
$thirdPartHeader = isset($_POST['thirdPartHeader']) ? $_POST['thirdPartHeader'] : '';
$firstPartText = isset($_POST['firstPartText']) ? $_POST['firstPartText'] : '';
$secondPartText = isset($_POST['secondPartText']) ? $_POST['secondPartText'] : '';
$thirdPartText = isset($_POST['thirdPartText']) ? $_POST['thirdPartText'] : '';
$thirdHeader = isset($_POST['thirdHeader']) ? $_POST['thirdHeader'] : '';
$fullWidthText = isset($_POST['fullWidthText']) ? $_POST['fullWidthText'] : '';
$mainTitle = isset($_POST['mainTitle']) ? $_POST['mainTitle'] : '';
$mainTitleSEO = isset($_POST['mainTitleSEO']) ? $_POST['mainTitleSEO'] : '';
$mainDesc = isset($_POST['mainDesc']) ? $_POST['mainDesc'] : '';
$mainIndex = isset($_POST['mainIndex']) ? $_POST['mainIndex'] : '';


$result=mysqli_query($connect,"select * from mainPage");

  if(isset($_POST['updateMainPageInfoButton']))
  {
    //Sending data to DB
    $sql = $connect -> 
    query("UPDATE `mainPage` SET `mainHeader`='$mainHeader',`secondHeader`='$secondHeader',`firstPartHeader`='$firstPartHeader',`secondPartHeader`='$secondPartHeader',`thirdPartHeader`='$thirdPartHeader',`firstPartText`='$firstPartText',`secondPartText`='$secondPartText',`thirdPartText`='$thirdPartText',`thirdHeader`='$thirdHeader',`fullWidthText`='$fullWidthText',`mainTitle`='$mainTitle',`mainTitleSEO`='$mainTitleSEO',`mainDesc`='$mainDesc',`mainIndex`='$mainIndex' WHERE 1");
  }
  $result=mysqli_query($connect,"select * from dragdrop");

  if(isset($_POST['updateMainPageInfoButton']))
  {
    //Sending data to DB
    $sql = $connect -> query("UPDATE `dragdrop` SET `text` = '$mainTitle' WHERE id = 1");
  }
?>