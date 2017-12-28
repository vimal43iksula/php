<?php
$number = 99;

if($number== 2 || $number== 3 || $number== 5 || $number== 7 || $number== 11)
	 echo "No is prime";

else if($number%2==0 || $number%3==0 || $number%5==0 || $number%7==0 || $number%11==0) 
		echo "$number is composite";

else echo "$number is prime";

?>