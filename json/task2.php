<?php


$json = '{"name":"sharmila","hobbies":"coding","address":"butwal"}';

//change above string into php array and print using loop
$arrayData = json_decode($json , true);
foreach($arrayData as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }