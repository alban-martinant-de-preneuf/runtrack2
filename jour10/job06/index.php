<?php

$mySqli = new mysqli('localhost', 'root', '', 'jour09');

$request = $mySqli->query('SELECT COUNT(*) AS `Nombre d\'étudiants` FROM `etudiants`;');

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