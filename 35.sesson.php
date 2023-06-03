<?php
// sesson cookie tarah ki kam karta he lekin oh jo site ka mister he uske system me user ki information save nahi karega oh server  me hi save karega
session_start();

$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
echo "session Variable is set";
?>