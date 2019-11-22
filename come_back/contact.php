<?php 
$title = "Nous Contacter";
$nav = "contact";

require_once 'config.php';
require_once 'header.php'; 
date_default_timezone_set('Europe/Paris');
$jour = (int)(htmlspecialchars($_GET['jour']) ?? date('N') - 1);
$heure = (int)(htmlspecialchars($_GET['heure']) ?? date('G'));
$ouvert = in_creneaux($heure, CRENEAUX[$jour]);
$color = null;
$color = ($ouvert) ? "green" : "red";

?>

<div class="row">
    <div class="col-md-8">
        <h1>Nous contacter.</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat alias minima eum. Rem veritatis nostrum 
            tenetur, facilis reprehenderit minus quas rerum recusandae quasi officiis omnis aliquam, molestiae commodi sit? Quo!
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam natus, nulla quam quasi mollitia ratione,
            nisi alias voluptatum nobis autem soluta eaque, iusto nam minus animi eos quibusdam! Veritatis, dolorem.
        </p>
    </div>
    <div class="col-md-4">
        <h2>Horaires d'ouvertures</h2>
        <?php if($ouvert): ?>
            <div class="alert alert-success">
                Le magasin sera ouvert
            </div>
        <?php else: ?>
            <div class="alert alert-danger">
                Le magasin sera fermé
            </div>
        <?php endif ?>
        <form action="" method="GET">
            <div class="form-group">
                <?= select('jour', $jour, JOURS) ?>
            </div>
            <div class="form-group">
                <input class="form-control" type="number" name="heure" value="<?= $heure ?>" id="heure"> 
            </div>
            <button class="btn btn-primary" type="submit">Voir le magasin ouvert</button>
        </form>
        <ul>
            <?php foreach(JOURS as $key => $jour): ?>
            <li>
                <strong><?= $jour ?> </strong> 
                <?= creneaux_html(CRENEAUX[$key]);?></li>
            <?php endforeach ?>
        </ul>
    </div>
</div>

<?php require_once 'footer.php'; ?>