<?php

require "initmsg.php";

$sql = "select * from users where status=1";
$records = mysqli_query($con,$sql);

$array1= array();
	$array2= array();
$i = 0;
while($mesg=mysqli_fetch_assoc($records))
{
	
	
	
	$array1[$i] = $mesg['username'];
	$array2[$i] = $mesg['image'];
	$i++;
	
	echo "<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Messenger</title>
    
    
    <meta charset="utf-8">
	<meta http-equiv="Refresh" content="20"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    
    <div class="container">
	
		<p style="margin-left: 25px; font-size:17px;"><img src="<?php echo $array2[0]; ?>" style="width: 50px; height: 50px; border-radius: 50px;" />&nbsp;&nbsp;<?php echo $array1[0]; ?></p>
		<p style="margin-left: 25px; font-size:17px; margin-top:15px;"><img src="<?php echo $array2[1]; ?>" alt="." style="width: 50px; height: 50px; border-radius: 50px;" />&nbsp;&nbsp;<?php echo $array1[1]; ?></p>
		<p style="margin-left: 25px; font-size:17px; margin-top:15px;"><img src="<?php echo $array2[2]; ?>" alt="." style="width: 50px; height: 50px; border-radius: 50px;" />&nbsp;&nbsp;<?php echo $array1[2]; ?></p>
		<p style="margin-left: 25px; font-size:17px; margin-top:15px;"><img src="<?php echo $array2[3]; ?>" alt="." style="width: 50px; height: 50px; border-radius: 50px;" />&nbsp;&nbsp;<?php echo $array1[3]; ?></p>
		<p style="margin-left: 25px; font-size:17px; margin-top:15px;"><img src="<?php echo $array2[4]; ?>" alt="." style="width: 50px; height: 50px; border-radius: 50px;" />&nbsp;&nbsp;<?php echo $array1[4]; ?></p>
		<p style="margin-left: 25px; font-size:17px; margin-top:15px;"><img src="<?php echo $array2[5]; ?>" alt="."style="width: 50px; height: 50px; border-radius: 50px;" />&nbsp;&nbsp;<?php echo $array1[5]; ?></p>
		
	
	</div>
	
</body>
</html>

	