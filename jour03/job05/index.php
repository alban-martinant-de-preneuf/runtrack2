<?php

$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$vowel = ["a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y"];
$consonent = ["b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z",
              "B", "C", "D", "F", "G", "H", "J", "K", "L", "M", "N", "P", "Q", "R", "S", "T", "V", "W", "X", "Z"];

$dic = [ "consonant" => 0, "vowel" => 0];

for ($i = 0; isset($str[$i]); $i++) {
    $isVowel = false;
    foreach ( $vowel as $letter ) {
        if ( $str[$i] === $letter ) {
            $dic["vowel"] += 1;
            $isVowel = true;
            break;
        }
    }
    if ( !$isVowel ) {
        foreach ( $consonent as $letter ) {
            if ( $str[$i] === $letter ) {
                $dic["consonant"] += 1;
            }
        }
    }
}

?>

<style>
    table, th, td {
        border: 1px solid black
    }
</style>

<table>
    <thead>
        <tr>
            <th>Consonnes</th>
            <th>Voyelles</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $dic["consonant"]; ?></td>
            <td><?php echo $dic["vowel"]; ?></td>
        </tr>
    </tbody>
</table>