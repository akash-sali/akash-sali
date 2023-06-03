<?php

// ye function string ke charector ko compaire karta he 

// ye function hame batayega ki dono string me konsa string bada he 
// echo strcmp("Hellow world! ","Hellow world! akash"); 

// **********************************************************

// strncmp()function isi me n ka matlab length hota he

// is function me 6  ka kam he oh pahile strig ke 6 charactor ko dusre charector se match kar raha he 

// echo strncmp("Hellow world! akash","Hellow world!",5);

// *******************************************************

//  incasencetive-function 

// echo strcasecmp("hello world!","Hello world! word");


// incasesencetive-length-function 
// echo strncasecmp("HELLO world!","Hello world! word",5);

// ***********************************************************

// strnatcmp()function:- ye function me nat ka matlab hota natural-algorithum

// is function me purane function chalege but galat tarikese se compair karege

// echo strcmp("1Hello world!","10Hello world!"); 

// echo strcmp("10my name is akash","20i live in ahndabad");

// incasesecentive-nat-function 
// echo strnatcasecmp("Hello world!","Hello WORLD!");

// **********************************************************

// 0 qual charector ko compaire karega or 1ho to compaire karega nahi to -1 hoga to compair  nahi karega 


//  substr_compare():-function 
// echo substr_compare("my name is akash","",5,1);


// echo substr_compare("Hello world!","rld!",-2,2); 

// ********************************************************

// similar_text()function :-is ka matlab he ki kitana text other text se match kar raha he 

echo similar_text("Hello world!","Hello yahoods");

// use of third parameter 

// 
//ye function ka use ham kitna percentage match ho raha he 

// echo similar_text("Hello world!","Hello yahoobaba",$per);

// echo "percentage:".$per
?>

<!-- reverse and suffele function in string  -->

<?php


// strrev(function)
// echo strrev("Akash Sali");

//str shuffel

// echo str_shuffle("Akash Sali");

?>

<!-- str_pad and str_repeat function  -->

<?php

// second parameter ki value second string se jada honi chahiye 
// pad ka matlab padding hota he 

    // $str ="Hello Word"; 

    // echo str_pad($str,20,"=", STR_PAD_LEFT);

// echo str_pad($str,20,".", STR_PAD_BOTH);

// echo str_pad($str,20,".", STR_PAD_RIGHT);

// *****************************************************


// str_repeat()
// ye function value ko jitne bar chahiye utane bar repeat kar sakte he
// $str ="wow ";

//     echo str_repeat($str,5);

// ?>

<!-- string trim and chop function  -->

<?php

$str = "yahoo baba,"; 

// echo $str ,"<br>";

// trim() function me left and right ka hi cut hoga
// echo trim($str,"b");
// echo rtrim($str,"");
// echo ltrim($str,"y"); 

// rtrim() function :right wale hi charector ko delete karega 
// echo rtrim($str,"a");

// rtrim() function :left

// wale hi charector ko delete karega 
// echo ltrim($str,"y");

// space ko yese delet karte he 

// $str = " yahoo baba ";
// echo $str ,"<br>";
// echo trim($str);
// echo rtrim($str);

?>