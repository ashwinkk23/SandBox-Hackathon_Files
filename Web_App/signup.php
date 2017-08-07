<?php


require "initmsg.php";


$name = $_POST["name"];
$passwd = $_POST["password"];
$image1=$_FILES['image1']['name'];

$temp_name1=$_FILES["image1"]["tmp_name"];
$target_path1="images/".$image1;

if(move_uploaded_file($temp_name1,$target_path1)){
	

}
else{
	
}

$link1="http://ultimatecorp.esy.es/images/".$image1;


$dept = $_POST["dept"];



$sql = "insert into users(username,password,image,dept) values('$name','$passwd','$link1','$dept')";
$res = mysqli_query($con, $sql);

if(!$res)
	echo mysqli_error($con);
else
	echo "Query executed ";

mysqli_close($con);

?>
