<!-- max and min function  -->
<?php
// use of max function 

// $val = max(22,33,12,13,21,22);

// echo $val;

// use of min function 
// $val = min(22,33,12,13,21,22);

// echo $val;

// *********************************************
// use of max function with array 
// $val = max(array(22,33,12,13,21,22));

// echo $val;

// *********************************************
// $val = min(array(2,4,8),array(2,5,1));    //min-function
// $val = max(array(2,4,8),array(2,5,1));      //max-function

// echo $val;

// echo "<pre>";
// print_r($val);
// echo "</pre>";


// $val = max(true,false);  //max-function
// $val = min(true,false); //min-function

// echo $val;
?>

<!-- ceil,round,floor,abs function  -->

<?php

// ceil function uper(badi) wali  value display karega 

// echo(ceil(0.60)."<br>");
// echo(ceil(0.40)."<br>"); 
// echo(ceil(5)."<br>"); 
// echo(ceil(-5.1)."<br>");$olddate


// floor function niche(choti) wali  value display karega 

// echo(floor(0.60)."<br>");
// echo(floor(0.40)."<br>"); 
// echo(floor(5)."<br>");
// echo(floor(-5.1)."<br>");

// round function 0.60 se badi hogi to upper wali value dega choti ho to niche wali value dega 

// echo(round(0.60)."<br>");
// echo(round(3.30)."<br>"); 
// echo(round(5)."<br>");
// echo(round(-5.1)."<br>");



// abs stand for absulate  ye function kohi bhi sing ho to use remove kar dega 

// echo(abs(0.60)."<br>");
// echo(abs(0.40)."<br>"); 
// echo(abs(5)."<br>");
// echo(abs(-5.1)."<br>");
?>


<!-- intdiv,sqrt,pow function  -->

<?php
// ye function value ka division karne ke liye use kiya jata he 
// echo  intdiv(8,4);

// ye function square root nikal kar dega 
// echo  sqrt(16);


// ye function power nikal kar dega 
// echo  pow(3,3);
?>

<!-- rand,mt_rand,lcg_valuefunction -->

<?php
//  rand function 
// echo rand()."<br>";
// echo rand()."<br>";
// echo rand(0,10)."<br>"; // ye parameter me 0 se lekar 10 tak ki bich me ki random value display karega
// ************************************************

// echo mt_rand()
// ye function rand function ki traha kam karega  but ye rand function se 4 guna faster ge 


echo lcg_value()."<br>";
 //ye function me parameter nahi hote he or ye function 0 or 1 ke bich me  ke decimal valu ko display karwata he
?>