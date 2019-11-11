<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>contact</title>
</head>
<body>
    <h1>Merci de nous contacter.</h1>
    <p><a href="acceuil.php">Retour à l'acceuil</a></p>
    <footer>
        <?php require_once 'fonction.php' ?>
        <?php ajouter_vue(); ?>
        <?php $visit = nombres_vues(); ?>
Il  y a <?= $visit ?> visite<?php if($visit >= 1):?>s<?php endif;?> sur le site.
    </footer>
</body>
</html>