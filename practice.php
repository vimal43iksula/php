
<form method="post" action="">

	Enter a value:
 <input type="number" name="number">
 <input type="submit" name="submit" value="submit">


</form>
<?php

$number= $_POST['number'];

switch ($number) {
	case '1':
			echo "one";
			break;
	
	case '2':
			echo "two";
			break;
	
	default:
			echo "Wrong value";
		break;
}
?>