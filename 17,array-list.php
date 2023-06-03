<!-- array-list function  -->
<?php


$color = array("red","green","blue","gray");

list($a,$b,$c,$d)=$color;

echo "value of :- ".$a."<br>";
// echo "value of :- ".$b."<br>";
// echo "value of :- ".$c."<br>";
// echo "value of :- ".$d."<br>";

// role list function:- ye function index and associated array me sirf numerical key pe hi kam karega

//use of :- ye function array ki value ko alag alag variable me store kar sakta he


// $color = array('red','green','blue');

// $color =[22,20,30,33];


// list($a,$b,$c)=$color;

// echo "value of a : $a <br>";
// echo "value of b : $b <br>";
// echo "value of c : $c <br>";
// ----------------
// -------------------------------//

// associated array with list function 

// $color = array (0 => 'red', 1=>'green',2=>"blue");


// list($a,$b,$c) = $color;

// echo "value of a : $a <br>";
// echo "value of b : $b <br>";
// echo "value of c : $c <br>";

// ---------------------------------------------//

// second-type 

// $color = array(0 => 'red', 1=>'green',2=>"blue");


// list($a[0],$a[1],$a[2]) = $color;

// echo "value of a : $a[0] <br>";
// echo "value of b : $a[1] <br>";
// echo "value of c : $a[2] <br>";

?>
<!-- ********************************************************* -->


<!-- extract-and-compact function  -->
<?php


//  extract-function 

// ye function key ko variable me convert karta he or ye shirf associate array per hi kam akarega


$color = array ("a" => 'red', "b"=>'green',"c"=>"blue");

extract($color);

echo "value of a : $a <br>";
echo "value of b : $b <br>";
echo "value of c : $c <br>";
// echo "<pre>";  



// role of extract function


$a = "orange";
$color = array ("a" => 'red', "b"=>'green',"c"=>"blue");

// // EXTR_OVERWRITE Rrole he array ki value hi print karega qki ye bydefault value hoti he 
// extract($color,EXTR_SKIP);   


// echo "value of a : $a <br>";
// echo "value of b : $b <br>";
// echo "value of c : $c <br>";

// -----------------------------------------//

// EXTR_SKIP array ki value ko skip kar dega od bahar wali value ko print karega 


//  $newarray=extract($color, EXTR_SKIP);
 

// -----------------------------------------//


// EXTR_PREFIX_SAME :-ye bahar vali or under wali array ko print degi 


// extract($color, EXTR_PREFIX_SAME,"test");
// echo "value of a : $a <br>";
// echo  "value of a :$test_a <br> ";
// echo "value of b : $b <br>";
// echo "value of b : $c <br>";

// -----------------------------------------//
// EXTR_PREFIX_ALL:-is me hame array ki har valu ko prefix lagana ho to laga sakte he  

// *************************************************************//

// compact-function 
// Tip:- compact varibale ki value ko associated array me covert kar ke variable ko key bana deta he 

$firstname = "akash";
$lastname = "sali";
$age =20 ;

$newarray = compact("firstname","lastname","age");

echo "<pre>";
print_r($newarray);
echo "</pre>";

// second-type 


// $firstname = "akash";
// $lastname = "sali";
// $age =20 ;
// $gender = "male";
// $country=  "india";


// $extract = ["gender","country"];

// $newarray = compact("firstname","lastname","age","gender",$extract);

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";


?>