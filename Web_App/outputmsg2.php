<?php
session_start();

require "initmsg.php";



$sql = "select * from ultimate where Number='Disha' or Number='Shreyas'";
$records = mysqli_query($con,$sql);

$user1 = $_SESSION["username"];

while($mesg=mysqli_fetch_assoc($records))
    {
        if( strcmp($user1,$mesg['Number']) )
        {
	        echo "<p class=\"p1\" style=' color: white; font-size: 14px; padding-bottom: 5px; padding-top: 3px; padding-left: 6px;'>".$mesg['Number']."</p>";
            echo"<br>";
            echo "<p class=\"p1\" style=' padding-top: 5px; padding-left: 6px; font-size: 18px;'>".$mesg['Msg']."</p>";
            echo"<br>"; 
            echo"<br>"; 
			
			
			//echo "<p class=\"p2\" style='right:20px; color: white; font-size: 14px; padding: 5px;'>".$mesg['Number']."<br>".$mesg['Msg']."\n";
            
        }
        
        else
        {
            echo "<p class=\"p2\" style='right:20px;font-size:14px; padding-bottom: 5px; padding-top: 3px; padding-left: 6px;'>"."\n"."</p>";
            echo"<br>";
            echo "<p class=\"p2\" style=' right:20px;padding-top: 5px; padding-left: 6px; font-size: 18px;'>".$mesg['Msg']."</p>";
            echo"<br>";
            echo"<br>";
        }
    }
?>
  
<html>
<head>
<style type="text/css">
        
        .p1
        {
            width: 225px;
            height: auto;
            background-color: #7f38ec;
			
            border-radius: 5px;
            position: absolute;
            font-family: Robota,sans-serif;
            font-size: 14px;
            line-height: 22px;
            color: white;
            text-align:left;
        }
        
        .p1:after
        {
            content: '';
            width: 0px;
            height: 0px;
            border-top: 10px solid transparent;
            border-left: 10px solid #7f38ec;
            border-bottom: 10px solid transparent;
            border-right: 10px solid transparent;
            /*position: absolute;*/
            
        }
    
    .p2
        {
            width: 225px;
            height: auto;
            background-color: #0084ff;
			
            border-radius: 5px;
            position: absolute;
            font-family: Robota,sans-serif;
            font-size: 14px;
            line-height: 22px;
            color: white;
            text-align:left;
        }
        
        .p2:after
        {
            content: '';
            width: 0px;
            height: 0px;
            border-top: 10px solid transparent;
            border-left: 10px solid #0084ff;
            border-bottom: 10px solid transparent;
            border-right: 10px solid transparent;
            /*position: absolute;*/
        }
    </style>    
</head>

</html>