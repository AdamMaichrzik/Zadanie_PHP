<?php

	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{

		if ($rezultat = @$polaczenie->query = mysql_query(
		"SELECT * FROM components", $polaczenie))
		{
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
				
				$wiersz = $rezultat->fetch_assoc();
				$_SESSION['component'] = $wiersz['componentCode'];
				
				header('Location: test.php');
				
			} 
			
		}
		$polaczenie->close();
	}
	
?>