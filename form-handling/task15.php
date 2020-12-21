<?php


// create a form and write a php script for fortune teller.
// hint : if the user name have 3 words in name, specify a fortune and similarly.


// if user have 3 words in name : name line and string split garera or string length check garne. got that?yes halka 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" class="src">
</head>
<body>
    <form action = "" method = "post">
        <label for="name">Name</label>
        <input type="text" name = "name"  placeholder="name " >
        <input type="submit" name="submit" value="SUBMIT" />
    </form>
    <div class="output">
    <h4>output</h4>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $length = strlen($name); //horw yesto, wow awesome, yestai ho, now store the value of strlen in variable
        if($length == 3){
            echo "you gonna a millonare in future";
        }

        if($length == 4){
            echo "you will have a world tour in next 5 years";
        }

        if($length == 5){
            echo "you will lost your bike";
        }

        if($length == 6){
            echo "you will get success in next few month";
        }

        if($length == 7){
            echo "study hard";
        }

        if($length == 8){
            echo " you will be acheiving your goal in next 3 months";
        }
        


    } 
    ?>

</div>
<!-- helo

now here starts a logic,

hint anusar 

name ma kati ota words xa tyo anusar fortune vannnye,



maile chae rough ma gardiye yeta hajur le code ma implemet garnus haii?
huss

3 ota xa vaney = you gonna be a millionare in two years
4 = you will have a world tour in next 5 years
5= you will lost your bike
6 = you will get success in next few month
garam
8 =  you will be acheiving your goal in next 3 months

aba garnus milyo, cond right huda ne kna echo aayo

yesto vayo, last ma else halnu vayo hajur and if 8 vayo vaney tyo gar na vaye else ma ko gar vanyya ho i .. so teha vako milena vane else print garna kojeko maile

multiple if condition ma kunai euta lai satisdfy garaye pugxa , if hajur lai elsema ni print garaunu xa vanney use switch case
garnus ta default garerw garna milxa uta tw vo aaela try nagarm ok
mero progress kasto xa , going good, ramro xa, awesome tq u 





-->