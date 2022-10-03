
<form action="welcome.php" method="post">
Login: <input type="text" name="name"><br>
Password: <input type="password" name="passwd"><br>
Remember: <input type="checkbox" name="remember"><br>
<input type="submit" value ="Create Account" name="register">

</form>

<?php

if(isset($_POST['name'])){
echo "Login: " . htmlspecialchars($_POST['name']) . "<br>";
}

if(isset($_POST['passwd'])){
    echo "Password: " . htmlspecialchars($_POST['passwd']) . "<br>";
    }

if(isset($_POST['remember'])){
     echo "Remember: Not selected";
    }
?> 