<?php

$mySqli = new mysqli('localhost', 'root', '', 'jour09');

$request = $mySqli->query('SELECT prenom AS prénom, nom, naissance AS `date de naissance` FROM `etudiants` WHERE naissance BETWEEN "1998-01-0" AND "2018-01-01";');

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
        while ($result !== NULL) {
            echo '<tr>';
            foreach ($result as $value) {
                echo '<td>' . $value . '</td>';
            }
            $result = $request->fetch_array(MYSQLI_ASSOC);
            echo '</tr>';
        }  ?>

    </tbody>

</table>