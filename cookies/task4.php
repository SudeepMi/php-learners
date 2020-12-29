<?php
$cookie_name = "username"; 
setcookie("username" , "" , time() -3600);
?>
<html>
<body>

<?php

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
    echo "cookies $cookie_name is deleted.";
}
?>

</body>
</html> 