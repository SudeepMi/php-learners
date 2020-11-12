<?php

//generate the number between 50 and 60 using rand(),
// check whether the number is even or odd using switch case
$number = rand(50 , 60);
$result = $number % 2;

switch($result == 0){
    case 1:
        print "even";
    break;

    default:
    print "odd";
break;

}