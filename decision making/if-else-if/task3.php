<?php

//generate a number for week days and print it's corresponding day name
//hint : 1 is sunday, 2 is monday.. so on

$var = rand(1 , 7);

if ($var == 1){
    echo "sunday";
} elseif ($var == 2) {
    echo "monday";
} elseif($var == 3){
    echo "tuesday";
}elseif($var == 4){
    echo "wednesday";
}elseif($var == 5){
    echo "thuesday";
}elseif($var == 6){
    echo "friday";
}
// }else($var == 7){
//     echo "saturday";
// }

else{
    echo "saturday";
}