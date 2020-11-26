<?php


//write a program to print following pattern

// *
// **
// ***
// ****
// *****
// *
// **
// ***
// ****
// *****

$x = 5;
$y=5;
for($i = 1; $i <= $x;$i++){
    for($j = 1; $j <= $i; $j++){
        echo "*";
    }
    echo"<br>";
}
for($i = 1; $i <= $y;$i++){
    for($j = 1; $j <= $i; $j++){
        echo "*";
    }
    echo"<br>";
}