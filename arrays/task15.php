<?php

// create 1-D array having the the digits your cell phone number
// calculate the sum of digits using loop and print it.


//suppose my phone number is 9808383500. so creating an array with the digits.

$phoneNumber = array(9,8,0,8,3,8,3,5,0,0);

//now calculating the sum using for loop.
$sum =0;

for($i=0; $i<count($phoneNumber);$i++){
  $sum +=$i;
}

echo $sum;
