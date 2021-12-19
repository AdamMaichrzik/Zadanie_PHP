<?php 
require_once "connect.php";
//create connection
$connect= new mysqli($host, $db_user, $db_password, $db_name);

//check connection
if(mysqli_connect_errno($connect))
{
   echo 'Failed to connect to database: '.mysqli_connect_error();
}

$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] 
=== 'on' ? "https" : "http") . 
"://" . $_SERVER['HTTP_HOST'] . 
$_SERVER['REQUEST_URI'];

$url_components = parse_url($link);
parse_str($url_components['query'], $params);


$result=mysqli_query($connect,"select * from pageInfo WHERE pageID = '$test'");

while($row=mysqli_fetch_array($result))
{
 $pageTitle = $row['pageTitle'];
 $pageDesc = $row['pageDesc'];
 $pageIndex = $row['pageIndex'];
 $pageH1 = $row['pageH1'];
 $pageH2 = $row['pageH2'];
 $pageText = $row['pageText'];
}

?>
