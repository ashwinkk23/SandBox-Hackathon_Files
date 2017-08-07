<?php
	
	$db_name = "u519370004_quiz";
	$mysql_user = "u519370004_shrey";
	$mysql_pass = "9743886003";
	$server_name = "mysql.hostinger.in";
	
	$con = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);

	if(!$con)
	{
		die("Error in connection " . mysqli_connect_error());
	}
	else
	{
		echo "<br><h3>Database connection Success</h3>";
	}

?>