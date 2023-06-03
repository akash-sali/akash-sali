<?php
$file = fopen("textfile.txt","r");
// file me ham 109 charactor ko read kar sakte he
// echo fread($file,100);

// file ka all data ko get karata he 
// echo fread($file,filesize("textfile.txt"));

// single line ko get karti he 
// echo  fgets($file);

// ftell function hame position return karata he ... 
// echo fread($file,100);
// echo ftell($file);

// fseek funtion funtion hame diye gaye row ka duplicate row return karte hei 
// fseek
echo "<ul>";
while (! feof($file)) {
    $line = fgets($file);
    echo "<li>".$line."</li>";
}
  
echo "<ul>";
?>