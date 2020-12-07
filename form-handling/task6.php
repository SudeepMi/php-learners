<?php
// take two  numbers from form and perform ariyhmetic operation and print the results

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        $sum = $num1 + $num2;
        $mul = $num1 * $num2;
        $div = $num1 / $num2;
        $sub = $num1 - $num2;
        $mod = $num1 % $num2;

        echo $sum;
        echo "<br>";
        echo $mul;
        echo "<br>";
        echo $div;
        echo "<br>";
        echo $sub;
        echo "<br>";
        echo $mod;
        echo "<br>";



    }
    ?>
</body>
</html>