<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./php-learners/./form-handling/style.css" class="src">
</head>
<body>
<div class="output">
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

</div>
        
    
</body>
</html>