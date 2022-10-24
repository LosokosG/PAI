<?php
session_start();
$encPasswd = sha1($_SESSION["passwd"]);

echo "Login: " . $_SESSION["login"] . "<br>"; 
echo "Password: " . $encPasswd . "<br>";


?>