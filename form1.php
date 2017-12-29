<html>
<head>
</head>

<body>
	<h2>PERSONAL DETAILS</h2>
	<form method="post" action="#">
		Name:<input type="text" name="name"><br><br>
		Email:<input type="email" name="email"><br><br>
		
		Mobile No:<input type="tel" name="mobile" maxlength="10"/><br><br>
		
		Gender:
		Male<input type="radio" name="gender" value="male">
		Female<input type="radio" name="gender" value="female">
		<br><br>		  

		vehicles:
		  Bike<input type="checkbox" name="vehicle" value="bike">
		  Car<input type="checkbox" name="vehicle" value="car">	 
		  Cycle<input type="checkbox" name="vehicle" value="Cycle">

 		<br><br><input type="submit" name="submit">
	</form>
</body>	
</html>
<?php
   function textvalid($data) {
   		$data = trim($data);
   		$data = stripslashes($data);
   		$data = htmlspecialchars($data);
   		return $data;
}

	function validate_mobile($mobile) {
   	 			return preg_match('/^[0-9]{10}+$/', $mobile);
	}


if($_SERVER['REQUEST_METHOD']=="POST"){

		if(empty($_POST['name'])){
		echo  "Name Field is empty";
		echo "<br>";
		}
		else {
			 $name = textvalid($_POST['name']);
		
		if (ctype_alpha($name) === false) {
  $errname = 'Name must contain letters and spaces only'; 
  		echo $errname; 
  		echo "<br>";
}}


		if(empty($_POST['email'])){
		echo  "Email Field is empty";
		echo "<br>";
		}
		else {
			 $email = textvalid($_POST['email']);
		$errmail = 'Enter Valid Email'; 
  		echo $errmail;
		}

		if(empty($_POST['mobile']) && validate_mobile($_POST['mobile'])){
		echo  "Mobile Field is empty";
		echo "<br>";
		}
		else{
			 if (ctype_digit($mobile) === false) {
  	
  		$errnum = 'Only Numbers are allowed in Mobile Field'; 
  		echo $errnum; 
  		echo "<br>";
			}
			 $mobile = $_POST['mobile'];
		
	}

}
echo "<br>";
echo "Name: " .$name;
echo "<br>";
echo "Email: ".$email;
echo "<br>";
echo "Mobile No: " .$mobile;
echo "<br>";

?>