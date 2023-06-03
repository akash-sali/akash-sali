
<!-- array-length-and-count-function  -->

<?php

// $name = "akash sali this is a php";

//  $array = str_word_count($name);

//  echo "<pre>";
//  print_r($array);
//  echo "</pre>";      decoratore and            

// strlen():- ye function string ke charactor ki leghth ko mapta he 

// $str = "baba"; 
// echo strlen($str);

// *******************************************
// str_word_count():- iska use ham string ke word ko mapne ke liye karte he 

// iske under me two parameter a te he  

// $str = "yahoo i baba b m";

// echo str_word_count($str); //first-type
// $array=  str_word_count($str,1);

// type-1st
// $array=  str_word_count($str,2); //type-2end
//add second parameter :-ye parameter string ki array bana dega or use ke word ka charactor kitne no par he uski key print karva dega

// echo "<pre>";
// print_r($array);
// echo "</pre>";`
// *******************************************************


// substr_count():-ye function string ke word ko search karta he is ke under 4 parameter hota he

// use of :ye function array konsa string kitane bar daoubl aa raha he oh count karke dega 


// ye function case sensetive he 

// seyntax:- substr_count(var,"search name",star,length);

$str = "Hellow word. The word word is nice";

echo substr_count($str,"word",1,15); //use of:- second paramerter
// echo substr_count($str,"is ",10,15); // use of :-third and fourth  parameter

?>

<!-- search and find- position   -->

<?php
// $str = "This is a position of string";

// $newstr = strrpos($str,"str");

// echo $newstr;


// $str ="my name is akash sali";

// echo strrpos($str,"sali");  

// strpos():-ye function string ki word ki position ko fine karega 

// ye function me 3 parameter hote he or ye casesensetive he 

// syntax:- strpos(var,serch word name,position); 

// $str = "Hello world. the world is nice" ;

// echo strpos($str, "world",-16);

// ********************************************

// string revers function 

// $str = "Hello world. the world is nice" ; 

// echo "strpos : " . strpos($str, "world") . "<br>";

// // strrpos():-ye function ulta tarikese fined karega 
// echo "strrpos : " . strrpos($str,"w") . "<br>"; 


// ***************************************************
// case-insensetive-function 
// $str = "Hello WORLD. the World is nice" ;


// echo "stripos : " . stripos($str, "world") . "<br>";


// strrpos():-ye function ulta tarikese fined karega 
// echo "strripos : " . strripos($str, "world") . "<br>";


?>
 
<!-- string-search-function -->

<?php
// strstr():-ye function string ki word ko selected karega or use ke bad jitanebhi word he unhe return kar dega

// ye function 3 parameter hote he 

// syntax of strstr(var, "search",defulit value true ya false by default false hoti he); or true hogi to left wali word ko return karega nahi to left wali string hi return karega

$str = "Hello  Word. the world is nice";

// echo strstr($str,"o"); //use of thid parameter

//  echo strstr($str,"the",true); //case-insensetive-function 
// **************************************************

// strchr-function
// $str = "Hello world. the world is nice"; 

// echo strpbrk($str,"n");  //ye function same kame karega but isme third parametr kam nahi karega
// -----------------------------------------------------

// echo strrchr($str,"world"); //ye function last serch karega yr reverse function he

// echo strpbrk($str,"wo"); //ye charcter pare kam karega or jopahila charector milega waha se sab return karega



?>