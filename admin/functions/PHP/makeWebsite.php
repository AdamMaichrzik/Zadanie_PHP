<?php
require_once "connect.php";
//create connection
$connect= new mysqli($host, $db_user, $db_password, $db_name);

//check connection
if(mysqli_connect_errno($connect))
{
   echo 'Failed to connect to database: '.mysqli_connect_error();
}
$pageTitle = isset($_POST['pageTitle']) ? $_POST['pageTitle'] : '';
$pageDesc = isset($_POST['pageDesc']) ? $_POST['pageDesc'] : '';
$pageIndex = isset($_POST['pageIndex']) ? $_POST['pageIndex'] : '';
$pageH1 = isset($_POST['pageH1']) ? $_POST['pageH1'] : '';
$pageH2 = isset($_POST['pageH2']) ? $_POST['pageH2'] : '';
$pageText = isset($_POST['pageText']) ? $_POST['pageText'] : '';

$result=mysqli_query($connect,"select * from pageInfo");


  if(isset($_POST['makeWebsiteButton']))
  {
    //Sending data to DB
    $sql = $connect -> 
    query("INSERT INTO `pageInfo`(`pageTitle`, `pageDesc`, `pageIndex`, `pageH1`, `pageH2`, `pageText`) 
    VALUES ('$pageTitle','$pageDesc','$pageIndex','$pageH1','$pageH2','$pageText')");
  }

  $result=mysqli_query($connect,"select * from dragdrop");

  if(isset($_POST['makeWebsiteButton']))
  {
    $result = mysqli_query($connect, "SELECT MAX(pageID) FROM pageInfo;");
    $row = mysqli_fetch_array($result);
    $getLastIDPlus = ('/'.'blog'.'/'.$row['MAX(pageID)']);
    $sql = $connect -> 
    query("INSERT INTO `dragdrop`(`text`, `href`) VALUES ('$pageTitle', '$getLastIDPlus')");
  }
?>