<?php

//create a function for calculation the square of provided number and store it in a variable later on print it .

//Hint:   Square(num) -> returns num*num
// storing in variable --> $square = Square(num)

function square($num){
    $square = $num * $num;
    return $square;
   

}
$square =square(4);



print $square;