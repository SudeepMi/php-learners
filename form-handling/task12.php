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
    <form method="post" action ="">
<label for="course">course</label>
            Red<input type="checkbox" name = "course[]" value="Red"> 
            Blue<input type="checkbox" name = "course[]" value = "blue">
            Yellow<input type="checkbox" name = "course[]" value = "yellow">
            White<input type="checkbox" name = "course[]" value = "white">
            Green<input type="checkbox" name = "course[]" value = "green">
        <input type="submit" name="submit" value="SUBMIT" />
</form>

        <div class="output">
            <h4>output</h4>
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $allcourse = '';
                $course = $_POST["course"];
                for($i = 0; $i < count($course); $i++){
                    $allcourse .= $course[$i] . " ,";
                }
                 echo $allcourse;
            }

            ?>
        </div>
</body>
</html>
<!-- yetikai herna tw milxa, umm milxa submit nai hunna, didi lai hattar xa?????   xaena, 

value rakhna chodnu vaaxa checkbox ma hana vaxa ki nai, yes vaako xa
milyo,yes next ki sutne,sutne aba huss, huss  good night, goodnight didi mero voli bata internal ho kae aauna subject nee taha xaena ava hernu parxa huss hunxa, kun sem rey tapai?7sem ah ah
connect katey huss 
huss hunxa

-->