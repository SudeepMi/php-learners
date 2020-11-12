<?php


//take random value from -10 to 100
//check if number is positive also check if negative.
$num = rand(-10 , 100);

if($num > 0){
    print "positive";
}

echo "<br>";

if($num < 0 ){
    print "negative";
}