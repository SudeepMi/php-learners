<?php

//take a random number between 50 and 60 and check if number is odd or even.

$number = rand(50 , 60);

$result = $number % 2;

if ($number == 0){
    echo "even";
} else {
    echo "odd";
}