<?php


//open the given demo.txt file and print it's contents
$myfile = fopen("demo.txt", "r");
echo fread($myfile,filesize("demo.txt"));

?>
