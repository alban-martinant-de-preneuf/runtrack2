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

$insideLine = '';
$before = '';

for ($i = 0; $i < (int)$_GET['width'] / 2 - 1; $i++) {
    $before = $before . ' ';
}

echo "<pre>";

for ($i = 0; $i < $_GET["width"] / 2; $i++) {
    echo $before . '/' . $insideLine . "\\<br>";
    if ($i < $_GET["width"] / 2 - 1 ) {
        $insideLine = $insideLine . '__';
    }
    $before = substr($before, 0, -1);
}

$insideSpace = '';

for ($i = 0; $i < $_GET['width'] - 2; $i++) {
    $insideSpace = $insideSpace . ' ';
}

for ( $i = 0; $i < $_GET["height"]; $i++ ) {
    if ($i < $_GET["height"] - 1) {
        echo '|' . $insideSpace . '|<br>';
    } else {
        echo '|' . $insideLine . '|<br>';
    }
}

echo "<pre>";

?>
