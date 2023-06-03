<?php
// learning a function 
// function name($a,$b){
//   $a= $a+$b;
//   return $a;
// }

// echo name(50 , 50);


// ******************************************

//function-parameter
  // echo "Hello". $first.= $last;

// }
// functionname("akash","sali<br>"); //This is a arrgument
// functionname("yahh","hiii");

//default parameter value

/*function functionname($first="akki",$last= " akya"){
    echo "Hello ". $first. $last;
  
  }
  functionname("") */ //This is a arrgument

  

//   arthmatic operator use in paramiter functon 
//   function sum($a ,$b){
//       echo $a + $b;
//   }
//   sum(20,30);

// ***********************************************


// return function 
// function text($name,$sarname){

//    $na = "$name $sarname";
//    return $na; 
// }
// $ak= text ("akash","sali");

// echo $ak;


// sum example on return function 
// function sum($math,$Eng,$marathi){
//     $s = $math + $Eng + $marathi;
//     return $s;
// }

// $total = sum(55,54,78);
// echo $total;

// real time example on return function
// function sum($math,$Eng,$marathi){
//     $s = $math + $Eng + $marathi;
//     return $s;
// }
// sum(50,55,65);
// function persantage($st){
//     $per = $st / 3;

//     echo $per . "%";
// }

// $total = sum(55,54,78);


// persantage($total);

// ****************************************

// recursive-function 

// function testing($string){  //& this is a address of test
// $string .= " and something ";
// echo $string;

// }
// testing("");
// echo $test;


// // second example 
// function first($num){
//   $num += 5;
// }
// function second(&$num){
//   $num += 5;
// }
// $number = 10;
// first($number);
// echo "Original value is $number<br>";

// second($number);

// echo "Original value is $number <br>";
// *******************************************

// $ak=function(){
//   echo "This is a variable function";

// };

// $ak()


//variable function
// function wow(){
//     echo "Hello ";
//   }
  
//   $func = "wow";
//   $func();

// second example 

//  $func = function($name){
//   echo "Hello $name";
// };

// $func(" akash sali");

// rescursive function 

// rescursive function khud ko hi  call karta he jabtak false nahi ho jata 

// function display($number){
// if($number <= 5){
//   echo "$number <br>";
//   display($number + 1);
// }
// }
// display(1); 


// second example of rescursive funcetion 
// factorial number  5 = 5*4*3*2*2


// function factoria($n){
  
//   if($n == 0){
//     return 2;
//   }
//   else{
//     return ($n * factorial($n-1));
//   }
// }
// echo factorial(4);

// formla of factorial no 

// f(n)=n*f(n-1)
// f(5)=5*f(5-1)=5*f(4)
//  5*4*f(4-1)=20*f(3)
//  20*3*f(3-1)=60*f(2)
//  60*2*f(2-1)=120*f(1)
//  120*1*f(1-1)=120*f(0)
//  120*1=120
// practicle Example
// $nav="";
// function demo($name){
//    $nav = "akash";
//    return $nav;
//    demo($nav);
// }

// echo demo($nav);
// for ($i=1; $i <= 8; $i++) { 
//   echo "<pre>";
//   for ($j=1; $j <= $i; $j++) { 
//      if($i($i-$j)){
//        echo "*";
//        }
//       }
//   echo "*";
// }



function test(&$str){
  return $str = $str . "akash";
}
$str = "Hello ";
 test($str);

echo $str;



?>