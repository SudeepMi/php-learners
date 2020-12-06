<?php 
// write a php script to handle the given form request and print the information in following manner
// check if username is CodewithSudeep and password is admin
// if yes then print congratulation you've logged in
// otherwise print error message


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
    <form action="/" method="post">
        <label for="name">Username</label>
        <input type="text" name="username" id="name" placeholder="Username" autocomplete>
        <label for="password">Password</label>
        <input type="text" name="password" id="password" placeholder="Password" autocomplete>
        <input type="submit" name="submit" value="SUBMIT" />
    </form>

    <div class="output">
        <h4>output</h4>
        <?php
            //print output here
            
        ?>
    </div>
</body>
</html>