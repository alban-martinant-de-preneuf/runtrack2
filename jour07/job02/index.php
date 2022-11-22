<?php

function bonjour($jour) {
    echo $jour ? "Bonjour" : "Bonsoir";
}

bonjour(true);
bonjour(false);