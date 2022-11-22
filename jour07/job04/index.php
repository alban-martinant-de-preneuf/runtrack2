<?php

function calcule(int $a, string $operation, int $b): int|float {
    if ($operation === "+") {
        return $a + $b;
    } elseif ($operation === "-") {
        return $a - $b;
    } elseif ($operation === "*" || $operation === "x") {
        return $a * $b;
    } elseif ($operation === "/" || $operation === "÷") {
        return $a / $b;
    } elseif ($operation === "%") {
        return $a % $b;
    }
}


echo "test : <br>";
echo calcule(7, "*", 3) . '<br>';
echo calcule(7, "/", 3) . '<br>';
echo calcule(7, "+", 3) . '<br>';
echo calcule(7, "%", 3) . '<br>';