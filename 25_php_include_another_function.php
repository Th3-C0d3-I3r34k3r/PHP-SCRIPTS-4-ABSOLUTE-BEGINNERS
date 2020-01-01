<!DOCTYPE html>
<html>
<head>
	<title>25_php_include_another_function</title>
</head>
<body>
	<?php
      echo"including own function";
        //create a function
       function add($var1, $var2)
       {
           $Ans = $var1 + $var2;
           return $Ans;
       }
    ?>
</body>
</html>