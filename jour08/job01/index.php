<?php

session_start();

if (!isset($_SESSION['nbvisites'])) $_SESSION['nbvisites'] = 0;

if (isset($_GET['reset'])) {
    session_destroy();
    header('Location: index.php');
    exit();
}

$_SESSION['nbvisites'] += 1;

?>

<form method="get">
    <input type="hidden" name="reset" value="true">
    <button type="submit">reset</button>
</form>

<h1><?php echo $_SESSION['nbvisites'] ?></h1>