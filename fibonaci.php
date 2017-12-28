<?php
  $a = 0;
  $b = 1;
 	
  echo "Fibonacci Series \n";
 
  echo $a.' '.$b.' ';
 
  for($i = 2; $i < 10; $i++){
 
    $c = $a + $b;
 
    echo $c.' ';
 
    $a = $b;
    $b = $c;
}
?>