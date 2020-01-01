<!DOCTYPE html>
<html>
<head>
	<title>26_php_multiple_functions</title>
</head>
<body>
     <?php
       echo "php_multiple_functions";
        // creating the first function : 

       function func1()
       {
        echo "Answer is : ";   
        echo "</br>";
       }

       //Creating the second function 
       //insert first function

       function func2($var1, $var2)
       {
       	  $result = func1();
       	  echo $result;
          $Ans = $var1 + $var2;
          return $Ans;
       }

     ?>
</body>
</html> 