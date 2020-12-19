<?php 


// create a form having features:
    // 1. can take a text for person name
    // 2. calculate the number of words in given text 
    // 3. reverse the name given
    // 4. print the result.
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
    <form action="" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Name" autocomplete>
        <input type="submit" name="submit" value="SUBMIT" />
    </form>

    <div class="output">
        <h4>output</h4>
        <?php
            //print output here
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $name = $_POST["name"];
                echo "My name is " , $name;
                echo "<br>";
                echo "The number of word in given text is " , strlen($name);
                echo "<br>";
                echo strrev($name);
            }
            
        ?>
    </div>
</body>
</html>