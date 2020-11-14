<?php


// Write a program to calculate and print the factorial of a number using a for loop. 
// The factorial of a number is the product of all integers up to and including that number, 
// so the factorial of 4 is 4*3*2*1= 24.
$num = 4;  
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "Factorial of $num is $factorial";  
?>  