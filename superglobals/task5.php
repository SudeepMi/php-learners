<?php

// this task is for demonstration purpose only just watch it out.


?>
<html>
<body>

<form method="post" action="">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
<?php
// checking if the page is requested in post method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // accessing the value of fname input of the form
    $name = $_POST["fname"];
    //printing the value
    echo $name;
}
?>
</body>
</html>

