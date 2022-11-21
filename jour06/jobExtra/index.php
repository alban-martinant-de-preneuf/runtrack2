<?php 

// Boucler sur une string sans boucle :

function myLoop (string $str, int $i = 0): void {
    if (isset($str[$i])) {
        echo $str[$i] . '<br>';
        $i += 1;
        myLoop($str, $i);  
    } 
}

$myStr = "Une phrase d'exemple"; 

myLoop($myStr);
