<html>
<head>
</head>

<body>
 <form action="multi.php" method="post">
<input type="text" name="text">
<input type="submit" name="submit">

 </form>

<?php 

$fresh = array (
			 "vimal" => array (
			 			"age: " => "22",
 						 "phno: " => "8980983296",
 						 "add: " => "sion",
 						 "email: " => "vimal@gmail.com"
 						 ),

			  "bavesh" => array ("age: " => "24",
 						 "phno: " => "8832498326",
 						 "add: " => "chembur",
 						 "email: " => "bavesh@gmail.com"
 						 ),
			   "vivek" => array ("age: " => "23",
 						 "phno: " => "8980923496",
 						 "add: " => "bandra",
 						 "email: " => "vivek@gmail.com"
 						 ),
			    "prince" => array ("age: " => "22",
 						 "phno: " => "8928023496",
 						 "add: " => "virar",
 						 "email: " => "prince@gmail.com"
 						 )

);
	
  $fresh1 = fopen("fresh1.txt", "w") or die("unable to open file");

  foreach($fresh as $key => $value)
  {
  			$txt .= "\n$key";

     foreach($value as $k => $v)
     {
     		$txt .= ", $v";
     }
  }
  fwrite($fresh1, $txt);
  /* echo "<pre>";
     echo $txt;
     echo "<pre>";
     exit;*/
	fclose($fresh);
 
  


?>


  </body>

    </html>


