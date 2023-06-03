
<!-- strtotime,strftime,Gmstrftime function   -->

<?php
// echo date("d-m-Y",strtotime("first day of third month"));

// // strin ko  datemecovert karta he 
// echo strtotime("3 march 2005")."<br>";
// echo date("d-m-Y",strtotime("3 march 2005"))."<br>";
// echo date("d-m-Y H:m",strtotime("-5 hours"))."<br>"; //5hours ko add karega 
// echo date("d-m-Y H:m",strtotime("+1 week"))."<br>";//add a week
// echo date("d-m-Y H:m",strtotime("+ 1 week, 3 day 7 hours 5 second"))."<br>";
// echo date("d-m-Y H:m",strtotime("next sunday"))."<br>";//last sunday ki date ko show karega
// echo date("d-m-Y H:m",strtotime("first hours"))."<br>";
// echo date("d-m-Y H:m",strtotime("last hours"))."<br>";
// echo date("d-m-Y H:m",strtotime("first day of last month"))."<br>";
// echo date("d-m-Y H:m",strtotime("-5 day"))."<br>";
// ***************************************************

// echo strftime("%B %d %Y %X %Z",mktime(21,30,0,05,18,2005))."<br>";//dispaly old time
// echo strftime("%d %m %Y %H %M %S %Z",mktime(21,30,0,05,18,2005))."<br>";//diplay in forment
// echo gmstrftime("%d %m %Y %H %M %S",mktime(21,30,0,05,18,2005))."<br>";

?>

<!-- date time set function  -->
<?php
// date ke undar ha time set kar sakte he 

// $date = date_create("2015-05-15");

// date_time_set($date,12,20);
// echo date_format($date," d-m-Y H:i:s");

// $date = date_create("2015-05-15");
// date_time_set($date, 13,20);

// echo date_format($date,"d-m-Y H:i:s")."<br>";

?>
 
<!-- TimeZone function  -->
<?php
// date_default_timezone_set("Asia/Kolkata");
// echo date_default_timezone_get(). "<br>"; 

// $tz = timezone_open("Asia/Kolkata");
 // echo timezone_name_get($tz). "<br>";


// echo "<pre>";
// print_r(timezone_location_get($tz));
// echo "</pre>";
      
// $date = "10-11-1999";
// // $date_formate = date_format($date,"d/m/Y");
// $date_result = date('d/m/Y',strtotime($date."t"));

// echo $date_result;

?>