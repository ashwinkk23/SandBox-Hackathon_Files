<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    
    <title>Ultimate Messenger</title>
    
    <style type="text/css">
    
        body
        {
            background-image:url(12.jpg);
            background-repeat: repeat;
            background-size:cover;
            background-attachment: fixed;
        }
    </style>
    
</head>
    
    
    <body>
        <div id="show"></div>
        
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript">
        
        $(document).ready(function() {
           setInterval(function() {
               $('#show').load('outputmsg3.php')
           }, 2000); 
        });
        </script>
    </body>


</html>