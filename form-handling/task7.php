<?php
// take a numbers and print it's product table

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
    <label for="number"> number</label>
        <input type="number" name="number" id="number" placeholder="number" autocomplete>
        <input type="submit" name="submit" value="SUBMIT" />
    </form>
    <div class="output">
    <h4>output</h4>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $num = $_POST["number"];
       
        for ($i=1; $i<=10; $i++){
            $mul = $num * $i;
            echo "$num * $i = $mul<br>";
    
        }

    }
       
    
       
    
?> 
</body>
</html>