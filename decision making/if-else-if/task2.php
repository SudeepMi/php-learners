<?php

//Generate a var with value from 1-5 range
// print it's corresponding number name
//hint: if num==2; print "first"; if num==2 print"second"..... so on
$var = rand(1 , 5);

if($var == 1){
<<<<<<< HEAD
    print "first";
} elseif ($var == 2){
    print "second";
} elseif($var == 3){
    print "third";
} elseif($var == 4){
    print "fourth";
} else{
    print "fifth";
=======
    echo "first";
} 
elseif ($var == 2){
    echo "second";
} 
elseif($var == 3){
    echo "third";
} 
elseif($var == 4){
    echo "fourth";
} 
//else($var == 5){  //we don't have condition in else
//     echo "fifth";
// }
else{
    echo "fifth";
>>>>>>> 99a82bf2deda959b4ccde20d0c66f09573d8bb5e
}