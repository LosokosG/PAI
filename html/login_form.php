<!DOCTYPE HTML>
<html>  
<body>

<form action="login_form.php" method="post">
Name: <input type="text" name="name"><br>
Password:  <input type="password" name="passwd"><br>
Remember: <input type="checkbox" name="remember"> <br>
<input type="submit"><br><br><br>
Pseudonim: <input type="text" name="pseudonim"><br>
Komentarz: <input type="textarea" name="komentarz"><br>
<br><br>
Ankieta:
<select name="pozycja">
    <option value="Prezydent"> Prezydent</option>
    <option value="Prezydent"> Zastępca Prezydenta</option>
    <option value="Prezydent"> Komornik</option>
</select>
    <br>
<input type="radio" name="plec" value="m"/>menszczyzna<br/>
<input type="radio" name="plec" value="k"/>kobieta<br/>
<input type="radio" name="plec" value="i"/>inne<br/>

<input type="checkbox" name="K" value="Fido Mariusz"/>Fido Mariusz<br/>
<input type="checkbox" name="K" value="Andrzej Duda"/>Andrzej Duda<br/>
<input type="checkbox" name="K" value="Mariusz Szpakowski"/>Mariusz Szpakowski<br/>

</form>
<?php
if(isset($_POST['name'])){
    echo "Welcome: " . htmlspecialchars($_POST["name"]) . "<br>";
    echo "Password: " . sha1($_POST["passwd"]) . "<br>";
    if(isset($_POST["remember"])){
        echo "Remember: " . $_POST["remember"] . "<br>";
    }else{
        echo "Remember: no";
    }
    
    
    echo "<br>Pseudonim: " . $_POST['pseudonim'] . "<br>";
    echo "Komentarz: " . htmlspecialchars($_POST["komentarz"]) . $_POST["komentarz"] . "<br>";


    echo "Pozycja: " . $_POST['pozycja'] . "<br>";
    echo "Plec: " . $_POST['plec'] . "<br>";
    echo "Kadydat: " . $_POST["K"];

}else{
    echo "Daj jakieś wartości";
}
?>

</body>
</html>

