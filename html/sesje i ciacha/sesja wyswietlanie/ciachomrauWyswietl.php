<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables

echo "Sesyjna Liczba 1 : " . $_SESSION["sesyjnaLiczba1"] . "<br>";
echo "Sesyjna Liczba 2 : " . $_SESSION["sesyjnaLiczba2"] . "<br><br>";

echo "Sesyjny String 1 : " . $_SESSION["sesyjnyString1"] . "<br>";
echo "Sesyjny String 2 : " . $_SESSION["sesyjnyString2"] . "<br>";

if(isset($_POST["close_session"])){
    session_unset();
    session_destroy();
    echo "<br> Wartości sesji zostały usunięte i sesja została zamknięta";
}

?>

<form method="post">
 <p><input type="submit" name="close_session"/></p>
</form>


</body>