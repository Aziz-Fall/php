<?php 

require_once 'header.php';
$prix_parfum = null;
$prix_cornet = null;
$prix_supplement = null;
// ChecBox
$parfums = [
        'Fraise' => 4,
        'Chocolat' => 5,
        'Vanille' => 3
];

// Radio
$cornets = [
    'Pot' => 2,
    'Cornet' => 3   
];

// checBox
$supplements = [
        'Pépites de chocolat' => 1,
        'Chantily' => 0.5
];

if(isset($_GET['parfum']))
    $prix_parfum = prix_parfum($_GET['parfum'], $parfums);

if(isset($_GET['cornet']))
    $prix_cornet = prix_cornet($_GET['cornet'], $cornets);

if(isset($_GET['supplement']))
    $prix_supplement = prix_supplement($_GET['supplement'], $supplements);
?>
<h1>Composer votre glace.</h1>
<div class="form-group">
    <form action="/jeux.php" method="GET">
            <?php foreach($parfums as $parfum => $prix) : ?>
                <div class="checkbox">
                    <label>
                         <input type="checkbox" name="parfum[]"  value=" <?= $parfum ?> ">   
                         <?= $parfum ?> - <?= $prix ?> €
                    </label>
                    
                </div>
            <?php endforeach ?>
            <?php foreach($cornets as $cornet => $prix) : ?>
                <div class="checkbox">
                    <label>
                        <input type="radio" name="cornet[]"  value=" <?= $cornet ?>" id ="<?= $cornet ?>"> 
                        <?= $cornet ?> - <?= $prix ?> €
                    </label>
                </div>
            <?php endforeach ?>
            <?php foreach($supplements as $supplement => $prix) : ?>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="supplement[]"  value=" <?= $supplement ?> ">
                        <?= $supplement ?> - <?= $prix ?> €
                    </label>
                </div>
            <?php endforeach ?>
        <button type="submit" class="btn btn-primary">Composer ma glace</button>
    </form>
</div>
<p>le prix de parfum est : <strong><?= $prix_parfum ?></strong></p>
<p>le prix de cornet est : <strong><?= $prix_cornet ?></strong></p>
<p>le prix de supplement est : <strong><?= $prix_supplement ?></strong></p>
<pre>
<?=var_dump($_GET);?>
</pre>

<?php require_once 'footer.php' ?>