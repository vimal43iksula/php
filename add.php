<form method="post" action="#">
Enter value 1:
<input type="number" name="number1">

Enter value 2:
<input type="number" name="number2">

<input type="submit" name="submit" value="submit">
</form>


<?php

   $number1 = $_POST['number1'];
   $number2 = $_POST['number2'];

   $number3 = $number1 + $number2;
   echo "$number3";
   echo "<br/>";
   $number3 = $number1 - $number2;
   echo "$number3";
   
?>