<?php

require("connection.php");
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
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $password = $_POST["password"];
        $sql = "INSERT INTO register(name ,  password ) VALUES('$name' , '$password')";
        if (mysqli_query($conn, $sql)) {
            echo "successfully inserted";
        } else {
            echo "error in insert";
            echo mysqli_error($conn);
        }

    }
    

    ?>

    <form action="" method="post">
        <label for="Name">Name</label>
        <input type="text" name="name" id="name">
        <label for="password">password</label>
        <input type="password" name="password" id="password">
        <input type="submit" name="submit" value="submit">
        <form>


</body>

</html>