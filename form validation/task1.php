<?php 
    // Form ko data haru ma kun chae data required ho ra kun optional ho,name email password required contact address required
    // testo haina ni didi.,. for example yo form lai browser ma herum ani kei pani insert na gari po
    // hernu vo? umm aaela tw echo ola display garexa, tara data kei pani xaina umm submit vaxaena nehajur le afai submit gareranhernus submit hunxa
    // autocomplete le chai, browser ma save  vaako data lai auto fill garxa input ma eaa
    // aba chae arko trick siknus, let koi manxey le browser ma webpage lai edit garera required lai hatayo then backennd bata kasari validate garne... see haiiok
    // laah username ta aayena ni, submit garekai xaena ani required ne xaena so  submit hajur afai garnus, maile submit gareko hunxu and you say submit value k input kae pathako xaena
    // tei vanna khojya ho, hamle ta code ma required vanera rakheko thiyem ni, umm, web scrapper haru le ta browser ma gayera edit garera hack garna sakxa ni username na diyera website lai access garyo vanney?va hamile backend ma validate gardini... good
    // let see how to do
    // tyo mathi ko notice xa ni, tyle error handling ma resolve garxam, you got that?yes iset ko kam, is set vaneko if tyo name ko data ko value set gareko xa ki nai check garne functionn teti ho, yes
    
    //st garnus and see ehh testo required vanne kojeko name full form fill navaye samm asubmit nahos yes
    // ava validation garerw full fill navaye samma submit narne banauney ho exactly, tesko lagi chae, input tag ma required vanera halnus and see
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form validation</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Username</label>
        <input type="text" name="username" id="name" placeholder="Username" required >
        <label for="name">Email</label>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="address">Address</label>
        <input type="text" name="address" id="address" placeholder="Address"required>
        <input type="submit" name="submit" value="SUBMIT" />
    </form>

    <div class="output">
        <h4>output</h4>
        <?php
            //print output here
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if (isset($_POST["üsername"]) || isset($_POST["email"])  ||  isset($_POST["address"])) {
              
                if ($_POST["username"] ==""|| $_POST["email"] =="" || $_POST["address"] =="") {
                   echo "All fields are required !!";
                }else{
                    $name = $_POST["username"];
                    echo "username = $name <br>";
    
                    $email = $_POST["email"];
                    echo "email = $email <br>";
    
                    $address = $_POST["address"];
                    echo "address = $address";
                }
            }
               
            }
        
        ?>
    </div>
</body>
</html>