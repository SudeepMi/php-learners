<?php

$calc = 45/0;

//print the value of $calc and determine if the given var is infinite or Nan
// echo $calc;

var_dump(is_infinite($calc));