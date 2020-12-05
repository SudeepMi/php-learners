<?php
// create form with two input field for name and address.
// submit the form on same page using [ action="/" ]
// submit the form in post method
// access the data entered in input field using global variable $_POST
// print the data using html tags
?>
<html>
<body>

<form method="post" action="">
  Name: <input type="text" name="fname">
  Address: <input type="text" name="address">
  <input type="submit">
</form>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["fname"];
    $address = $_POST["address"];

    echo $name;
    echo "<br>";
    echo $address;
}
