<style>
    form {
        display: flex;
        flex-direction: column;
        width: 200px;
    }
</style>

<form method="get">
    <input type="text" name="width" placeholder="largeur">
    <input type="text" name="height" placeholder="hauteur">
    <input type="submit">
</form>

<?php

if (isset($_GET["width"]) || isset($_GET["height"])) {

    if ($_GET["width"] % 2 === 0) {
        $insideLine = '';
        $before = '';
        
        echo "<pre>";
    
        for ($i = 0; $i < $_GET["width"] / 2; $i++) {
            for ($j = 0; $j < ($_GET["width"] / 2) - 1 - $i; $j++) {
                $before .= ' ';
            }
            echo $before . '/' . $insideLine . "\\<br>";
            if ($i < $_GET["width"] / 2 - 1) {
                $insideLine .= '__';
            }
            $before = '';
        }
    
        $insideSpace = '';
    
        for ($i = 0; $i < $_GET['width'] - 2; $i++) {
            $insideSpace .= ' ';
        }
    
        for ($i = 0; $i < $_GET["height"]; $i++) {
            if ($i < $_GET["height"] - 1) {
                echo '|' . $insideSpace . '|<br>';
            } else {
                echo '|' . $insideLine . '|<br>';
            }
        }
        echo "</pre>";
    } else {
        echo "La largeur doit être un nombre paire.";
    }

} else {
    echo "Entrez une largeur paire et une hauteur quelconque";
}
?>