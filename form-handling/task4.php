<?php 
// write a php script to handle the given form request and print the information in following manner
// check if username is CodewithSudeep and password is admin
//  determine following things
// if password is incorrect
// if username is incorrect
// if both are incorrect
// if both are correct


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Handling</title>
</head>
<body>
    <h4>User login form</h4>
    <form action="" method="post">
        <label for="name">Username</label>
        <input type="text" name="username" id="name" placeholder="Username" autocomplete>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password" autocomplete>
        <input type="submit" name="submit" value="SUBMIT" />
    </form>

    <div class="output">
        <h4>output</h4>
        <?php
            //print output here
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $username = "codewithsudeep";
                $password = "admin";
                $name = $_POST["username"];
                $pass = $_POST["password"];

                if($username == $name){
                    echo "username is correct";
                    echo "<br>";
                }else{
                    echo "username is incorrect";
                    echo "<br>";
                }

                if($password == $pass){
                    echo "password is correct";
                    echo "<br>";
                }else{
                    echo "password is incorrect";
                    echo "<br>";
                }

                if($username == $name && $password == $pass){
                    echo "both are correct";
                } else{
                    echo "both are incorrect";
                }
            }
            
        ?>
    </div>
</body>
</html>