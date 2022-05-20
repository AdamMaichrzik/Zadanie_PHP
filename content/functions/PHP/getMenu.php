<?php 
require "../../../connect.php";
//create connection
$connect= new mysqli($host, $db_user, $db_password, $db_name);

$result=mysqli_query($connect,"SELECT * FROM `dragdrop` ORDER BY `dragdrop`.`listorder` ASC");


while($row=mysqli_fetch_array($result))
{
 $menuTitles[] = $row['text'];
 $menuLinks[] = $row['href'];
}

for ($i = 0; $i <= count($menuTitles); $i++) {
  if(isset($menuLinks[$i]))
  {
    echo ('<a href="'.$menuLinks[$i].'"'.'class="navbar-items">'.$menuTitles[$i]." "."</a>");
  }
  }
?>