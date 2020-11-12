<?php


// create two variable of random value fro range 10-100.
//perform division between them
//check if result is float, then print "float"
//check if result is integer, then print "integer"

$num1=rand(10 ,100);
$num2 = rand(90 , 100);

$result = $num2 / $num1;

if (is_float($result)){
    print "float";
}
echo "<br>";

if (is_int($result)){
    print "integer";
}