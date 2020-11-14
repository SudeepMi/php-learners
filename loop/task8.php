<?php

//print all prime number from 1 to 100

for ($i=2; $i <=100; $i++) { 
    for ($j=2; $j <= $i; $j++) { 
        if ($i%$j==0) {
          break;
        }
    }
    if($i==$j){
	echo $i;
}
}
