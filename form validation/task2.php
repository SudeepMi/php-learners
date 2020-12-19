<?php 
   // aba chae arko validation sikam,  huss, let koi user le hajur ko input feid ma js ko code haldeo re or say html kai code haldeo re,
   // that may damage your site. for example 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./php-learners/form-handling/style.css">
    <title>Form Handling</title>
</head>

<body>
    <form action="" method="post">
        <label for="name">Username</label>
        <input type="text" name="username" id="name" placeholder="Username" required>
        <input type="submit" name="submit" value="SUBMIT" />
    </form>

    <div class="output">
        <h4>output</h4>
        <?php
            //print output here
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                
                    // var_dump($_POST);
                    $data = $_POST["username"];
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    echo $data;
               
            }
        
        ?>
    </div>
</body>

</html>