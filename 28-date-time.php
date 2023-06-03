<?php
// echo "today is " . date("d")."<br>";
// echo "today is " . date("jS")."<br>";
// echo "month is " . date("F")."<br>";
// echo "month is " . date("m")."<br>";
// echo "month is " . date("n")."<br>";
// echo "years is " . date("Y")."<br>";
// echo "years is " . date("y")."<br>";
// echo "Full Date is" . date(" d/n/Y")."<br>";
// echo "Full Date is" . date(" Y/F/d")."<br>";
// echo " Day is" . date("z")."<br>";
// echo "week of the years" . date("W")."<br>";
// echo "Day of the Month" . date("t")."<br>";
// echo "Is this is leep years" . date("L")."<br>";    


?>

<?php

// echo "Hour is " . date("h")."<br>";
// echo "Hour is " . date("H")."<br>";
// echo "Hour is " . date("g")."<br>";
// date_default_timezone_set("Asia/Kolkata");
// echo "Time is ".date("h-i-sa ")."<br>";
// echo "Hour is " . date("G")."<br>";

// echo "minutes is " . date("i")."<br>";

// echo "second is " . date("s")."<br>";

// echo "Meridiem is " . date("a")."<br>";

// echo "Time is ".date("h:i:sa ")."<br>";
// date_default_timezone_set("Asia/Kolkata");
// echo "Time & Date is ".date("d-m-Y h:i:sa e")."<br>";


// echo "Time is ".date("h:i:sa e")."<br>";//e batata he ki ye time konasa contry ka he

?>

<!-- mktime $ Gmmktime  -->

<?php

// echo "time & date". date(" h:i:sa----d/m/Y");
date_default_timezone_set("Asia/Kolkata");
echo  date("l d-m-Y h:i:sa e ",mktime(10,10,10,9,8,1998));
//  mktime function hame purana time or date display karta he 
// maktime stand for make time 

// syntax:- mktime(hours,minute,second,month,day,years)

// echo "Time & Date :" .date("d-m-Y h:i:sa"). "<br>";

// echo date("l",mktime(0,0,0,11,10,1999)); // ye purana week  ko show karega
// date_default_timezone_set("Asia/Kolkata"); 

// echo date("l d-m-Y h:i:sa e ",mktime(0,0,0,1,1,1978 ,));  // ye purana time & date  ko show karega

// *****************************************************

// syntax :-gmmktime(h,m,s,m,d,y); 

// gmmktime stand for Greenwich Mean Time 

// ye function bhi mktime functon ki traha hi kam karta he 

// echo date("d-m-Y h:i:sa ",gmmktime(0,0,0,1,1,1978));date_default_timezone_set("Asia/Kolkata"); 
//apka server jaha per set hoga uska time dikhyega
?>