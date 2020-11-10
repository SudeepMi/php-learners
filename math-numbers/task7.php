<?php

// a student have following marks in subjects, find the min and max marks obtained by him/her 
// maths -40
// english - 50
// nepali - 10
// science - 90

$maths = 40;
$english = 50;
$nepali = 10;
$science = 90;

$min = min($maths , $english , $nepali , $science);

echo $min;

echo "<br>";

$max = max($maths , $english , $nepali , $science);

echo $max;
