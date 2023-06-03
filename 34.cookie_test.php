<?php

echo "cookie value : " . $_COOKIE["user"];

// setcookie("user","",time()+(86400 * 30),"/");
// delete cookie 

// (-)ka matlab ke pichale mahine ki date 


setcookie("user","",time()-(1000 * 30),"/");

?>