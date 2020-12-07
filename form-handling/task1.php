<?php 
// write a php script to handle the given form request and print the information in following manner

// 1. Username = {username here}
// 2. Email = {email here}
// 3. Address = {address here }



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
    <form action="" method="post">
        <label for="name">Username</label>
        <input type="text" name="username" id="name" placeholder="Username" autocomplete>
        <label for="name">Email</label>
        <input type="email" name="email" id="email" placeholder="Email" autocomplete>
        <label for="address">Address</label>
        <input type="text" name="address" id="address" placeholder="Address" autocomplete>
        <input type="submit" name="submit" value="SUBMIT" />
    </form>

    <div class="output">
        <h4>output</h4>
        <?php
            //print output here
            if($_SERVER["REQUEST_METHOD"] == "POST"){

                $name = $_POST["username"];
                echo "username = $name <br>";

                $email = $_POST["email"];
                echo "email = $email <br>";

                $address = $_POST["address"];
                echo "address = $address";
            }
        
        ?>
    </div>
</body>
</html>