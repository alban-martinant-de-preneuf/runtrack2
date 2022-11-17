<?php

$str = "Les choses que l'on possède finissent par nous posséder.";
$letterCounter = 0;

for ($i = 0; isset($str[$i]); $i++) {
    $letterCounter += 1;
}

for ( $i = $letterCounter - 1; $i >= 0; $i--) {
    echo $str[$i];
}
