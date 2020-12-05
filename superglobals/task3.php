<?php

//print the value of following constants from server.
//REMOTE_ADDR, SCRIPT_FILENAME,SCRIPT_URI,SERVER_ADDR, HTTP_REFERER

echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br>";
echo $_SERVER['SCRIPT_URI'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";