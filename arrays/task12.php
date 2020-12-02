<?php

$Prices = array("MAC" => 1000, "Dell"=> 500, "Acer" => 200, "Lenovo" => 100);

//print all items with their corresponding price and 
//calculate the total price required to buy all items in array
$sum = 0;
foreach($Prices as $x => $x_value){
   
    echo " $x price is " .$x_value  , "<br>";
    $sum += $x_value;
}

echo $sum;