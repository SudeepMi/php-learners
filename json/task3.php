<?php


$json = '{"name":"sharmila","hobbies":"coding","address":"butwal"}';

//decode above json string to object and access each of them


$obj = json_decode($json);
 echo $obj->name;
 echo "<br>";
 echo $obj->hobbies;
 echo "<br>";
 echo $obj->address;