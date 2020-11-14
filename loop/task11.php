<?php

//find the factorial of 5
// hint : factorial of 5 = 5 x 4 x 3 x 2 x 1
$num = 5;  
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "Factorial of $num is $factorial";  
?>  