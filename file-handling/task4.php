<?php


// read the file you created in 3 and print the contents
$myfile = fopen("test.txt", "r");
echo fread($myfile,filesize("test.txt"));