<?php
$numTab = array(67,23,6,1,64,7,76,21,34,54);
$str = "Mateusz i kot je jedzenie";

foreach($numTab as $i){
echo " $i";
}
echo "<br> ilosc elementow: " . count($numTab) . "<br>";

$strTab = explode(" ", $str);

foreach($strTab as $i){
    echo " $i";
    }
    echo "<br> ilosc elementow: " . count($strTab) . "<br> <br> <br> <br>";

$numTabSorted = sort($numTab, SORT_NUMERIC);

$numTabReverseSort = rsort($numTab, SORT_NUMERIC);

$strTabSort = sort($strTab, SORT_STRING);

$strTabReverseSort = sort($strTab, SORT_STRING);


foreach($numTabSorted as $i){
    echo " $i";
    }
    echo "<br> ilosc elementow: " . count($numTabSorted) . "<br>";
    

foreach($numTabReverseSort as $i){
    echo " $i";
     }
    echo "<br> ilosc elementow: " . count($numTabReverseSort) . "<br>";

    foreach($strTabSort as $i){
    echo " $i";
        }
        echo "<br> ilosc elementow: " . count($strTabSort) . "<br> <br> <br> <br>";

       
        foreach($strTabReverseSort as $i){
            echo " $i";
            }
            echo "<br> ilosc elementow: " . count($strTabReverseSort) . "<br> <br> <br> <br>";
        
    
        
?>
