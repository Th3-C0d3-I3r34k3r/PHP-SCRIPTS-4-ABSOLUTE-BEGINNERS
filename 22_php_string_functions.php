<!DOCTYPE html>
<html>
<head>
	<title>21_php_string_Functions</title>
</head>
<body>
      <?php 
      // This is for substring Function
         $fruits = "apple mango orange";
         $edited = substr($fruits, 2, 10); //2 indicates start point 
                                          //10 indicates end point
         echo("$edited");
         echo "</br>";

      // This section is for str_replace() funcn:
         $line = "i love apple";
         $replaced = str_replace("apple", "india", $line);
         echo $replaced;

      ?>
</body>
</html>