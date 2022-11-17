<?php $count = 0; ?>


<style>
    table, th, td {
        border: 1px solid black;
    }
</style>

<table>
    <tr>
        <th>Argument</th>
        <th>Valeur</th>
    </tr>
    <?php foreach ($_GET as $key => $value): ?>
    <tr>
        <td><?php echo $key ?></td>
        <td><?php echo $value ?></td>
    </tr>
    <?php endforeach ?>
</table>




