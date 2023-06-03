<?php
// ye function common value ko nikalta he 

// **********************************

// ye function common key ko nikalta he
// $a = array("a"=>"red","b"=>"green","c"=>"pink","e"=>"orange");
// $b = array("a"=>"red","b"=>"voilet","d"=>"orange");

// $a = array("red","green","pink","orange");
// $b = array("red","voilet","orange");
// $newarray=array_intersect($a,$b);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

// **************************************
// ye function common key and value ko nikalta he
// $a = array("a"=>"red","b"=>"green","c"=>"pink","e"=>"orange");
// $b = array("a"=>"red","b"=>"voilet","e"=>"orange");

// $newarray=array_intersect_assoc($a,$b);

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";
// *******************************************
// // array_intersect_uassoc() u ka matalb hota he user define function
// function compair($a,$b){
//     if($a === $b){
//         return 0;
//     }

//  return ($a >$b)? 1 : -1;
// // }
// $a = array("a"=>"red","b"=>"green","c"=>"pink","e"=>"orange");
// $b = array("a"=>"red","b"=>"voilet","d"=>"orange");
// $newarray=array_intersect_uassoc($a,$b,"compair");
// $newarray=array_intersect_($a,$b,"compair");


// key ko match karta he 

// $newarray=array_intersect_ukey($a,$b,"compair");

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

// *************************************
// ye satement me key and value ki value match ki jati ye 

// function compair($a,$b){
//     if($a === $b){
//         return 0;
//     }

//  return ($a >$b)? 1 : -1;
// }
// function comparevalue($a,$b){
//     if($a === $b){
//         return 0;
//     }

//  return ($a >$b)? 1 : -1;
// }
// $a = array("a"=>"red","b"=>"green","c"=>"pink","e"=>"orange");
// $b = array("a"=>"red","b"=>"voilet","d"=>"orange");

// $newarray=array_uintersect_uassoc($a,$b,"compair","comparevalue");

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

?>

<!-- array_deff()  -->
<?php
// is statement me array  ki differnt value ko match karega 


// $a = array("a"=>"red","b"=>"green","c"=>"pink","e"=>"orange");
// $b = array("a"=>"red","b"=>"voilet","d"=>"orange");

// $newarray = array_diff($a,$b);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";
// ****************************************

// is statement me array  ki differnt key ko match karega 
// $a = array("a"=>"red","b"=>"green","c"=>"pink","e"=>"orange");
// $b = array("a"=>"red","b"=>"voilet","d"=>"orange");

// $newarray = array_diff_key($a,$b);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

// *****************************************

// is statement me value or key matche karke key or value retrun karega
// $a = array("a"=>"red","b"=>"green","c"=>"pink","e"=>"orange");
// $b = array("a"=>"red","b"=>"voilet","d"=>"orange");

// $newarray = array_diff_assoc($a,$b);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";
// **************************************
// // use of user define function 
// function compair($a,$b){
//         if($a === $b){
//             return 0;
//         };
 
//      return ($a >$b)? 1 : -1;
//     };
//     $a = array("a"=>"red","b"=>"green","c"=>"pink","e"=>"orange");
//     $b = array("a"=>"red","b"=>"voilet","d"=>"orange");
//     $newarray=array_diff_ukey($a,$b,"compair");
    // $newarray=array_intersect_($a,$b,"compair");
    
// $newarray = array_diff_assoc($a,$b);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

?>