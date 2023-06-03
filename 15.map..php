<?php

// first-type 

// array ke har ek value per ek function ka hi use karne he tab ye array_map function use karte he

function square($n){
    return $n * $n;
  } 
  $a = [1,2,3,4,5,];
 
  $newarray = array_map("square",$a);
  echo "<pre>";
  print_r($newarray);
  echo "</pre>";

// second-type 

// function square($n,$m){
//   return $n = $m;
// } 
// $a = [1,2,3,4,5,];
// $b = ["akash","ajay","chetan","prem","jay"];
// $newarray = array_map("square",$a,$b);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";


// Third-type 


//  function square($n,$m){    
//   return $n for $m;          //1st-type
// } 


// function square($n,$m){
// return [$n => $m];      //2sd-type //multidimention-array
//   }
// $a = [1,2,3,4,5,];
// $b = ["akash","ajay","chetan","prem","jay"];
// $newarray = array_map(null,$a,$b);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";



// function square($n){
//     return strtoupper($n);      //2sd-type //multidimention-array
//   }

//   $a = array("one"=>"apple","two"=>"banana","third"=>"graps");
// $newarray = array_map('square', $a);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";
?>
<!-- array reduce function  -->

<?php

// first type 

// is function $n name ka variable empty he or $m name ka vairiable me $b name ka vairiable ki value store ho rahi he or he hame ek value return kar ke de raha he.


// function square($n,$m){
//     return $n . "-". $m;
// }

// // $a=[1,2,3,4,5,6,7];
// $b = ["akash","ajay","chetan","prem","jay"];
// $newarray=array_reduce($b,'square',"anjju");

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

// second-type


?>
