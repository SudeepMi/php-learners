<?php 

//create a constant for 
// 1. the value of PI, 
// 2. radius of circle a random number between 20-30
// find the area of circle, check if the area has float data type, 
// if yes then, then change it to integer

//code here

define("PI" , pi());

$r = rand(20 , 30);
$roc = 2 * PI *$r;
define("roc" , $roc);
echo roc;

echo "<br>";

$r = rand(20 , 30);
$aoc = PI * $r * $r;
define("aoc" , $aoc);
echo var_dump(aoc);
echo "<br>";


echo (int)aoc;

