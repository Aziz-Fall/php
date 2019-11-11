<?php
require_once 'auth.php';
var_dump(est_connecte());
forcer_utilisateur_connecte();
require_once 'fonction.php';
$annee = (int) date('Y');
$total = nombres_vues();
$annee_selectionnee = empty($_GET['annee'])? null : (int)$_GET['annee'];
$mois = [
        '01' => 'Janvier',
        '02' => 'Février',
        '03' => 'Mars',
        '04' => 'Avril',
        '05' => 'Mai',
        '06' => 'Juin',
        '07' => 'Juillet',
        '08' => 'Aout',
        '09' => 'Septembre',
        '10' => 'Octobre',
        '11' => 'Novembre',
        '12' => 'Decembre'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <div class="row">
        <div class="col-md-4">
            <div class="list-group">
                <?php for($i = 0; $i < 5; $i++):?>
                    <a href="dashboard.php?annee=<?=$annee - $i?>" style="text-decoration: none; margin: 15px;" class="list-group-item"><?=$annee - $i?></a> <br>  
                <?php if($annee - $i === $annee_selectionnee):?>
                <?php foreach($mois as $j => $nom):?>
                    <a href="dashboardbord.php?annee=<?=$annee_selectionnee?>&mois=<?= $j ?>"><?=$nom?><br></a>
                <?php endforeach; ?>
                <?php endif; ?>
            </div> 
                <?php endfor;?>   
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <strong style = "font-size : 10em"><?= $total ?></strong><br>
                    Visite<?= ($total > 1) ? 's' : '' ?> total.
                </div>
            </div>
        </div>
    </div>
</body>
</html>