<?php

// array_flip() ---is function ka use ha key value ki jaga par or value key ki jagah per aa jayegi

// $a = array(
//     "bill" => 10,
//     "joe"=> 20,
//     "peter"=>30,
// );

// $newarray = array_flip($a);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";


 /*-------------------------*/

//  array_change_key_case()----ye function uppercase and lowercase case coverted hoga

// $a = array(
//     "Bill" => 10,
//     "joe"=> 20,
//     "peter"=>30,
// );


// $newarray = array_change_key_case($a, CASE_UPPER); 
// // $newarray = array_change_key_case($a, CASE_LOWER);

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

?>

<?php
// is function me array ki value ki sum hogi
// $a = array(2,4,6,8);
// $a = array("a"=> 1.2,"b"=>1.4,"c"=>1.6,"d"=>1.8);

// echo "sum=".array_sum($a);

/*---------array-product------------*/
// is function me array ki value ki multiple hogi
// $a = array(2,4,6,8); 
// $a = array("a"=> 1.2,"b"=>1.4,"c"=>1.6,"d"=>1.8);

// echo "multi=".array_product($a); 
?>

<?php

// random finction 
// is function me hame  random number print karke milega
// $color =array("rarray_randed","green","yellow","blue","broun");

// $newArray = ($color);  //1st-type
// $newArray = array_rand($color,3);
// echo "<pre>";
// print_r($newArray);
// echo "</pre>";

// echo $color[$newArray];  //value printed-type 1st  with value

// echo $color[$newArray[0]]."<br>";
// echo $color[$newArray[1]];

// ---------------------------------------

//use of associated array


// $color =array("a"=>"red","b"=>"green","c"=>"yellow","d"=>"blue","e"=>"broun");

// // $newArray = array_rand($color);  //1st-type
// $newArray = array_rand($color,2); //2ed-type
// echo "<pre>";
// print_r($newArray);
// echo "</pre>";

// ---------------------------------------


// shuffle function 
// ye function value ki place ko change kar deta he
// $color =array("red","green","yellow","blue","broun");
// 
// ye function naya array nahi create karta 
$color =array("a"=>"red","b"=>"green","c"=>"yellow","d"=>"blue","e"=>"broun"); 

shuffle($color); 
echo "<pre>";
print_r($color);
echo "</pre>";


?>
