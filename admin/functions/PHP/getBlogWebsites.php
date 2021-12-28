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
$question = "'Are you sure?'";

while($row=mysqli_fetch_array($result))
{
 $pageTitles[] = $row['pageTitle'];
 $pageTitlesID[] = $row['pageID'];
}

for ($i = 0; $i <= (count($pageTitles)-1); $i++) {
    echo '<tr>
    <th scope="row">
    <form method="post">
        <input style="border: none; outline: none; background-color: #e8e8e8; text-align: center" readonly="readonly" type="text" name="deletePageID" value="'.$pageTitlesID[$i].'"> 
    <br>
    </th>
    <td>'.$pageTitles[$i].'</td>
    <td>
    <a href="/blog/'.$pageTitlesID[$i].'" target="_blank">
        <button type="button" class="btn btn-primary">Show</button>
    </a>
    </td>
    <td>
    <a href="admin-panel-edit-page.php?pageID='.$pageTitlesID[$i].'" target="_blank">
        <button name="editPageButton" type="button" class="btn btn-warning">Edit</button>
    </a>
    </td>
    <td>
        <button class="btn btn-danger" onclick="return confirm('.$question.')" name="deletePageButton">Delete</button>
    </form>
    </td>
    </tr>';
  }

?>