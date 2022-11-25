<?php

$mySqli = new mysqli('localhost', 'root', '', 'jour09');

$request = $mySqli->query('SELECT prenom AS Prénom, nom AS Nom, naissance AS Naissance  FROM etudiants WHERE sexe=\'Femme\';');

$result = $request->fetch_array(MYSQLI_ASSOC);

?>

<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>

<table>
    <thead>
        <tr>
            <?php foreach ($result as $key => $value) {
                echo '<th>' . $key . '</th>';
            } ?>

        </tr>
    </thead>
    <tbody>

        <?php
        do {
            echo '<tr>';
            foreach ($result as $key => $value) {
                echo '<td>' . $value . '</td>';
            }
            $result = $request->fetch_array(MYSQLI_ASSOC);
            echo '</tr>';
        } while ($result !== NULL) ?>

    </tbody>

</table>