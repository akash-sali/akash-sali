<?php

// short() function 

// $food = array('orange','banana','graps',"apple");
// sort($food);
// echo "<pre>";
// print_r($food);
// echo "</pre>";




// desinding order shorting rsort() r ka matlab revers sort 

// $food = array('orange','banana','graps',"apple");
// $food = [10,9,3,2,1,5];

// rsort($food);
// echo "<pre>";
// print_r($food);
// echo "</pre>";


// associates array sorting asort() a ka matalb associated

$food = array("d"=>"lemon","a"=>"orange","b"=>"banana","c"=>"apple");

asort($food);
echo "<pre>";
print_r($food);
echo "</pre>";

// array-reverse short 

// $food = array("d"=>"lemon","a"=>"orange","b"=>"banana","c"=>"apple");

// arsort($food);
// echo "<pre>";
// print_r($food);
// echo "</pre>";

// array key sort ksort() and 
// key reverse short krsort()


// $food = array("d"=>"lemon","a"=>"orange","b"=>"banana","c"=>"apple");

// ksort($food);  //key sort

// krsort($food); // key reverse short
// echo "<pre>";
// print_r($food);
// echo "</pre>";

// natshot() nat ka matlab he natureal short

// $array1 = array("img12.png","img10.png","img2.png","img1.png"); //
// natsort($array1); // key reverse short
// // sort($array1);
// echo "<pre>";
// print_r($array1);
// echo "</pre>";


// natcasesort() case ka matlab casesensetive

// $array1 = array("Img12.png","Img10.png","img2.png","img1.png"); //

// natcasesort($array1); // key reverse short
// echo "<pre>";
// print_r($array1);
// echo "</pre>";



// multi sort

// role:- dono array me same value hona chahihe nahi to error ayega 
//  $food= array("orange","banana");
//  $veggie = array("lemon","carrot");
//  array_multisort($food,$veggie); // key reverse short
//  echo "<pre>";
//  print_r($food);
//  echo "</pre>";
//  echo "<pre>";
//  print_r($veggie);
//  echo "</pre>";
//  array_reverse  function 


//  $food= array("orange","graps","apple","banana");

//  $newarray = array_reverse($food);
//  echo "<pre>";
//  print_r($newarray);
//  echo "</pre>";

?>

<!-- traversing array-->

<?php

$food =array('orange','banana','apple','graps');
// current function hame pahili value return karega qki array pointer first value per hota 
// echo"<b>current : </b>" .current($food)."<br>";


// key functin hame array value ka print return karega 

// echo "<b>key: </b>" . key($food) . "<br>";

// pos function:- pos or curent me kuch deffrent nahi hota dono me se kohi bhi uese use kar sakte he he

// echo  "<b>current : </b>" . pos($food) . "<br>"; 

// next function :- next function curent value ki next value return karegi

next($food);
// echo  "<b>current : </b>" . current($food) . "<br>";


// next($food);
// echo  "<b>current : </b>" . current($food) . "<br>";

// prev-function:- ye function me value prev hogi

// prev($food);
// echo "<b>current : </b>" . current($food) . "<br>";

// end-function:- ye function array ki end wali value ko print karega

// end($food);
// echo "<b>current : </b>" . current($food) . "<br>";
// echo "<b>current : </b>" . key($food) . "<br>";


// each-function:- ye function hame key or value return karega or hame naya array return kar dega

// $veggie = array("fulawer","chilli","potato","cattot","tomato");
// echo "<pre>";
// print_r(each($veggie));
// echo "</pre>";


// reset-function:-

// reset($food);
// echo "<b>current : </b>" . current($food) . "<br>";

?>