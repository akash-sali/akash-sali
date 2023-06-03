
<!-- Explode and implode and join function  -->

<?php

// explode function ka use string ko array me convert karne ke liye kiya jata he 
// syntax of expload 
// 1st-para:-seperator ka use ham string ko space me ya . se hatane ke liye karsakte he
// 2send-para:- use of vatiable name 
// 3rd-para :-is ka matlab he ki  array ka kitane index  banana chahte he 1 ya 2kintane bhi bana sakte he 
// explode(separator, string, limit) 
// start :=> 
$str = "hellow word it is a beautiful day";
$array = explode(" ",$str); 
// $array = explode(" ",$str,3);  //use of third parameter
echo "<pre>";
print_r($array);
echo "</pre>";
// ----------------------------------------//
// use of implode function ka use array ko string me convert karta he
$array = array('hellow','world!','Beutiful','day!');
$str = implode("=",$array); //implode function
$str = join(",",$array); //join function
echo $str;
?>
<!-- *********************************************** -->
 <!-- str_split $ chunk_split function  -->
<?php
// str_split ka use ham string ke har ek chractor ko array me store karte he is me two parameter hote 
$str = "yahoo baba";
$array = str_split($str,1) ;
echo "<pre>";
print_r($array);
echo "</pre>";
// --------------------------------------//
// chunk_split:- me 3 parameter  hote he 
// syntax 0f chunk :- chunk_split(var,length no, add symbol )
// $str = "yahoobabaisbestguidunce for web ";
// $array = chunk_split($str,5,".") ;
// echo "<pre>";
// print_r($array);
// echo "</pre>";

?>                                                                                                           
<!-- uppercase and lowercase latter string  -->

<?php
$str = "Yahoo baba"; 
// $newstr = strtolower($str); 
// $newstr = strtoupper($str); 
// $newstr =ucfirst($str); 
// $newstr =lcfirst($str); 
// echo $newstr; 
?>


