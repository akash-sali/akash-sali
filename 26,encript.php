<?php

// convert_uuencode :-ye function messege ko encript karta he or uencode me con covertr karta he  


// $str = "hello word";

// $encodestring = convert_uuencode($str). "<br>";

// echo $encodestring;

// convert_uudecode :- ye function encript se nikalta he or use decode me convert karta he


?>

<!-- bin2hex and  hex-bin  -->

<?php

// bin2hex :- ye function ka us ham massege ko hexadecimal me karne ke liye karte he 

// ASCII code se hexadecimal me convert karneke liye karte he ,ASCII ka matla ho ye jo bhi keybord
//  me use hone wale numerical ya alphabte charector code hote he 

// $str = bin2hex("Hellow world  hellow earth");

// echo $str;

// hex2bin :- ye 

// function hexadecimal se nikalne ke liye use kiya jata he 


// $strecript = hex2bin($str);

// echo $strecript;

?>


<!-- chr and ord function  -->

<?php

// ye function hame ko bhi ASCII value dal kar hame uski keyword return karega 

// $str = chr(100);
// echo $str;


// ord function :- ye function hame keyword value dal ke hame ASCII value ko return karta he
// $str = ord("a");
// echo $str;


?>

<!-- strip_tag and wordwrap function  -->


<?php
// strip_tag:- ye function ka use ham tag ko hatane ke liye karte he 

// $str ="Hellow <b>word </b>, Hellow <i>Earth </i>.";

// echo strip_tags($str);

// use of second parameter name of second parameter allow ,ye parameter ek taga ko matab <b> ko rhane dega or <i> ko nikal dega

// $str ="Hellow <b>word </b>, Hellow <i>Earth </i>";

// echo strip_tags($str, "<b>",);

// *********************************************************

// wordwrap function 

// ye function me 4 para meter hote he 

// syntax :- wordwrap($var,hame kitan chareter ka wrap karna he uska number,"<br>",cut value oh to ek true ho sakti he ya false bydefault false hoti he)

$str = "This word is beautiful."; 

// yese likho ge to jaha se space milega waha se wrap karega qki ham ne 4th parameter nahi diya he

echo wordwrap($str,4,"--",); 

// echo wordwrap($str,4,"<br>",true); //use of 4th prameter 

?> 