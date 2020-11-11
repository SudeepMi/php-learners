<?php 

//Generate two random integer between 50-60 and 90-100 & perform all arithmetic operations
$x = rand(50 , 60);
$y = rand(90 , 100);

$sum = $x + $y;
$sub = $x - $y;
$div = $x / $y;
$mul = $x * $y;
$mod = $x % $y;
$expo = $x ** $y;

echo $sum;
echo "<br>";
echo $sub;
echo "<br>";
echo $div;
echo "<br>";
echo $mul;
echo "<br>";
echo $mod;
echo "<br>";
echo $expo;
echo "<br>";

