<?php  

//  create an interactive form for book order
//  for should have at least 3 input : book name, date of issue, issued to
//  now print the provided information


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
<form action="" method="post">
        <label for="name">Book name</label>
        <input type="text" name = "bookname" placeholder="bookname" autocomplete>
        <label for="date">Date of issue</label>
        <input type="date" name = "bookissue" placeholder="date of issue" autocomplete>
        <label for="date">Issued to</label>
        <input type="text" name = "issued" placeholder="Issued to" autocomplete>

        <input type="submit" name = "submit" value = "submit">
    </form>
    <div class="output">
        <h4>Output</h4>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST["bookname"];
            $date = $_POST["bookissue"];
            $issue = $_POST["issued"];

            echo $name;
            echo "<br>";
            echo $date;
            echo "<br>";
            echo $issue;
            echo "<br>";




        }
        ?>
    </div>
</body>
</html>