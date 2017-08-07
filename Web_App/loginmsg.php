<?php

session_start();

require "initmsg.php";
    
    $name = $_POST["username"];
	


$_SESSION["username"] = $name;
  
$sql="update users set status = 1 where username = '$name'";
mysqli_query($con,$sql);  
    
    
	   //echo "<br><h3>One row inserted </h3>";
        header("Location: http://ultimatecorp.esy.es/mainscreen.html"); /* Redirect browser */
        exit();
     
        mysqli_close($con);

?>