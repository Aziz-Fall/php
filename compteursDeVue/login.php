<?php

$erreur = null;
if(!empty($_POST['user']) && !empty($_POST['password']))
{
    if($_POST['user'] === 'John' && $_POST['password'] === 'doe')
    {
        session_start();
        $_SESSION['connecte'] = 1;
        header('location: dashboard.php');
    }
    else
        $erreur = 'Identifications incorrects';
}

require_once 'auth.php';

if(est_connecte())
{
    header('location: dashboard.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php if($erreur): ?>
        <div class="alert alert-danger">
            <?=$erreur ?>
        </div>
    <?php endif ?>
    <form action="login.php" method="post">
        <p>
            <label for="username">User name: </label>
            <input type="text" name="user" id="username">
        </p>
        <p>
            <label for="password">Password: </label>
            <input type="password" id="password" name="password">
        </p>
        <p>
            <input type="submit" value="S'authentifier">
        </p>
    </form>
</body>
</html>