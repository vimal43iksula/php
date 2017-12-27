 <html>
    <head>
        </head> 
    <body>
<form method ="post" action="">


Enter First Value :
    <input type ="number" name ="num1"><br>
    
    Enter Second Value :
    <input type ="number" name ="num2">

 <input type="radio" value= "Addition" name="calcu"> Addition<br />
    <input type="radio" value= "Subtraction" name="calcu"> Subtraction<br />
    <input type="radio" value= "Multiplication" name="calcu"> Multiplication<br />
    <input type="radio" value= "Division" name="calcu"> Division<br />

    <input type="submit" name="submit" value="submit">
</form>
</body>
</html> 



<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$calcu = $_POST['calcu'];


    function calculate($num1,$num2,$calcu)
    { 
        
        switch($calcu)
        {

        case "Addition":
          
            $compute = $num1 + $num2; 
            return $compute;

            break;
        case "Subtraction":
            $compute = $num1 - $num2; 
            echo $compute;

            break;
        case "Multiplication":
            $compute = $num1 * $num2; 
            echo $compute;

            break;
        case "Division":
            $compute = $num1 / $num2; 
            echo $compute;

            break;
        default:
        echo "NOTHING!";            
        }
    }    
echo "$calcu <br /> <br /> 1st Number: $num1 <br /> 2nd Number: $num2 <br /><br />";
echo "Answer is:".calculate($_POST['num1'],$_POST['num2'],$calcu); 


?>


