<?php 
require "connect.php";
//create connection
$connect= new mysqli($host, $db_user, $db_password, $db_name);

//check connection
if(mysqli_connect_errno($connect))
{
   echo 'Failed to connect to database: '.mysqli_connect_error();
}

$result=mysqli_query($connect,"SELECT * FROM `dragdrop` ORDER BY `dragdrop`.`listorder` ASC");


while($row=mysqli_fetch_array($result))
{
 $menuTitles[] = $row['text'];
 $menuLinks[] = $row['href'];
}

for ($i = 0; $i <= count($menuTitles); $i++) {
    echo ('<a href="'.$menuLinks[$i].'"'.'class="navbar-items">'.$menuTitles[$i]." "."</a>");
  }
?>
