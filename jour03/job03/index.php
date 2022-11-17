<?php

$str = "I'm sorry Dave I'm afraid I can't do that";
$vowel = ["a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y"];

for ($i = 0; isset($str[$i]); $i++) {
    foreach ( $vowel as $letter ) {
        if ( $str[$i] === $letter ) {
            echo "$str[$i]";
        }
    }
}
