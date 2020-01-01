<!DOCTYPE html>
<html>
<head>
	<title>24_php_function_with_parameters</title>
</head>
<body>
      <?php 
      function add($var1, $var2)
      {
         $Ans = $var1 + $var2;
         return $Ans;
      }
        echo "</br>";
        $result = add(5, 10);
        echo $result;

      ?>
</body>
</html>