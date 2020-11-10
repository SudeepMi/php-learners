<?php

//take radius of circle from any random num between 5-10 and find it's circumfrence, then round off it.
//ref: pi(), rand(x,y);
$radius = rand(5 , 10);

$roc = 2 * pi() * $radius;

echo round($roc);

