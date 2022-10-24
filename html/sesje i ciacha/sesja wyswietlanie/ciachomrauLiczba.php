<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["sesyjnaLiczba1"] = 10;
$_SESSION["sesyjnaLiczba2"] = 20;
echo "Session variables are set.";
?>

</body>