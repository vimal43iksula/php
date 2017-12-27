<html>
	<head>
		</head>	
	<body>
<form method ="post" action="greatestnum.php">

	Enter First Value :
	<input type ="number" name ="one"><br>
	
	Enter Second Value :
	<input type ="number" name ="two"><br>

	Enter third Value :
	<input type ="number" name ="three">

<input type="submit" name="submit" value="submit">

</form>
	
<?php
$one = $_POST['one'];
$two = $_POST['two'];
$three = $_POST['three'];

if($one>$two)
 {
 	 if($one>$three)
 	 {
 	 	 echo "$one is Greater";
 	 }
 	  else {
 	  	echo "$three is Greater";
 }

}

   else if($two>$three)
   {
   	echo "$two is greater";
	
   	}

   	else echo "$three is greater";
  

   ?>
   </body>
</html>