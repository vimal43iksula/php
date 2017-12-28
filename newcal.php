 <html>
    <head>
        </head> 
    <body>
<form method ="post" action="">


Enter First Value :
    <input type ="number" name ="num1"><br>
    
    Enter Second Value :
    <input type ="number" name ="num2">

 <input type="submit" value= "Addition" name="calcu">
    <input type="submit" value= "Subtraction" name="calcu"> 
    <input type="submit" value= "Multiplication" name="calcu"> 
    <input type="submit" value= "Division" name="calcu">

   
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
            echo $compute;
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


