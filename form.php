<html>
<body>

<form action="#" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>

<?php

 echo $_POST["name"];
 echo "<br>";
   echo $_POST["email"]; 

?>