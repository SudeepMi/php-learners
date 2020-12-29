<?php


//modify the cookie named username with valiie "codewithsudeep"
$cookie_name = "username";
$cookie_value = "codewithsudeep";
setcookie($cookie_name , $cookie_value);
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
  } else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
  }