


 <!-- <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Document</title>
//     <style>
//     body{
//     max-height: 100vh;
//     width: 60%;
//     margin: auto;
// }

//     label {
//     display: flex;
//     padding: 3px;
//     font-weight: 600;
// }
// input{
//     font-size: 15px;
//     margin-bottom: 5px;
//     justify-content: center;
//     line-height: 1;
//     background: #e8e8e8c4;
//     display: flex;
//     outline:none;
//     border: none;
//     padding: 8px;
//     height: 45px;
//     width: 70%;
// }
// input[type = submit]{
//     width: 17%;
//     background-color: green;
//     outline: none;
//     border: 0;
//     border-radius: 6px;
//     color: wheat;
// }

//     </style>
// </head>
// <body>
//     <form action = "" method = "post">
//     <label for="username">Username</label>
//     <input type="text" name = "username" id = "username">
//     <label for="password">Password</label>
//     <input type="password" name = "password" id = "passord">
//     <input type="submit" name = "submit" value = "submit">
//     </form> 
    
// </body>
// </html> -->


<?php
// create a seesion variable for username and password
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

$_SESSION["username"] = "codewithsudeep";
$_SESSION["password"] = "123456";
echo "Session variables are set.";
?>

</body>
</html>

