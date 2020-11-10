<?php

//create two variable for name and address and print the number of words for each
$name = "sharmila parajuli";
$address = "butwal";

$number = str_word_count($name);
$length = str_word_count($address);

echo "number of word  is" .$number;
echo "<br>";
echo "number of word  is" .$length;