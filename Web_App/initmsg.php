<?php
	
	$db_name = "sandbox";
	$mysql_user = "root";
	$mysql_pass = "";
	$server_name = "localhost";
	
	$con = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);

	if(!$con)
	{
		die("Error in connection " . mysqli_connect_error());
	}
?>