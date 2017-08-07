<?php
session_start();
require "initmsg.php";

$name=$_SESSION["username"];
$sql="update users set status = 0 where username='$name' ";

mysqli_query($con,$sql);
header("Location: http://ultimatecorp.esy.es/mainscreen.html"); /* Redirect browser */
        exit();
     
        mysqli_close($con);
?>

