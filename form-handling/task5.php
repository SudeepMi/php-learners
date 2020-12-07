<?php
// create a simple calculator to add two numbers provided by user


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" class="css">
</head>
<body>
    <form action = "" method = "post">
    <label for="firstnumber">first number</label>
        <input type="number" name="firstnumber" id="firstnumber" placeholder="number" autocomplete>
    <label for="secondnumber">second number</label>
        <input type="number" name="secondnumber" id="secondnumber" placeholder="number" autocomplete>
    <input type="submit" name="submit" value="SUBMIT" />


    </form>
    <div class="output">
    <h4>output</h4>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $num1 = $_POST["firstnumber"];
        $num2 = $_POST["secondnumber"];
        $add = $num1 + $num2;
        echo $add;
    }

    ?>
    </div>
</body>
</html>