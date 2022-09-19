<!DOCTYPE html>
<head>
   <meta charset="utf-8"> 
</head>
<body bgcolor="teal" text="white">
</body>



<?php
        
    require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if($conn ->connect_error) die($conn->connect_error);

    $query = "SELECT * FROM fantasy";
    $result = $conn->query($query);
    if(!$result) die($conn->error);

    $rows = $result->num_rows;
    for($j =0; $j < $rows; ++$j)
    {
        $result->data_seek($j);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        echo 'ID: ' .$row['ID'] .'<br>';
        echo 'Tytuł: ' .$row['autor'] .'<br>';
        echo 'Autor: ' .$row['autor'] .'<br>';
        echo 'Rok: ' .$row['rok wydania'] .'<br><br>';
    }
    $result -> close();
    $conn -> close();
       