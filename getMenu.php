<?php 
require_once "connect.php";
//create connection
$connect= new mysqli($host, $db_user, $db_password, $db_name);

//check connection
if(mysqli_connect_errno($connect))
{
   echo 'Failed to connect to database: '.mysqli_connect_error();
}

$result=mysqli_query($connect,"select * from pageInfo");


while($row=mysqli_fetch_array($result))
{
 $menuTitles[] = $row['pageTitle'];
}

for ($i = 0; $i <= count($menuTitles); $i++) {
    echo ($menuTitles[$i]." ");
  }
?>