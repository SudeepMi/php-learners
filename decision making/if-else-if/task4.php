<?php

//take random integer between 10 and 60
// print "Butwal Bazzar" if the number is greater than 30 or exactly divisible by 2.
// print "Dharan Bazzar" if the number is smaller than 30 or exactly divisible by 2.
// else print "KTM City" 
$number = rand(10 , 60);
if($number > 30 or $number / 2){
    print "Butwal Bazzar";
}elseif($number < 30 or $number / 2){
    print "Dharan Bazzar";
}else{
    print "KTM city";
}