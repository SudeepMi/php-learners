<?php

//generate the number between 50 and 60 using rand(),
// check whether the number is even or odd using switch case
$number = rand(50 , 60);
$result = $number % 2;      // possible value 0 or 1, Right??

switch($result == 0){       // here we have to keep the variable for which the value will be checked
    // you should check two values 0 and 1,
    case 0:
    echo "even";
    break;
    case 1:
    echo "odd";
    break;
    default:
    echo "calculation error";
    break;

}

// we use switch() case, whenever we have multiple comparison.

// for example in if - else condition we have only certain comparison.
//  if (condition to check) {
//      # code...
//  }

//  but in switch case 

//  Basically, when we have to check multiple value for given variable, switch case plays role.
// switch case only performs identical operation on given values.
//  for example, we have a variable with value 1,2,3,4
//  switch ($variable) {
//      case 1:     //here it performs, if $variable===1
//      # code...
//      break;
//      case 2:    //here it performs, if $variable===2
//      # code...
//      break;
//      default:    //it is executed when no conditions are satisfied
//      # code...
//      break;
//  }

