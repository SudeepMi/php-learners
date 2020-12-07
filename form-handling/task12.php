<?php


// create an interactive form with following features

// 1. 5 checkbox for different colors
// 2. user can slect multiple items
// 3. After submission print the provided data using suitable html t5ags
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
<label for="course">course</label>
            Red<input type="checkbox" name = "course">
            Blue<input type="checkbox" name = "course">
            Yellow<input type="checkbox" name = "course">
            White<input type="checkbox" name = "course">
            Green<input type="checkbox" name = "course">
        <input type="submit" name="submit" value="SUBMIT" />

        <div class="output">
            <h4>output</h4>
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $items = $_POST["course"];
                echo $items;
            }

            ?>
        </div>
</body>
</html>