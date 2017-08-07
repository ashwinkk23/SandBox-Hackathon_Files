<html> 
<head><title>Messages</title>
    
    
    
    <style type="text/css">
    
    input[type="text"] 
    {
        width: 800px;
        height: 40px;
        font-size: 20px;
    }
        body
        {
            background-image: url(backf6.jpg);
        }
        
        input[type="submit"] 
        {
            background-color: white;
            color: black;
			padding: 5px;
			font-size: 17px;
        }
    </style>
</head>
<body>
    <form action="addmsg2.php" method="post" enctype="multipart/form-data" >
    

        <input type="text" name="name" id="msg"/>
		<input type="file" name="image1" accept="image/jpeg">
        <input type="submit" value="Send" id="submitbtn"  />
        
    </form>
	
	
	
    
    
    
</body>
</html>