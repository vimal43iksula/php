<?php

$txt = "hello world!";
$txt1 = "INDIA IS MY COUNTRY";
$txt2 = "hello india";	

	echo strtoupper($txt);
	 echo "<br><br>";
	echo strtolower($txt1);
      echo "<br><br>";
    echo ucfirst($txt2);  
    echo "<br><br>";
    echo ucwords($txt2);  
  echo "<br><br>";
    echo str_replace("World", "India", "Hello World!");
?>