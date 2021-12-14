<?php 
require_once "connect.php";
//create connection
$connect= new mysqli($host, $db_user, $db_password, $db_name);

//check connection
if(mysqli_connect_errno($connect))
{
   echo 'Failed to connect to database: '.mysqli_connect_error();
}

$result=mysqli_query($connect,"select * from companyInfo");


while($row=mysqli_fetch_array($result))
{
 $companyName = $row['companyName'];
 $companyNIP = $row['companyNIP'];
 $companyStreet = $row['companyStreet'];
 $companyPostalCode = $row['companyPostalCode'];
 $companyCityName = $row['companyCityName'];
 $companyPhoneNumber = $row['companyPhoneNumber'];
 $companyEmail = $row['companyEmail'];
}

?>
