<?php

//generate a number for week days and print it's corresponding day name
//hint : 1 is sunday, 2 is monday.. so on

$var = rand(1 , 7);

if ($var == 1){
    print "sunday";
} elseif ($var == 2) {
    print "monday";
} elseif($var == 3){
    print "tuesday";
}elseif($var == 4){
    print "wednesday";
}elseif($var == 5){
    print "thuesday";
}elseif($var == 6){
    print "friday";
}else($var == 7){
    print "saturday";
}