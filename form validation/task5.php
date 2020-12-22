<?php


//take a string input from user
// 1. find out the longest word provided
// 2. append the first letter of string to each words of string so that all words of string will be equal

// examole : input--> this is sudeep from kathmandu
// output---> longest word : kathmandu, length: 9
//         new string: tttttthis tttttttis tttsudeep tttttfrom kathmandu


// hint
// 1. Take input from user
// 2. use explode function to change string to array
// 3. use for loop and array from 2 to find the word having max length (use strlen() function)
// 4. find the first letter of string using strsplit function
// 5. use for loop, while loop and an array from 2 to append the first letter.
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

       $words = explode(" ",$input); ///string to array

       $maxLen=0;
       $maxLenWord='';

       for ($i=0; $i < count($words); $i++) { 
          if (strlen($words[$i]) > $maxLen) {
                $maxLen = strlen($words[$i]);
                $maxLenWord = $words[$i];
          }
       }

    
    $firstLetter = $input[0];
    
      echo "Word having max length : $maxLenWord"." Length: $maxLen";

      echo "<br />";

      for ($i=0; $i < count($words); $i++) { 
        while ($maxLen != strlen($words[$i])) {
            $words[$i] = $firstLetter.$words[$i]; 
        }
     }

     $newString = implode(" ",$words);
     echo $newString;
        
    }
    ?>
      </div>
</body>
</html>
