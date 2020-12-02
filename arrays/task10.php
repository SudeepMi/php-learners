<?php


$Students = array("bca" => 40, "csit"=> 50, "bim" => 10, "bis" => "5");

// use for-each loop to print all the items in array.

// your code here.. 
foreach($Students as $x => $x_value){
echo "In " .$x.  " there are " . $x_value . " student";
echo "<br>";
}

