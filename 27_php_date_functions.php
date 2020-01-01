<!DOCTYPE html>
<html>
<head>
	<title>27_php_date_functions</title>
</head>
<body>
      <?php
      //php date funnctions
          $currentDate = DATE("d-m-y");
          echo"Current Date is : ". $currentDate. "</br>";
          $currentDay = DATE("d");
          $currentMonth = DATE("m");
          $currentYear = DATE("y");
          echo "Today's Date is : ". $currentDay . "</br>";
          echo "Today's Month is : ". $currentMonth. "</br>";
          echo "Today's Year is : ". $currentYear. "</br>";
       ?>
</body>
</html>