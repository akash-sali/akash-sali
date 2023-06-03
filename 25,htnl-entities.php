<?php


// htmlentities():- ye function shirf single quote ko chhoad kar sabhi html tag ko html enties me convert karega

// "" convert,'' not convert

// $str ="A 'quote' is <b>bold</b>";

// echo  $str . "<br><br>";

// echo htmlentities($str,ENT_QUOTES);     
// *************************************************

// $str = '<a href = "https://www,yahoobaba.net">yahoo baba website</a>';
// echo $str. "<br><br>";
// echo htmlentities($str);
// **********************************************

// ENT_QUOTES:- ye parameter single quotes ko bhi html entities me covert karega 
// $str ="A 'quote' is <b>bold</b>";
// echo $str. "<br><br>";
// echo htmlentities($str ,ENT_QUOTES);
// **********************
// *****************************
// ENT_NOQUOTES:-ye parameter single or double quote ko convert nahi katrega ye shirf html spacial element ki hi convert karega 

// $str ="A 'quote' is <b>bold</b>";
// $str = '<a href = "https://www,yahoobaba.net">yahoo baba website</a>';
// echo $str. "<br><br>";
// echo htmlentities($str ,ENT_NOQUOTES);


// *************************************

// htmlspecialchars():-ye function uper wala function kitrah hi kam karta he 

// $str = '<a href = "https://www,yahoobaba.net">yahoo baba website</a>';
// echo $str. "<br><br>";
// echo htmlspecialchars($str ,ENT_NOQUOTES);

// echo htmlspecialchars($str ,ENT_QUOTES);

// ************************************************
// html_entity_decode():-ye function jo html entities me convert huhe use decoding matlab entities se bahar nikal detahe


// $str = '<a href = "https://www,yahoobaba.net">yahoo baba website</a>';
// echo $str. "<br><br>";

// $newlent = htmlentities($str ,ENT_NOQUOTES);

// echo $newlent;

// echo html_entity_decode($newlent);

// *********************************************

// htmlspecialchars_decode($newlent):-ye function specialchars function per kam karta he 

// $str = '<a href = "https://www,yahoobaba.net">yahoo baba website</a>';
// echo $str. "<br><br>";
// $newlent = htmlspecialchars($str ,ENT_NOQUOTES);

// echo $newlent;

// echo htmlspecialchars_decode($newlent);

// *******************************************

// // get_html_translation_table(HTML_SPECIALCHARS) :-ye functiom hamr html special char ki ek  list bana ke dega ok ye kis par use hoti ye oh bhi batayega s
// echo "<pre>";
// print_r(get_html_translation_table(HTML_SPECIALCHARS));
// echo "</pre>";


// YE PARAMETER SABHI HTML enties KE LIST KO DISPLAY KAREGA 
// echo "<pre>";
// print_r(get_html_translation_table(HTML_ENTITIES));
// echo "</pre>";


?>


<!-- md5 and sha1 functio -->


<?php

// $str = "my name is akash";

// echo  "sh1:-". sha1($str);

// md5 and sh1 ye dono function password ko encript karne keliye use kiya jata he  

// // md5:-ye function true rahega to binary me string ko convert karega 
// $str ="hello";

// echo "The string: " .$str. "<br><br>";

// echo "md5 Binary : " . md5($str, TRUE). "<br> <br>";

// false rahega to hexa decimal me string ko convert karega 
// echo "md5 hex : " . md5($str). "<br><br>";  //32 charector
// **********************************************

// sh1:- ye function same kam karta he but jada charector deta he 

// echo "sha1 Binary : " . sha1($str, TRUE). "<br><br>";  //20 charecto


// echo "sha1 hex : " . sha1($str). "<br><br>";  //40 charecto
// *********************************************************************

// example with if statement 

// $str = "hello";
// if(md5($str)=="5d41402abc4b2a76b9719d911017c592" ){
//     echo "password match";
// }
// else{
//    echo" passoword not match";
// }
?>

