<?php 


//create file using PHP named test.txt and write your name in the file using PHP syntax.
$myfile = fopen("test.txt", "w");
$txt = "sharmila parajuli";
fwrite($myfile, $txt);
fclose($myfile);
?>

