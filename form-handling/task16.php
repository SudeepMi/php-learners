<?php 


// create a love calculator using your own algorithm
// hint : count the number of words given for two names, calculate the matching words, divde the matching words with the sum of rest of words and multiply with 100.
// suna na yesma paila tw strlen  vayo hana ani last divide but matching word
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
        <label for="name">His</label>
        <input type="text" name = "his"  placeholder="name " >
        <label for="name">Her</label>
        <input type="text" name = "her"  placeholder="name " >
        <input type="submit" name="submit" value="SUBMIT" />
    </form>
    <div class="output">
    <h4>output</h4>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        //fetch the posted data
        $his = $_POST["his"];
        $her = $_POST["her"];

        // counting the name lenght
        $hisLen = strlen($his);
        $herLen = strlen($her);

        //spliting name string into array
        $hisArray = str_split($his,1);
        $herArray = str_split($her,1);

        //initialise the matching count to 0
        $match = 0;

        // finding the matching letters and counting the number of matches
        $match = count(array_intersect($hisArray,$herArray));

        // applying the logic
        $finalResult = ($match/(($hisLen+$herLen)-$match))*100;

        //printing the final result
        echo $finalResult;

        //  yesari nai afai le logic develope garnu par ma tw hereko herai vaye ---- kina?, haha, bujne kosis gardai xu, ea huss

    } 
    ?>

</div>
<!-- helo

now here starts a logic,hello,

bujey ok sutam aba ok good nght gn.

