<?php


// create an interactive form with following features

// 1. two input type of text for name and address
// 2. one input type of numbers for contact number
// 3. checkbox for selecting course name (eg: PHP, JS Course, Python, JavawithSudeep)
// 4. After submission print the provided data using suitable html t5ags
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

        <label for="address">Address</label>
        <input type="text" name = "address"  placeholder="address">

        <label for="number">Contact Number</label>
        <input type="number" name = "number" value = "number" placeholder="number">

        <label for="course">course</label>
            PHP<input type="checkbox" name = "course[]" value="php">
            Js course<input type="checkbox" name = "course[]" value = "js course">
            Phython<input type="checkbox" name = "course[]" value = "phython">
            JavawithSudeep<input type="checkbox" name = "course[]" value = "javawithsudeep">

        <input type="submit" name="submit" value="SUBMIT" />
        
    </form>
    <div class="output">
        <h4>output</h4>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            // var_dump($_POST);
            $allCourse ="";
            $name = $_POST["name"];
            $address = $_POST["address"];
            $number = $_POST["number"];
            $course = $_POST["course"];
            $allCourse = implode(",", $course);

            // implode() is use to join array items to form a string, for vanda implode nai sajilo xito huney rsixa, yeah but works only for string , clear?yes sir, :-: next aba
            // for($i=0; $i<count($course); $i++){
            //     $allCourse .= $course[$i] . ",";  

            //     // .= vaneko string concate garna lai bujey
            // yesma herw na mathi maile value rakey xaena kam garyo, maile form ma value rakheko hernu vayena xa tyo maile hereko ho yema ne value rakeko maile paila tesma chai k vayo vanda placeholder ma aayo k tyo value, input type text ma val
            
            // }
            
            // var_dump($course);
            echo "<p>my name is $name</p>";
            echo "<p>i am from $address</p>";
            echo "<p>my contact no is $number</p>";
            echo "<p>i am $allCourse developer</p>";





          

        }
        ?>
    </div>
    
</body>
</html>

<!-- course le kam garey na
save garera hernus ta
value rw name ma k farak
["name" => value]
name vaneko data represent garne key vayo, data ko naam vanam
value vaneko data k ho tesko value.
ehh ok


wait didi, why in rush? yesma aile euta logic baaki xa, what if maile duita course select garey? hern multiple vanne rakna parxa 
hernu vo? maile ta 3 ota select garey thea why python print matra tesle last ko value matra ligexa, now print all aayena
hello
ma garum???????????huss
aba course lai for loop use garera sablai print gariseo didi..huss for ki if, if ta decision maker ho, for , yes
wait wait wait,  answer me something, what is the data type of course?string, check again course string ma tw hunxa 
dump garera hernus tya data type pani aauxa i am array developer vaxa , course ma [] tei vayerw ho, yes [] na vaako
vaye it is string ra last selected data matra dekhauxa.. ehh
now tell me loop use garne ki if condition????loop
good , go on maile garni yes


input ype text ma value halnu vayo vaney tyo gayera input feild mabasxa
checkbox ma ni tyae ho tya value basxa tei vayerw uta aako ho
 -->