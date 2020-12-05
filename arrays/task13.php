<?php


$student = array(
    array(
        "name"=>"sudeep",
        "marks" => 50
    ),
    array(
        "name"=>"sharmila",
        "marks" => 60
    ),
    array(
        "name"=>"sangya",
        "marks" => 70
    ),
    array(
        "name"=>"TestName",
        "marks" => 80
    ),

);
?>

// 1. Dump the whole array using vardump function
// 2. Access your name and marks, and print it.


//1. Dumping the whole array


  <?php  var_dump($student); ?>

//2. Access your name and marks, and print it.

// accessing the index, my name lies in 0 index i.e $student[0] and 
// now accessing my name within the index $student[0]["name"] and same for marks


<?php

// your code here
echo "<br>";
echo $student[1]["name"];
echo $student[1]["marks"];


?>
    
  