<?php 

//Take the value of PI using math function and store it in constant.
// now use a constant to calculate PI to raise 4th power.

define("PI" , pi());

//we have to use PI constant instead if pi function

$calc = PI**4;

echo $calc;