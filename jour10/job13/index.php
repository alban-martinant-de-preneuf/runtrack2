<?php

$mySqli = new mysqli('localhost', 'root', '', 'jour09');

$request = $mySqli->query('SELECT salles.nom AS `Nom de salle`, etage.nom AS `Nom d\'étage` FROM salles INNER JOIN etage ON salles.id_etage=etage.id;');

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