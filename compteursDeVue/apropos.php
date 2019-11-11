<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>À propos</title>
</head>
<body>
    <h1>À propos du site.</h1>
    <p><a href="acceuil.php">Retour à l'acceuil</a></p>
    <footer>
        <?php require_once 'fonction.php' ?>
        <?php ajouter_vue(); ?>
        <?php $visit = nombres_vues(); ?>
Il  y a <?= $visit ?> visite<?php if($visit >= 1):?>s<?php endif;?> sur le site.
    </footer>
</body>
</html>