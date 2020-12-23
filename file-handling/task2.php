<?php

//read single line of given demo.txt file
$myfile = fopen("demo.txt", "r");
  echo fgetc($myfile);
fclose($myfile);
?>
