<?php

// create a function which:
// 1. have an default argument -- integer.
// 2.  also accepts an argument
// 3. prints the cube of number

function cube($num = 3){
$number = $num * $num * $num;
echo "$number <br>";
}
cube();
cube(2);