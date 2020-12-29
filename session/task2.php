<?php


// check if the session variable you created in task1 exist or not, if exist print you are logged in
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php


if(isset($_SESSION["username"]) || isset($_SESSION["password"])){
    echo $_SESSION["username"];
    echo $_SESSION["password"];
    
}
?>

</body>
</html>
