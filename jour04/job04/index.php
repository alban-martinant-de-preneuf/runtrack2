<style>
    table, th, td {
        border: 1px solid black;
    }
    form {
        margin-top: 30px;
        display: flex;
        flex-direction: column;
        width: 50vw;
    }
</style>

<table>
    <tr>
        <th>Argument</th>
        <th>Valeur</th>
    </tr>
    <?php foreach ($_POST as $key => $value): ?>
    <tr>
        <td><?php echo $key ?></td>
        <td><?php echo $value ?></td>
    </tr>
    <?php endforeach ?>
</table>

<form method="post">
    <input type="text" name="field1">
    <input type="text" name="field2">
    <input type="text" name="field3">
    <input type="submit">
</form>
