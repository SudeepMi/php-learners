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

        // var_dump($_POST);
        $num1 = $_POST["firstnumber"];
        $num2 = $_POST["secondnumber"];
        $operator = $_POST["operator"];

        //DIDI?? you there?yes i am here, ok

        // now we have two approach, either to use  switch case or multiple if statement , you got that??
        // yes ok
        // we have operators : add, mul,div,sub,mod so,
        // you go on, ma herxu
        // good,  didi, hjur, tala ko sabai if condition madhye kunai euta matra satisfy hunxa right?yes
        // so you have to print the result within the if condition. or you can make a global variable 
        //  assign the result of al if condition. 
        // got yes aba result equal garni, yesto garda ramro check garm, sure vayo , umm vayo
        if($operator == "add"){
             $sum = $num1 + $num2;
             echo  "sum is $sum";
        }
        if ($operator == "mul"){
            $mul = $num1 * $num2;
            echo  "product is $mul";

        }

        if($operator == "div"){
            $div = $num1 / $num2;
            echo  "division is $div";

        }

        if($operator == "sub"){
            $sub = $num1 - $num2;
            echo  "sub is $sub";

        }

        if($operator == "mod"){
            $mod = $num1 % $num2;
            echo  "mod is $mod";

        }

        
    }

    ?>
</body>
</html>