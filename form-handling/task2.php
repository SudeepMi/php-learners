<?php 
// write a php script to handle the given form request and print the information in following manner
// and obtain the number of letters in firstname and lastname and print it.

// Welcome { firstname + lastname } , you have {number} letters in your first name and {number} in last.

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
        <label for="name">First name</label>
        <input type="text" name="firstName" id="name" placeholder="First Name" autocomplete>
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" id="lastName" placeholder="Last name" autocomplete>
        <input type="submit" name="submit" value="SUBMIT" />
    </form>

    <div class="output">
        <h4>output</h4>
        <?php
            //print output here
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $firstname = $_POST["firstName"];
                $lastname = $_POST["lastName"];


                echo "welcome $firstname $lastname you have "  , strlen($firstname)  , 
                " number letter in your firstname and " , strlen($lastname) , "in last.";
            }
            
        ?>
    </div>
</body>
</html>