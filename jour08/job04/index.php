<?php

if (isset($_GET['prenom'])) {
    setcookie('prenom', $_GET['prenom'], time() + 3600);
    header('Location: .');
    exit();
}

if (isset($_GET['deco'])) {
    setcookie('prenom');
    header('Location: .');
    exit();
}

?>

<?php if (isset($_COOKIE['prenom'])) : ?>
    Bonjour <?php echo $_COOKIE['prenom']; ?>
    <form>
    <button name="deco">deco</button>
    </form>
<?php else : ?>
    <form>
        <input type="text" name="prenom" placeholder="prénom">
        <button type="submit">connexion</button>
    </form>
<?php endif ?>