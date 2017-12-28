<?php
  
       $string="elephantaeiou";
       $vowels = array('a','e','i','o','u');
       $len = strlen($string);
       $num = 0;
       
        for($i=0; $i<$len; $i++){
           if(in_array($string[$i], $vowels))
           {
       		/*print_r(substr_count($string[$i]));	*/
           print_r(str_split($string[$i]));
               $num++;
           }
       
       }

       	
       //output
       echo "Number of vowels : ". $num;
   
?>

