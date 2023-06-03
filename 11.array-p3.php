<?php

// first type 

// syntax of array_slice(var,start,length)

// *****************************************

// second type 
// slicing ulta karne ke liye iska use hota he 

// true is a resurve paramiter ye apna shihi index no show karta he
// $color = ["red","yellow","green","pink"];

// $newarray = array_slice($color ,1,-2,true);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";
// *********************
// ****************


// third type  
// recursive -array 

// $color = ["a"=>"red","b"=>"yellow","1"=>"green","d"=>"pink"];

// $newarray = array_slice($color ,1,3,true);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

?>
<!--******************************************-->

<!-- array -array_splice()function  -->
<?php
//  syntax of array_splice(array,start,length,array-2) 

// start se length tak sab delet kardega 
$color = ["red" ,"green", "blue","yellow","brown"];

array_splice($color,1,2);

echo "<pre>";
print_r($color);
echo "</pre>";

// ********************************

// // second-type
// $color = ["red" ,"green", "blue","yellow","brown"];

// $fruit=["Orange","apple"];
// array_splice($color,1,2,$fruit);
// echo "<pre>";
// print_r($color);
// echo "</pre>";  

// ***************************************

// $color = ["red" ,"green", "blue","yellow","brown"];

// $fruit=["Orange","apple"];

// array_splice($color,count($color),7,$fruit);
// echo "<pre>";
// print_r($color);
// echo "</pre>";
?>




<!-- array value function  -->
<?php


 // array ki value ko index number me convert karta he 

// $color = ["red","yellow","green","blue"];

// $newarray=array_keys($color);

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";
// **********************************

// // array_key_first() 

// $color = ["red","yellow","green","blue"];

// $newarray=array_key_first($color);

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

// ******************************
// array_key_first and_last() 

// $color = ["first"=>"red","second"=>"yellow","third"=>"green"];

// $newarray=array_key_first($color); 
// $newarray=array_key_last($color); 

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

// ****************************************
// array_key_exists()
// ye function keychack karega  sahi hoga to 1 print karega nahi to 0 print karega 

// $color = ["first"=>"red","second"=>"yellow","third"=>"green","blue"];

// // $newarray=array_key_exists("first",$color);
// $newarray=key_exists("first",$color);

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

// ****************************************
// write a if statement 

// $color = ["first"=>"red","second"=>"yellow","third"=>"green","blue"];
// $newarray=key_exists("first",$color);

// if($newarray){
//     echo "exist is successfull";
// }
// else{
//     echo "exist is not successfull";
// }

?>


<!-- array_unique() and array_values -->

<?php


// array_values()

// naya index array bana deta  he  
//$color = ["r"=>"red","b"=>"blue","y"=>"yellow","g"=>"green","n"=>"yellow"];
// $color=array("red","blue","yellow","green");
// $newarray=array_values($color);
// $newarray=array_unique($color);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";
// ******************************************


// array_unique()
// ye array duplicate value ko nikal deta he 
// 
?>

<?php
// $array= array(
//     array(
//         'id'=> 2201,
//         'first_name'=>'anil',
//         'last_name'=> 'kpoor',
//     ),
//     array(
//         'id'=>2202,
//         'first_name'=>'salman',
//         'last_name'=>'khan',

//     ),
//     array(
//         'id'=>2203,
//         'first_name'=>'john',
//         'last_name'=>'abraham',
//     )
//     );
// $newarray = array_column($array,'first_name',);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";
// ***************************************




// ye value ko array ki key bana deata he or ek naya array creat karta he 

// $newarray = array_column($array,'last_name','id');
// echo "<pre>";
// print_r($newarray);
// echo "</pre>"
// ***************
//***********************

// chunk array function 
// is example me har value ka naya group banayega 

// $name =["akash","ajay","yesh","jay","bhikya","deepya"];
// $value=array_chunk($name,2);

//  echo "<pre>";
// print_r($value);
// echo "</pre>";



?>

