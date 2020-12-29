<?php


// create a button for logout and on click, unset the username and password also destroy the session
?>
 <?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<input type="submit" name="submit" value = "logout">
<?php
session_unset();
session_destroy();
?>

</body>
</html> 