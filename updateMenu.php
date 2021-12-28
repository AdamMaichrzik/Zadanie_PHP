<?php
    require_once "connect.php";
    //create connection
    $connect= new mysqli($host, $db_user, $db_password, $db_name);
    if ($connect->connect_error) {
        die('Error : ('. $connect->connect_errno .') '. $connect->connect_error);
    }
    $array = $_POST['arrayorder'];
    
    if ($_POST['update'] == "update"){
        
    $count = 1;
    foreach ($array as $idval) {
    $sql = "UPDATE dragdrop SET listorder = " . $count . " WHERE id = " . $idval;
    if ($connect->query($sql) === TRUE) {
    } else {
    echo "Error updating record: " . $connect->error;
    }
    $count ++; 
    }
    echo 'All saved! refresh the page to see the changes';
    }
?>