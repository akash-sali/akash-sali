
<!-- array_fill_keys() and array_fill()  function  -->
<?php

// $name =["akki","bakki","cakki","pakki"];

// $newarray = array_fill(1,5,$name);
// echo "<pre>";
// print_r($newarray);
// echo "<pre>";

// is fuction ka use  index array se associated array  me convert karne me kiya jata he 
// $a = array("a","b","c","d","e"); 

// // first-type:-
// $newarray=array_fill_keys($a,"testing");
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

// second type:- 

// // syntex:- array_fill(index,number, value);
// $name = ["akash","ajay","bhrat","joy"];

// $newarray =array_fill(1,2,"testing");

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";
?>
<!-- array_walk() and array_walk_rescursive()  function  -->

<?php
// ye function array ki har value ke liye chal raha he or loop ki trah value ko print krte ja rha he 

// ye shirf index or associate array per hi use hoga  do not work on multidimesion array 

// syntax: array_walk_(arrayname,"functionname","value");

// $name =array("akash","ajay","kunal","kirsh");

// array_walk($name,"myfunction","is my name ");

// function myfunction($value,$key,$param){
//   echo " $value $param  <br>";
// };

// $fruit = array(
//     "lemon",
//     "orange",
//     "banana",
//     "apple",
  
// );
// array_walk($fruit,"myfunction","is a key of");

// function myfunction($value,$key,$param){
//     echo "$key $param $value <br>"; 
// }

// second type 

// use of array_walk_rescursive() function 

// $veggie = array ("1"=>"carrot","2"=>"tomato");
// $fruit =array(
//     $veggie,
//     "a"=>"lemon",
//    "b"=>"orange",
//    "c"=>"banana",
//     "d"=>"apple",
// );
//  array_walk_recursive($fruit,"myfunction","is a key of");

//   function myfunction($value,$key,$param) {
//     echo "$key $param $value <br>"; 
//   }

?>

