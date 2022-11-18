<style>
    form {
        display: flex;
        flex-direction: column;
        width: 200px;
    }
</style>

<form method="get">
    <input type="text" name="number" placeholder="Entrez un nombre">
    <input type="submit">
</form>

<?php
if (isset($_GET["number"])) {
    if ((int)$_GET["number"] % 2 === 0) {
        echo "Nombre pair";
    } else {
        echo "Nombre impair";
    }
}

