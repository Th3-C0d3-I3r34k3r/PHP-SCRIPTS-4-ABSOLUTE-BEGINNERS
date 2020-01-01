<!DOCTYPE html>
<html>
<head>
	<title>13_php_else-if</title>
</head>
<body> 
	<?php
       $num1 = 10;
       $num2 = 10;

        //else-if statement

       if($num1 > $num2)
       {
       	 echo "num1 is samller than num2";

       }
       elseif($num2 > $num1)
       {
       	echo"num2 is greater than num1 ";
       }
       elseif($num1 == $num2)
       {
       	echo"num1 is equal to num2";
       }
	?>

</body>
</html>