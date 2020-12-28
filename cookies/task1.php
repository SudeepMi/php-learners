<?php 


// create a cokie for username with value your name
$cookie_name = "username";
$cookie_value = "sharmila";
setcookie($cookie_name, $cookie_value);
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html> 
