<?php

$myPersons = array('ALice', 'Bob','Sudeep', 'Sangya', 'Rezu', 'Ankita', 'Sharmila');


// Print the above collection in alphabetical order using sort function.
sort($myPersons);

$length = count($myPersons);
for($x= 0; $x< $length; $x++){
    echo $myPersons[$x];
    echo "<br>";
}