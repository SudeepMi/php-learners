<?php


// create an interactive form with following features

// 1. two input type of text for name and address
// 2. one input type of numbers for contact number
// 3. checkbox for selecting course name (eg: PHP, JS Course, Python, JavawithSudeep)
// 4. After submission print the provided data using suitable html t5ags
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
        <label for="name">Name</label>
        <input type="text" name = "name"  placeholder="name ">

        <label for="address">Address</label>
        <input type="text" name = "address"  placeholder="address">

        <label for="number">Contact Number</label>
        <input type="number" name = "number" value = "number" placeholder="number">

        <label for="course">course</label>
            PHP<input type="checkbox" name = "course">
            Js course<input type="checkbox" name = "course">
            Phython<input type="checkbox" name = "course">
            JavawithSudeep<input type="checkbox" name = "course">


        <input type="submit" name="submit" value="SUBMIT" />
        
    </form>
    <div class="output">
        <h4>output</h4>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST["name"];
            $address = $_POST["address"];
            $number = $_POST["number"];
            $course = $_POST["course"];

            echo "<p>my name is $name</p>";
            echo "<p>i am from $address</p>";
            echo "<p>my contact no is $number</p>";
            echo "<p>i am $course developer</p>";





          

        }
        ?>
    </div>
    
</body>
</html>