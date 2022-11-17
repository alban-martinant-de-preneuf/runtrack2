<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$letterCounter = 0;

for ($i = 0; isset($str[$i]); $i++) {
    $letterCounter += 1;
}

for ($i = 0; $i < $letterCounter - 1; $i++) {
    $tmp = $str[$i];
    $str[$i] = $str[$i + 1];
    $str[$i + 1] = $tmp;
}

echo $str;