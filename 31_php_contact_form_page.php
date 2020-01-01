<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <?php
    $to = "ittamilan@gmail.com";
    $subject = "message";
    $body =$_REQUEST['message'];
    $email=$_REQUEST['mail'];
    $header="From:$email"; 
   ?>
</body>
</html>