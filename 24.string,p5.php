<?php

// echo stripslashes($newstr)

$str ='Hellow I am "akash sali"';

// echo $str . "<br>";

// database me save karna he to iska use kiya jayega

// echo addslashes($str);

// ********************************************

// shlace ko delete karne ke liye 

// database se nikal ka user ko show karne ke liye is method ka use kiya jayega

// echo $newstr = addslashes($str);

// echo stripslashes($newstr);

// ************************************************

// ye function charector per shlase lagne ke liye use kiya jayega
// 

// ye charector pe use hoga 

$newstr = addcslashes($str,"l");//first-type

// ye capital A to Z chaector per us ehoga
echo $newstr = addcslashes($str,"A...B");

// ye samll a to b chaector per us ehoga
// echo  addcslashes($str,"a...f");

// slaches hatane ke liye ham is ka use karte he 
// echo stripslashes($newstr);


?>