<?php

session_start();

if(isset($_POST["wyslij"])){
    $_SESSION["login"] = $_POST["login"];
    $_SESSION["password"] = $_POST["login"];
    echo "<br> Wartości zostały ustawione";
}else{
    echo "<br> Podaj wszystkie wartosci!";
}

?>

<!DOCTYPE html>

<body>



<form method="post">
    <input type="text" name="login">
    <input type="password" name="passwd">
    <input type="submit" name="wyslij">

</body>