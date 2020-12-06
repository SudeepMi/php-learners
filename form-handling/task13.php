<?php 
// write a php script to handle the given form request and print the information in following manner
// split the string into array
// print the items in array in different line

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
    <form action="/" method="post">
        <label for="name">Write an one line quotes</label>
        <input type="text" name="firstName" id="name" placeholder="First Name" autocomplete>
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