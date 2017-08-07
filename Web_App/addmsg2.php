<?php
session_start();
require "initmsg.php";

$mobile = $_SESSION["username"];
$msg = $_POST["name"];


$image1=$_FILES['image1']['name'];

$temp_name1=$_FILES["image1"]["tmp_name"];
$target_path1="images/".$image1;

if(move_uploaded_file($temp_name1,$target_path1)){
	

}
else{
	
}

$link1="http://ultimatecorp.esy.es/images/".$image1;

if($link1 == "http://ultimatecorp.esy.es/images/")
	$sql =  "insert into ultimate(Number,Msg,link) values('$mobile','$msg','$link1');";

else
	$sql =  "insert into ultimate(Number,Msg,link) values('$mobile','$msg','$link1');";

if(mysqli_query($con,$sql))
{
	//echo "<br><h3>One row inserted </h3>";
    //echo file_get_contents('http://ultimatecorp.esy.es/indexmsg.php');
    
    header("Location: http://ultimatecorp.esy.es/indexmsg.php"); /* Redirect browser */
        exit();
} 

else
{
	echo "Error in insertion" . mysqli_error($con);
}

?>
