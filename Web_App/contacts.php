<?php
    session_start();
    require "initmsg.php";

    $name = $_SESSION["username"];
	
	$sql = "select * from users where username = '$name' ";
	
	$res1 = mysqli_query($con,$sql);
	
	$res = mysqli_fetch_row($res1);
	
		$img = $res[2];
		
		$sql1="select * from users";
		$result=mysqli_query($con,$sql1);
		
		
	
	//echo $img;
?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
<title>Messenger</title>
    
    
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    
    <div class="container-fluid">
        
       
        
		<div align="center"><img src="<?php echo $img; ?>" style="border-radius: 50%; width: 105px; height: 105px; margin-top: 20px;"/></div>
		<p align="center" style="margin-top: 30px; font-size: 22px;"><?php echo $name; ?></p>
        <p><img src="gweb1.png" style="border-radius:50%; width: 60px; height: 60px;">Half Engineers</p>
		<p><a href = "ultimatemain2.php" target = "chatbox" ><img src="http://ultimatecorp.esy.es/images/batman.jpg" style="border-radius:50%; width: 60px; height: 60px;"><span style="width:60px"> Disha</span></a></p><br>
		<p><a href = "ultimatemain3.php" target = "chatbox" ><img src="http://ultimatecorp.esy.es/images/bond1.jpg" style="border-radius:50%;width: 60px; height: 60px;"> <span style="width:60px">Steve Jobs </span></a></p><br>
		<p><a href = "ultimatemain2.php" target = "chatbox" ><img src="http://ultimatecorp.esy.es/images/spidy.jpeg" style="border-radius:50%;width: 60px; height: 60px;"><span style="width:60px"> Larry </span></a></p><br>
        
        <form action="logout.php">
            <input type = "submit" value="Logout" style="background-color: #0084ff; border: #fff; color: white;"/>
        </form>
        
    </div>
</body>
</html>