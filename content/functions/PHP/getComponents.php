<?php
	require_once "connect.php";
	//create connection
	$connect= new mysqli($host, $db_user, $db_password, $db_name);
		
	//check connection
	if(mysqli_connect_errno($connect))
	{
		echo 'Failed to connect to database: '.mysqli_connect_error();
	}
		$pageGetID = $_GET['pageID'];
		$result=mysqli_query($connect,"select * from pageInfo WHERE pageID='$pageGetID'");

	while($row=mysqli_fetch_array($result))
	{
	$page_title = $_SESSION['pageTitle'] = $row['pageTitle'];
	$page_desc = $_SESSION['pageDesc'] = $row['pageDesc'];
	$page_index = $_SESSION['pageIndex'] = $row['pageIndex'];
	$page_H1 = $_SESSION['pageH1'] = $row['pageH1'];
	$page_H2 = $_SESSION['pageH2'] = $row['pageH2'];
	$page_text = $_SESSION['pageText'] = $row['pageText'];
	}
?>