<?php 


$num1 = 34;
$num2 = 4;



//find the numbers 
// -which should be multiplied with $num2 and should be added to resultant to get $num1;

$quotient = $num1/$num2;

echo "Number to be multiplied with $num2 is $quotient";
echo "<br/>";

$number = $num1-($quotient*$num2);

echo "Number to be added in ($quotient*$num2) is $number to get $num1";


