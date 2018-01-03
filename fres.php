<html>
<head>
</head>

<body>
 <form action="#" method="post">
<input type="text" name="text">
<input type="submit" name="submit">

 </form>

<?php 

$file = fopen("fresh1.txt" ,'r') or die('hello');


$name = $_POST['text'];

while(!feof($file)) {
  $data =  fgets($file) . "<br>";
 // echo $data;
  $my_data = explode(",",$data);
 //echo $data;
  if( $my_data[0] == $name){
  	echo '<pre>';

 print_r(implode($my_data));
   	echo '</pre>';
} 


}

 fclose($file);


?>

</body>

    </html>