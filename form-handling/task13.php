<?php 
// write a php script to handle the given form request and print the information in following manner
// split the string into array
// print the items in array in different line

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Handling</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Write an one line quotes</label>
        <input type="text" name="firstName" id="name" placeholder="First Name" autocomplete>
        <input type="submit" name="submit" value="SUBMIT" />
    </form>

    <div class="output">
        <h4>output</h4>
        <?php
            //print output here,  gardai garnus na, gooing good wrong,  hajur le afai result hernus aba, gooing great
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $name = $_POST["firstName"]; //milena, input ko name ra post ko key same hunu paryo firstnam etw xa ne firstName ra firstname ma farak xa ni diii
                $NameArray = explode(",", $name); // kaam gareko  ho but logic milena. yo agadi hamle each space ma break ga ekchoti hai herxu tyo garerw
               $store = $NameArray;
               for($i = 0; $i < count($store); $i++){
                   echo $store[$i];
                   echo "<br>";
               }


            
            
            }
            
        ?>
        </pre>
    </div>
</body>
</html>

<!-- helo hajur iam here

broswer ma heram 
 in php we have two functions :
 1. implode() - join array into string
 2. explode()
 - split string to array.

 didi?hjur, hajur le last task gare jastai request method check garnus a , helo yes, result heryau, yes, mileko xa ta

result hernu vo? um , " " vaneko chae string ma vaako each space paxi break gar vanya jasto huss bujey, sure?umm main kura explode k ho bujna pparne raixa
yes exactly, aba do something ffor me

maile chae I,am,sudeep,from,kathmandu,and,i,love,tea type garxu i nedd this string in array. saknu hunxa?mathi ko jastai ho hoina rw.. ho la tyo text lai copy
garera input ma paste garnus ta and see the teha kae garna parxa ho, hajur, jasri yo vanda agai space haleko them aba comma halnu paryo tya
agi maile space raekeko vayerw ho ho yessssssssssss okay
typ <pre> ??
 -->