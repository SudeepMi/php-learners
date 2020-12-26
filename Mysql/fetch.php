<?php
require("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>password</th>
    </tr>
    <?php
    
    $sql = "SELECT * FROM register";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
    ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['Name']?></td>
        <td><?php echo $row['password']?></td>  
    </tr>
    <?php } ?>

    <table>
</body>
</html>