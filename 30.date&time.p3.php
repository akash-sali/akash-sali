<!-- Getdate, locldate,Gettimeofday function  -->

<?php

// ye function ek array banakar dega 

// echo "<pre>";

// print_r(getdate());

// echo "</pre>";
// ********************************************

// kisi bhi ek array ko dispaly kar sakte he 
// $date = getdate();

// echo $date['month']."/".$date['year'];

// echo "<pre>";

// print_r(getdate());

// echo "</pre>";
// **************************************************

// use of mktime function this function 

// echo "<pre>";
// $olddate = mktime(0,22,0,10,13,1999);
// print_r(getdate($olddate));//array me diplay karne ke liyez

// echo "</pre>";
// **********************************

// gettimeofday function currect time ko array me display karta he 

// echo "<pre>";

// print_r(gettimeofday());

// echo "</pre>";

// ********************************** 

// $date = gettimeofday();

// echo $date["sec"];
// ******************************

// local function local server ka local time display karta he 

//  readeble fome me 
// echo "<pre>";

// print_r(localtime( time(),true));

// echo "</pre>";

// old date ke liye 

// $olddate = mktime(0,0,0,03,15,2015);

// echo "<pre>";

// print_r(localtime( $olddate,true));

// echo "</pre>";

?>

<!-- Date_parse function  -->
<?php
// *****************************

// spcial array ke liye 

// $date = date_parse("2015-03-15 12:30:25.5");
// echo "<pre>";
// echo $date['day'];
// print_r($date);
// *********************************************

// date_parse_from_format function 

// ye functon me ham date ko kosbhi format me de sakte ke 

// echo "<pre>";
// print_r(date_parse_from_format("d.n.y","15.3.2015"));
// echo "</pre>";

?>