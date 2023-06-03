
<!-- substring-function  -->
<?php

// substr:- start se le ke lenghth tak sub return karega

// syntax:-substr(var,start,length);

// $str = "Hello world. the world is nice" ; 

// echo substr($str,0,11);

?>
<?php
// syntax str_replace(jise replace karna he uska name,kis name se replace karna he uska name,varname); 

// $str = "Hellow word. The word is nice";

// echo str_replace("wd","ea",$str);  //first type
// echo str_replace("word","",$str); //second-type:ye word ke place pe space creat karega
// **************************************


// type of replace double word 

// $str = "Hello word. The word is nice";

// $find = ["Hello","word"];

// $replace = ["hi","earth"];

// echo str_replace($find,$replace,$str);
// ******************************************


// incase-sencetive 

// $str = "Hello word. The word is nice";

// $find = ["Hello","WORD"];

// $replace = ["hi","earth"];

// echo str_ireplace($find,$replace,$str);

// ********************************************************

// use of str_replace function in array

// $color = ["blue","red","green","yellow"];
// echo "<pre>";

// print_r(str_replace("green","pink",$color));

// echo "</pre>";

// ******************************************************

//substr_replace function
// syntax :- substr_replace(var,jis name se replace karna he usaka name,kahse replace karna he index no, kaha tak replace karna he uska indx no); 

// strtr function
// ye charactor ko replace karta he 

    // $str = "Hello word. The word is nice";

    // echo strtr($str,"eo","ia");


// second-type 

// ye function associated array ko lekar word ko repace karega 

// $str = "Hello word. The word is nice";
// $array =["Hello"=>"hi","word"=>"earth"];
// echo strtr($str,$array);

?>