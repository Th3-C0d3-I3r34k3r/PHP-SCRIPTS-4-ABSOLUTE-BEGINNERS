<!DOCTYPE html>
<html>
<head>
	<title>14_php_nested-if_stmt</title>
</head>
<body>
     <?php
        $num1 = 50;
        $num2 = 20; 
        $num3 = 60;
         // if-else statement

        if( $num1 > $num2)
        {
        	if($num1 > $num3)
        	{
        		echo " num1 is greater";
        	}
        	else
        	{
        		echo"num3 is bigger";
        	}
        }
        else
        {
           echo "num2 is bigger";
        }


     ?>
</body>
</html>