<?php

session_start();

if (isset($_GET['prenom'])) {
    $_SESSION['users'][] = $_GET['prenom']; 
}

if (isset($_GET['reset'])) {
    $_SESSION['users'] = [];
    header('Location: .');
    exit();
}

?>

<form>
    <input type="text" name="prenom">
    <button type="submit">submit</button>
    <button name="reset">reset</button>
</form>

<ul>
    <?php foreach($_SESSION['users'] as $prenom) {
        echo '<li>';      
        echo $prenom;
        echo '</li>';
    }
    ?>
</ul>

