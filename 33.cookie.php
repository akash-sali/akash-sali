
<!-- cookie  -->
<!-- cookies ko html syntax ke uper set karna he -->
<?php

// work:-user browser pe request bhejega or browser oh request server pe bhejega or server oos user ki information jo mister ne site banayi he uski system me tempervary save kar dega

// syntax:-setcookie(name,value,expaire,path,domain,secure,httonly) 
//1) expaire:- expaire ko ham second me likh te he 
// 2 ) path:-path cookies ko sub page ke under me set karna chahte he to / ka use karege or ek page me set karna ke liye page name likhe ge 
//3)domain:- www.abc.com yese  domain se access kar sakte he test.abc.com yese sub domain se access nahi hoga

//4) secure:- ye property two value se chalti ye true or false true hoga to ye chack karigi ki ye http he ya https he http hoga to nahi chalegi https  hoga to chalgi agar false he to ye nahi dekhega ki  http he ya https he dono pe kam karegi

//5) httponly:- ka matlab  yesa he ki hamne pass kardiya false to ham java script se bhi access kar sakte he agat hame pass kardiya true to ham sirf dynamic site per access kar sakte he


//  1st step 
// code *****

// set cookies 

$cookie_name = "user";
$cookie_value ="Ak sali";
setcookie($cookie_name,$cookie_value,time()+(86400),"/");


// second count 
// 60*60 = 3600

// hours count 

// 3600*12 


?>

<!-- cookies ko html page ke uper set karte he  -->
<html>
<body>
    <!-- cookies ko disply karne ke liye  -->

    <?php
    // 1st combo 

    // echo $_COOKIE[$cookie_name];


    // cookie set huhi he ya nahi yese check karte he 
    
    // web user ne cookies ko read karne ki permission nahi di ho ya cookie ko distroy kiya ho to ham ham cookie ko read nahi kar skate is state se ek message print ho jayega 

    

    // if(!isset($_COOKIE[$cookie_name])){
    //     echo "cookie is not set";
    // }
    // else{
    //     echo $_COOKIE[$cookie_name];
    // }

    // ?>
</body>
</html>

