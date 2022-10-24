<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["sesyjnyString1"] = "Giga chad";
$_SESSION["sesyjnyString2"] = "sesyja";
echo "Session variables are set.";
?>

</body>