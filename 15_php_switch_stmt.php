<!DOCTYPE html>
<html>
<head>
	<title>15_php_switch_stmt</title>
</head>
<body>
   <?php 
       $var = 1;

       switch($var) {

       	case 1:
       	      echo "you have entered : 1";
       	      break;
        case 2:
              echo "you have entered : 2";
              break;
        case 3: 
               echo "you have entered : 3";
               break;
        default: 
               echo"none is selected!";

       }

   ?>
</body>
</html>