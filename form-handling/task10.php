<?php



// create a simple calculator having following features
// 1. two input box for integers
// 2. one select tage to slect desired arithmetic operator (+,-,*,/,%)

// finally perform artithmetic operation 
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
<form action = "" method = "post">
    <label for="firstnumber">first number</label>
        <input type="number" name="firstnumber" id="firstnumber" placeholder="number" autocomplete>
    <label for="secondnumber">second number</label>
        <input type="number" name="secondnumber" id="secondnumber" placeholder="number" autocomplete>
    <select name="operator">
    <option value="add">+</option>
    <option value="mul">*</option>
    <option value="div">/</option>
    <option value="sub">-</option>
    <option value="mod">%</option>
    </select>
    <input type="submit" name="submit" value="SUBMIT" />


    </form>
    <div class="output">
    <h4>output</h4>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $num1 = $_POST["firstnumber"];
        $num2 = $_POST["secondnumber"];
        if()
    }

    ?>
</body>
</html>