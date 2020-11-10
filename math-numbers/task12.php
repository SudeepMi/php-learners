<?php

// take any number between 30-40 and substract it from twice of itself, finally find the abstract value

//hint: $num = rand(x,y); $result = $num - 2*num; and use abs();

$num = rand(30 , 40);

$result = $num - 2*$num;

echo abs($result);