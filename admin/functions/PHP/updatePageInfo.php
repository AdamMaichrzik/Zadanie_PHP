<?php
require_once "../../../connect.php";
//create connection
$connect= new mysqli($host, $db_user, $db_password, $db_name);

$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] 
=== 'on' ? "https" : "http") . 
"://" . $_SERVER['HTTP_HOST'] . 
$_SERVER['REQUEST_URI'];

$url_components = parse_url($link);
parse_str($url_components['query'], $params);

$test = $params['pageID'];

$pageTitle = isset($_POST['pageTitle']) ? $_POST['pageTitle'] : '';
$pageTitleSEO = isset($_POST['pageTitleSEO']) ? $_POST['pageTitleSEO'] : '';
$pageDesc = isset($_POST['pageDesc']) ? $_POST['pageDesc'] : '';
$pageIndex = isset($_POST['pageIndex']) ? $_POST['pageIndex'] : '';
$pageH1 = isset($_POST['pageH1']) ? $_POST['pageH1'] : '';
$pageH2 = isset($_POST['pageH2']) ? $_POST['pageH2'] : '';
$pageText = isset($_POST['pageText']) ? $_POST['pageText'] : '';

$result=mysqli_query($connect,"select * from pageInfo");

  if(isset($_POST['updatePageInfoButton']))
  {
    //Sending data to DB
    $sql = $connect -> 
    query("UPDATE `pageInfo` SET `pageID`='$test',`pageTitle`='$pageTitle',`pageTitleSEO`='$pageTitleSEO',`pageDesc`='$pageDesc',`pageIndex`='$pageIndex',`pageH1`='$pageH1',`pageH2`='$pageH2',`pageText`='$pageText' WHERE `pageID`='$test'");
  }
  $result=mysqli_query($connect,"select * from dragdrop");

  if(isset($_POST['updatePageInfoButton']))
  {
    //Sending data to DB
    $deletePageFromMenu = '/blog/'.$test;
    $sql = $connect -> query("UPDATE `dragdrop` SET `text` = '$pageTitle' WHERE href = '$deletePageFromMenu'");
  }
?>




 


 