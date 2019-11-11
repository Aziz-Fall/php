<?php
session_start();
$user = null;
if(!empty($_GET['action']) && isset($_GET['action']))
{
    setcookie('user', '', time() - 10);
}
//Demander à l'utilisateur sa date de naissance (select 2010-1919)*
//Persister la date de naissance dans un cookie
//Si l'utilisateur est asser agé lui montrer le contenu
//Sinon on affiche un message d'erreur
if(!empty($_POST['userName']) && isset($_POST['userName']))
{
    setcookie('user', htmlspecialchars($_POST['userName']));
    $_COOKIE['user'] = htmlspecialchars($_POST['userName']);
    $user = $_COOKIE['user'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Debug</h1>
    <pre>
    <?php var_dump($_SESSION) ?>
    </pre>
    <?php if($user != null): ?>
    <h1>Bonjour <?=strtoupper($user)?>. Vous êtes connecté.</h1>
    <p><a href="cookie.php?action=deconnect">Se déconnecter</a></p>
    <?php else: ?>
    <form action="" method="post">
        <label for="username">User Name:</label>
        <input type="text" name="userName" id="username">
        <input type="submit" name="connect" value="Se connecter">
    </form>
    <?php endif; ?>
</body>
</html>