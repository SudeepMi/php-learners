<?php
// create form with three input field for phone model, color, company. eg :{ M20, Black, Samsung }
// submit the form on same page using [ action="/" ]
// submit the form in get method. hint [ <form method="GET">]
// access the data entered in input field using global variable $_GET
// print the data using html tags


?>

<html>
<body>

<form method="GET" action="">
  Model: <input type="text" name="model">
  color: <input type="text" name="color">
  company: <input type="text" name="company">
  <input type="submit">
</form>
<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){
    $model = $_GET["model"];
    $color = $_GET["color"];
    $company = $_GET["company"];

    echo $model;
    echo $color;
    echo $company;


}