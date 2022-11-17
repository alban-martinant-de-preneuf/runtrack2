<style>
    form {
        display: flex;
        flex-direction: column;
        width: 200px;
    }
</style>

<form method="post">
    <input type="text" name="username" placeholder="Nom d'utilisateur">
    <input type="password" name="password" placeholder="mot de passe">
    <input type="submit">
</form>

<?php
$response = "";

if (isset($_POST["username"]) && isset($_POST["password"])) {
    if ($_POST["username"] === "John" && $_POST["password"] === "Rambo") {
        $response = "C'est pas ma guerre";
    } else {
        $response = "Votre pire cauchemar";
    }
}

echo $response;
?>