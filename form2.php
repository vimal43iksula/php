<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

$nameErr = $emailErr = $genderErr = $phonenoErr=$websiteErr = "";
$name = $email = $gender = $comment = $phoneno=$website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (empty($_POST["name"])) {
   $nameErr = "Name is required";
 } else {
   $name = test_input($_POST["name"]);
      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
     $nameErr = "Only letters and white space allowed"; 
   }
 }
 
 if (empty($_POST["email"])) {
   $emailErr = "Email is required";
 } else {
   $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     $emailErr = "Invalid email format"; 
   }
 }
 
 if (empty($_POST["phoneno"])) {
   $phonenoErr = "Phone no is required";
 } else {
   $phoneno = test_input($_POST["phoneno"]);
    if (!preg_match("/^\d{10}$/",$phoneno)) {
     $phoneno = "Invalid Mobile no"; 
   }
}
 

 if (empty($_POST["website"])) {
   $website = "";
 } else {
   $website = test_input($_POST["website"]);
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
     $websiteErr = "Invalid URL"; 
   }    
 }


 if (empty($_POST["gender"])) {
   $genderErr = "Gender is required";
 } else {
   $gender = test_input($_POST["gender"]);
 }
}

function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}
?>



<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 Name: <input type="text" name="name">
 <span class="error">* <?php echo $nameErr;?></span>
 <br><br>

 E-mail: <input type="text" name="email">
 <span class="error">* <?php echo $emailErr;?></span>
 <br><br>
 
 Phone NO:<input type="tel" name="phoneno" maxlength="10">
 <span class="error">* <?php echo $phonenoErr;?></span>
 <br><br>


 Website: <input type="text" name="website">
 <span class="error"><?php echo $websiteErr;?></span>
 <br><br>

 Gender:
 <input type="radio" name="gender" value="female">Female
 <input type="radio" name="gender" value="male">Male


 <input type="submit" name="submit">

