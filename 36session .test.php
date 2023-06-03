<?php
// session ko dekhane keliye 

session_start();

// print_r($_SESSION["favcolor"]);die;

?>
<!-- html me dekhane keliye  --> <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Favorite Color:". $_SESSION["favcolor"];
    
    //session set he ya nahi dikhane ke liye set hoga to massege print hoga nahi  nahi goga

    if(isset($_SESSION["favcolor"])){

        echo "Favorite Color : " . $_SESSION["favcolor"];
    
    } 
    else {
       echo "session is not send";
    }

     ?>
</body>
</html>


<!-- practicle  -->

