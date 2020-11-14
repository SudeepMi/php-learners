<?php

//print sharmila for even numbers and butwal for all odd numbers between 20 to 31

for ($i=20; $i < 31; $i++) { 
  if ($i%2==0) {
     echo "Sharmila";
  }

  if ($i%2==1) {
     echo "Butwal";
  }

  echo "<br>";
}