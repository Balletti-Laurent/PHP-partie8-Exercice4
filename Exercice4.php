<?php
if (isset($_POST['login']) && isset($_POST['password'])) {
    setcookie('login', htmlspecialchars($_POST['login']), time() + 60 * 60 * 24);
    setcookie('password', htmlspecialchars($_POST['password']), time() + 60 * 60 * 24);
}
?>
<!DOCTYPE html>
<html>
    <head lang="fr">
        <meta charset="utf-8">
        <title>Exercice 4</title>
    </head>
    <body>
        <div>Mon cookie a pour login : <?= $_COOKIE['login']; ?> et pour password <?= $_COOKIE['password']; ?></div>
    </body>
</html>