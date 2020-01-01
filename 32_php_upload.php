<!DOCTYPE html>
<html>
<head>
	<title>32_php_upload</title>
</head>
<body>
   <?php
    echo "FileName Is : " . $_FILES["upload"]["name"] . "</br>";
    echo "File Type Is : ". $_FILES["upload"]["type"] . "</br>";
    echo "File Size Is : ". $_FILES["upload"]["size"] . "</br>";


      if(file_exists("uploads/" . $_FILES["upload"]["name"]))
      {

      	echo $_FILES["upload"]["name"] . "already exists.";
      }

      else{
              move_uploaded_file($_FILES["upload"]["name"], "upload/". $_FILES["upload"]["name"]);
              echo "File is stored in " . "upload/". $_FILES["upload"]["name"];
      }
   ?>
</body>
</html>