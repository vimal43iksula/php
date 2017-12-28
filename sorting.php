<?php
$numbers =   array(2,4,5,323,3421,3534);
rsort($numbers);

$arrlength = count($numbers);

for ($x=0; $x <= $arrlength ; $x++) { 
	
	echo $numbers[$x];
	echo "<br>";
}

echo "<br>"; 


$age = array("vimal"=>"22", "vivek"=>"23", "bavesh"=>"41", "prince"=>"12");
krsort($age);

foreach($age as $x => $x_value) {
	echo "key=" . $x . ", value=" . $x_value;
	echo "<br>";
}


?>