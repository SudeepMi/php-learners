<?php


$myFavs = array("hande ercel", "rihana", "eminem", "atif", "sudeep");


//use any loop to print a item from given collection.

//your code here .... 
$length = count($myFavs);

for($x = 0; $x < $length; $x++){
    echo $myFavs[$x];
    echo "<br>";
}

