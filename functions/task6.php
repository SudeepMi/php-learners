<?php

//create functions for add, substract, product and division which takes two variables as input and prints corresponding result.
function getsum(int$a , int$b){
    $z= $a + $b;

    echo "$z <br>";
}
getsum(3 , 4);

function sub(int$a , int$b){
  
    $z = $a-$b;
    echo "$z <br>";
}
sub(4 , 4);


function getmul(int$a , int$b){
  
    $z = $a *$b;
    echo "$z <br>";
}
getmul(3 , 4);

function divide(int$a , int$b){
  
    $z = $a / $b;
    echo "$z <br>";
}
divide(12 , 4);
