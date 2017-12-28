<?php

$number = array(2 ,10 ,20, 40 ,50, 100);

echo max($number);
echo "<br>";
echo min($number);
echo "<br>";

$arrlength = count($number);
echo array_sum($number) / $arrlength;


?>