<?php


// create an array for 10 color names, and print them using for loop.

$colors = array("red" , "black" , "white" , "green" , "purple" , "pink" , "blue" , "orange" , "yellow" , "skyblue");
$length = count($colors);

for($x = 0; $x < $length; $x++){
    echo $colors[$x];
    echo "<br>";
}