<?php

// write a program to print a fibbonaci series
$n=10;
$t1=0;
$t2 = 1;
for ($i = 1; $i <= $n; ++$i) {
    echo $t1;
    $nextTerm = $t1 + $t2;
    $t1 = $t2;
    $t2 = $nextTerm;
}