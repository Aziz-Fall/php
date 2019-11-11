<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Acceuil</title>
</head>
<body>
    <h1>Bienvenu à l'acceuil.</h1>
    <p><a href="article.php">Retour dans l'article</a></p>
    <footer>
        <?php require_once 'fonction.php' ?>
        <?php ajouter_vue(); ?>
        <?php $visit = nombres_vues(); ?>
Il  y a <?= $visit ?> visite<?php if($visit >= 1):?>s<?php endif;?> sur le site.
    </footer>
</body>
</html>