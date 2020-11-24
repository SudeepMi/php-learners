<?php


//use for loop for printing the multipication table from 1 to 10.
//output should be like this : 2 x 1 =2,  2 x 2 =4 

$table_no = rand(1 , 10);
$upto = 10;
 
for($i=1; $i<=$upto; ++$i){
  echo "$table_no * $i = ".$table_no * $i ."<br />";
}
