<?php

// ye function purani date and time and weekness ko display karega 
// $date=date_create("monday 2023-03-14 01:25:00",timezone_open("Asia/Kolkata")); //time zone dene se date nhi change hogi 
// echo date_format($date,"l Y/m/d H:i:sa" ); //ye date and time ko disply kreg
// $date = date_create("2015-03-16 sunday");
// echo date_format($date,"d/m/Y"); //ye weekday ko display karega


?>
 <!-- checkdate & Date_Diff_function   -->
<?php
// echo "<pre>";
// print_r($new);
// echo "</pre>";
// echo checkdate(12,10,1999);
// echo checkdate(22,29,2004); // ye function valid date chack karta hr

// *********************************************

 // ye function valid date chack karta hr
$data1 = date_create("2013-12-20");
$data2 = date_create("2014-12-12");

$diff = date_diff($data1,$data2);


// echo $diff->days; //ye function konse bhi date interval object ko print karta he 

// tye This 

// echo $diff->format("%r%a");// yefunction ulti date ko diplay karega or + ka sing ayega to hata dega
// echo $diff->format("%R%a days"); //ye funtion same kam karega but is positive value ko + ki value me show karega

// echo $diff->format("%R%a%m days"); //ye function date interval object ko bhi print karta he 
// echo "<pre>";
// print_r($diff);
// echo "</pre>";


?>
<!-- Date_Add,Date_Sub,Date_modify  -->

<?php
// $date =date_create("2015-05-15");
//  date_add($date, date_interval_create_from_date_string("1 years"));//date add karne ke use liye kiya jata he

// date_sub($date, date_interval_create_from_date_string("10 days"));//date subtarct karne ke liye use kiya jata he

// date_modify($date, "-10 Days");//date add and  subtarct karne ke liye use kiya jata he
// echo date_format($date , "d/m/Y");
?>
