<?php


// Create a responsive form for facebook with proper form validation and having another action file, not on same page
// 1. check if username is a@b.c and password is 0123456789
// if yes, then print welcome else do nothing
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" class="src">
</head>
<body>
    <form action = "task3.php"  method = "post">
    <label for="username">username</label>
    <input type="text" name = "username" id = "username" required>
    <label for = "password">password</label>
    <input type = "password" name = "password" id = "password" required>
    <input type="submit" name="submit" value="login" />
    <form>

    
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        if ($_POST["username"] =="" || $_POST["password"] =="") {
            echo "All fields are required !!";
         }else{
            $name = $_POST["username"];
            $password = $_POST["password"];
            $username = "a@b.c";
            $pass = "0123456789";
            if($username == $name && $pass == $password){
                echo "welcome";
            }else{
                echo "your username and password is incorrect";
            }
         }
       

       
    }
    ?>

</body>
</html>