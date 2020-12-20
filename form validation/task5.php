<?php


//take a string input from user
// 1. find out the longest word provided
// 2. append the first letter of string to each words of string so that all words of string will be equal

// examole : input--> this is sudeep from kathmandu
// output---> longest word : kathmandu, length: 9
//         new string: tttttthis tttttttis tttsudeep tttttfrom kathmandu
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
    <form action="" method = "post">
    <label for="message">Message</label>
    <input type="text" name = "message" id = "message">
    <input type="submit" name = "submit" value = "submit">
    </form>
    <div class="output">
        <h4>output</h4>
  
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $input = $_POST["message"];
        
    }
    ?>
      </div>
</body>
</html>