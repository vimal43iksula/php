<?php
$age = array("vimal"=>"22", "vivek"=>"23", "bavesh"=>"41", "prince"=>"12");
krsort($age);

foreach($age as $x => $x_value) {
	echo "key=" . $x . ", value=" . $x_value;
	echo "<br>";
}
	

?>


