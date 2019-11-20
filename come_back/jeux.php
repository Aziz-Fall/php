<?php 

require_once 'header.php';
$ingredients = [];
$total = 0;
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

foreach(['parfum', 'supplement'] as $name)
{
    if(isset($_GET[$name])) 
    {
        foreach($_GET[$name] as $value)
        {   
            $list = $name.'s';
            if(isset($$list[$value]))
            {
                $total += $$list[$value];
                $ingredients[] = $value;
            }
        }
    }
}

if(isset($_GET['cornet']))
{
    $cornet = $_GET['cornet'];
    if(isset($cornets[$cornet]))
    {
        $total += $cornets[$cornet];
        $ingredients[] = $cornet;
    }
}

?>
<h1>Composer votre glace.</h1>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Votre glace</h5>
            </div>
            <ul>
                <?php foreach($ingredients as $ingredient): ?>
                    <li><?= $ingredient ?></li>
                <?php endforeach; ?>
            </ul>
            <p>
                <strong>Prix: </strong><?= $total ?> €
            </p>
        </div>
    </div>
    <div class="col-md-8">
        <form action="/jeux.php" method="GET">
                <h2>Choissisez vos parfums</h2>
                <?php foreach($parfums as $parfum => $prix) : ?>
                    <div class="checkbox">
                        <label>
                            <?= checkbox('parfum', $parfum, $_GET) ?>   
                            <?= $parfum ?> - <?= $prix ?> €
                        </label>
                        
                    </div>
                <?php endforeach ?>
                <h2>Choissisez un cornet</h2>
                <?php foreach($cornets as $cornet => $prix) : ?>
                    <div class="radio">
                        <label>
                            <?= radio('cornet', $cornet, $_GET) ?>  
                            <?= $cornet ?> - <?= $prix ?> €
                        </label>
                    </div>
                <?php endforeach ?>
                <h2>Choissisez vos supplements</h2>
                <?php foreach($supplements as $supplement => $prix) : ?>
                    <div class="checkbox">
                        <label>
                        <?= checkbox('supplement', $supplement, $_GET) ?> 
                            <?= $supplement ?> - <?= $prix ?> €
                        </label>
                    </div>
                <?php endforeach ?>
            <button type="submit" class="btn btn-primary">Composer ma glace</button>
        </form>
    </div>
</div>

<?php require_once 'footer.php' ?>