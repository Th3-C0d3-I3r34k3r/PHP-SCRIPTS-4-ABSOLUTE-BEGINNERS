<!DOCTYPE html>
<html>
<head>
	<title>21_php_array-join</title>
</head>
<body>
     <?php
      $arr = array("a", "b", "c", "d", "e"); 
      echo "Join Arrays:<?br>";
      $list = implode("+", $arr);
       echo $list;




     ?>
</body>
</html>