<?php 
require_once "connect.php";
//create connection
$connect= new mysqli($host, $db_user, $db_password, $db_name);

//check connection
if(mysqli_connect_errno($connect))
{
   echo 'Failed to connect to database: '.mysqli_connect_error();
}

$result=mysqli_query($connect,"select * from mainPage");


while($row=mysqli_fetch_array($result))
{
 $mainHeader = $row['mainHeader'];
 $secondHeader = $row['secondHeader'];
 $firstPartHeader = $row['firstPartHeader'];
 $secondPartHeader = $row['secondPartHeader'];
 $thirdPartHeader = $row['thirdPartHeader'];
 $firstPartText = $row['firstPartText'];
 $secondPartText = $row['secondPartText'];
 $thirdPartText = $row['thirdPartText'];
 $thirdHeader = $row['thirdHeader'];
 $fullWidthText = $row['fullWidthText'];
 $mainTitle = $row['mainTitle'];
 $mainDesc = $row['mainDesc'];
 $mainIndex = $row['mainIndex'];
}

?>