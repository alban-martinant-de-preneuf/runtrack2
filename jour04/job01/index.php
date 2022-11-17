<?php

$count = 0;

foreach ($_GET as $el) {
    $count += 1;
}

echo "Le nombre d'argument GET envoyé est $count";