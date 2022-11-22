<?php

function stringToWordArray(string $str): array {
    $words = [];
    $word = '';
    for ($i=0; isset($str[$i]); $i++) { 
        if ($str[$i] !== ' ' ) {
            $word .= $str[$i];
        } else {
            $words[] = $word;
            $word = '';
        }
    }
    $words[] = $word;
    return $words;
}

function gras(string $str): string {
    $words = stringToWordArray($str);
    $upperLetters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $newString = '';
    foreach ($words as $word) {
        $isFirstCharUpper = false;
        for ($i=0; isset($upperLetters[$i]); $i++) {
            if ($word[0] === $upperLetters[$i]) {
                $isFirstCharUpper = true;
                break;
            }
        }
        if ($isFirstCharUpper) {
            $newString .= '<b>' . $word . '</b> ';
        } else {
            $newString .= $word . ' ';
        }
    }
    return $newString;
}

function cesar(string $str, int $decalage = 1): string {
    $alphabet = "abcdefghijklmnopqrstuvwxyz";
    $newIndice = NULL;
    for ($i = 0; isset($str[$i]); $i++) {
        for ($j = 0; isset($alphabet[$j]); $j++) {
            if ($str[$i] === $alphabet[$j]) {
                $newIndice = $j + $decalage;
                while ($newIndice > 25) {
                    $newIndice -= 26;
                }
                $str[$i] = $alphabet[$newIndice];
                break;
            }
        }
    }
    return $str;
}

function len(string $str): int {
    $count = 0;
    for ($i=0; isset($str[$i]) ; $i++) { 
       $count += 1;
    }
    return $count;
}

function plateforme(string $str): string {
    $newString = '';
    $words = stringToWordArray($str);
    foreach ($words as $word) {
        $endOfWord = $word[len($word) - 2] . $word[len($word) - 1];
        if ($endOfWord === "me") {
            $word .= "_";
        }
        $newString .= $word . ' ';
    }
    return $newString;
}

?>

<form>
    <input type="text" name="str">
    <select name="fonction" id="select-function">
        <option value="">--choisir une fonction--</option>
        <option value="gras">gras</option>
        <option value="cesar">cesar</option>
        <option value="plateforme">plateforme</option>
    </select>
    <button type="submit">transformer</button>
</form>

<?php 

if (isset($_GET["fonction"]) && $_GET["str"]) {
    switch ($_GET["fonction"]) {
        case "gras":
            echo gras($_GET["str"]);
            break;
        case "cesar":
            echo cesar($_GET["str"]);
            break;
        case "plateforme":
            echo plateforme($_GET["str"]);
            break;
    }
}

?>

