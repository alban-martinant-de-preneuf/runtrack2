<?php

function occurrences(string $str, string $char): int {
    $count = 0;
    for ($i=0; isset($str[$i]); $i++) { 
        if ($str[$i] === $char) {
            $count += 1;
        }
    }
    return $count;
}

echo occurrences("Bonjour", "o");