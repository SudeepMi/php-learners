<?php

// create a mysql database connection with database name php-learners
$servername = "localhost";
$username  = "root";
$password = "";
$dbname = "php-learners";

// create connection
$conn = new mysqli($servername , $username , $password , $dbname );

// checks connection
if ($conn->connect_error) {
    die("Connection failed: ");
  }
  echo "Connected successfully";
  ?>    