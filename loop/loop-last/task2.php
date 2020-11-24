<?php


// use for loop for printing all prime numbers between 50 and 60
for ($i=50; $i <=60; $i++) { 
    for ($j=50; $j <= $i; $j++) { 
        if ($i%$j==0) {
          break;
        }
    }
    if($i==$j){
	echo "$i<br>";
}
}