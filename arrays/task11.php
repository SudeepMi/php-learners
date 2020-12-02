<?php

// create an associative array with the pair of country and it's capital city.
// print all of them using foreach loop.

// Note: at least 5 item should be listed.
//Note: output should be like this : Kathmandu is the capital city of Nepal.

$country = array("kathmandu" => "Nepal" ,  "japan" => "tokyo" , "Australia" => "canberra" , "pakistan" => "islamabad" , "America" => "New york");

foreach($country as $x => $x_value){

    echo " $x is the capital city of " .$x_value  , "<br>";

}