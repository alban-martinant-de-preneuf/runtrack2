<?php

$count = 0;
$emptyEl = 0;

foreach ($_POST as $el) {
    $count += 1;
    if ($el == "") {
        $emptyEl += 1;
    }
}

$strEmptyElements = ($emptyEl > 0) ? " (dont $emptyEl vide(s))" : NULL;
 
echo 'Le nombre d\'argument POST envoyé est ' . $count . $strEmptyElements . '.';

?>

<form method="post">
    <input type="text" name="field1">
    <input type="text" name="field2">
    <input type="text" name="field3">
    <input type="submit">
</form>