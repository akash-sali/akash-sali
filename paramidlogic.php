<?php
$a=0;

while($a <= 10){
    echo "*";
    $a++;
    echo "<br>";
}

for ($i=1; $i <= 10; $i++) { 
    
        for ($j=1; $j <= $i ; $j++) { 
            echo '*';
        }
        echo "<br>";    
}
for ($i=1; $i <= 10; $i++){ 
for ($j=1; $j <= $i ; $j++){ 
   echo "*";
}

}
for ($i=10; $i >=1 ; $i--) { 
    echo "<br>";
    for ($j=1; $j <= $i ; $j++) { 
       echo "*";
    }
}