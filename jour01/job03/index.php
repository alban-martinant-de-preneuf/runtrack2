<?php

$myBool = true;
$myInt = 42;
$myString = "Hello";
$myFloat = 42.7;

?>

<table>
    <thead>
        <tr>
            <td>type</td>
            <td>nom</td>
            <td>valeur</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Boolean</td>
            <td>myBool</td>
            <td><?php echo $myBool ?></td>
        </tr>
        <tr>
            <td>Integer</td>
            <td>myInt</td>
            <td><?php echo $myInt ?></td>
        </tr>
        <tr>
            <td>String</td>
            <td>myString</td>
            <td><?php echo $myString ?></td>
        </tr>
        <tr>
            <td>Float</td>
            <td>myFloat</td>
            <td><?php echo $myFloat ?></td>
        </tr>
    </tbody>
</table>
    

