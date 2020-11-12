<?php

//Generate a var with value from 1-5 range
// print it's corresponding number name
//hint: if num==2; print "first"; if num==2 print"second"..... so on
$var = rand(1 , 5);

if($var == 1){
    print "first";
} elseif ($var == 2){
    print "second";
} elseif($var == 3){
    print "third";
} elseif($var == 4){
    print "fourth";
} else($var == 5){
    print "fifth";
}