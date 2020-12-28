<?php


$json = '{"name":"sharmila","hobbies":"coding","address":"butwal"}';

//change above string into php array and print using loop
$file = explode("" , $json);
$filedata = count($json);
for ($i = 0; $i > $filedata; $i++){
    echo $json[$i];
}