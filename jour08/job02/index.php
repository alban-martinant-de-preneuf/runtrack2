<?php

if (!isset($_COOKIE['nbvisites'])) {
    setcookie('nbvisites', '0', time() + 3600);
}

if (isset($_GET['reset'])) {
    setcookie('nbvisites', '1', time() + 3600);
    header('Location: index.php');
    exit();
}

$visites = (int)$_COOKIE['nbvisites'] + 1;

setcookie('nbvisites', (string)$visites, time() + 3600);

?>

<form method="get">
    <input type="hidden" name="reset" value="true">
    <button type="submit">reset</button>
</form>

<h1><?php echo $_COOKIE['nbvisites'] ?></h1>