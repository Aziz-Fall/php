<?php

$bithDate = null;
//Demander à l'utilisateur sa date de naissance (select 2010-1919)*
//Persister la date de naissance dans un cookie
//Si l'utilisateur est asser agé lui montrer le contenu
//Sinon on affiche un message d'erreur
if(!empty($_COOKIE['bithDate']))
{
    $birthDate = (int) $_COOKIE['birthDate'];
}

if(!empty($_POST['bithDate']) && isset($_POST['bithDate']))
{
    setcookie('bithDate', $_POST['bithDate']);
    $_COOKIE['bithDate'] = $_POST['bithDate'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php if($bithDate <= 1998): ?>
    <h1>Bonjour <?='Ah vous êtes né en '.htmlspecialchars($bithDate).'. Donc Vous êtes Majeur et surprise voici le contenu de la page.'?></h1>
    <a href="profil.php">Se déconnecter</a>
    <?php else: ?>
    <form action="" method="post">
        <div class="form-group">
            <input type="number" name="bithDate" placeholder="Date de Naissance" max ="2010" min="1919">
        </div>
        <button type="submit">Se connecter</button>
    </form>
    <?php endif; ?>
</body>
</html>