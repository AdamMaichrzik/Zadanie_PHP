<?php 
require_once "../../../connect.php";
//create connection
$connect= new mysqli($host, $db_user, $db_password, $db_name);

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
 $mainTitleSEO = $row['mainTitleSEO'];
 $mainDesc = $row['mainDesc'];
 $mainIndex = $row['mainIndex'];
}

?>
