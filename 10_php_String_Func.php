<!DOCTYPE html>
<html>
<head>
	<title>10_php_string_func</title>
</head>
<body>
<?php
    $var1 = "Hello, India";


   //displays the length of the string : strlen()  function.
   $length = strlen($var1);
   echo $length."</br>";


   // finds the position  of the given letter.

   $string1 = "marcopolo";
   $letr = 'o';
       //strpos() function finds the position of the letter in a string.
   $position = strpos("$string1", "$letr");

   echo "Your Searched letter :\" ". $letr . " \" is in : ". $position . "</br>";
?>
</body>
</html>