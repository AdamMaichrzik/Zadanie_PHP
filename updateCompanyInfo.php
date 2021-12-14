<?php
require_once "connect.php";
//create connection
$connect= new mysqli($host, $db_user, $db_password, $db_name);

//check connection
if(mysqli_connect_errno($connect))
{
   echo 'Failed to connect to database: '.mysqli_connect_error();
}
$companyName = isset($_POST['companyName']) ? $_POST['companyName'] : '';
$companyNIP = isset($_POST['companyNIP']) ? $_POST['companyNIP'] : '';
$companyStreet = isset($_POST['companyStreet']) ? $_POST['companyStreet'] : '';
$companyPostalCode = isset($_POST['companyPostalCode']) ? $_POST['companyPostalCode'] : '';
$companyCityName = isset($_POST['companyCityName']) ? $_POST['companyCityName'] : '';
$companyPhoneNumber = isset($_POST['companyPhoneNumber']) ? $_POST['companyPhoneNumber'] : '';
$companyEmail = isset($_POST['companyEmail']) ? $_POST['companyEmail'] : '';

$result=mysqli_query($connect,"select * from companyInfo");

  if(isset($_POST['updateCompanyInfoButton']))
  {
    //Sending data to DB
    $sql = $connect -> 
    query("UPDATE `companyInfo` SET `companyName`='$companyName',`companyNIP`='$companyNIP',
    `companyStreet`='$companyStreet',`companyPostalCode`='$companyPostalCode',`companyCityName`='$companyCityName',
    `companyPhoneNumber`='$companyPhoneNumber',`companyEmail`='$companyEmail'");
  }
?>




 