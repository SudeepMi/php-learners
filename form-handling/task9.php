<?php

// take a number and find out it's factorial

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
    <label for="number"> number</label>
        <input type="number" name="number" id="number" placeholder="number" autocomplete>
        <input type="submit" name="submit" value="SUBMIT" />
    </form>
    <div class="output">
      <h4>output</h4>
      <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          $num = $_POST["number"];  
          $factorial = 1;  
          for ($x=$num; $x>=1; $x--)   
          {  
            $factorial = $factorial * $x;  
          }  
          echo "Factorial of $num is $factorial";  
         
        }
        ?> 
    </div>
</body>
</html>





















