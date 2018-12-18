<?php  
 //account.php 
 session_start();  
 if(isset($_SESSION["user_name"]) )  
 {  
     
 }  
 else  
 {  
      header("location: auth.php");  
 }  
 ?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ავტორიზაცია</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
</head>
<body>

<div class="login-page">
  <div class="form">

        
   მოგესალმებით ბატონო  <h1 ><?php  echo $_SESSION["user_name"]; ?> </h1>
    
    <a href="log.php">გასვლა</a>


  </div>
</div>
</body>
</html>