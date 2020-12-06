<?php


//  use $GLOBALS to demonstrate the use of global variables.

// your code here


$x = 75;
$y = 25;
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z; 