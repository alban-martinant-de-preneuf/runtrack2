<?php

for ($i = 2; $i <= 1000; $i++) {
    $primeNumber = true;

    for ($j = 2; $j < $i; $j++) {
        if ( $i % $j === 0 ) {
            $primeNumber = false;
            break;
        }
    }

    if ($primeNumber) {
        echo "$i<br>";
    }
}