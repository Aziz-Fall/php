<?php
$title = "News Letters";
$error = enregister_email($_POST['mail']);
?>

<h1>S'inscrire aux news Letters</h1>
<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis aperiam a vero! Rerum ex dolore numquam consequatur a. Sit volupta
    s perferendis odio aliquid. Saepe, dolor culpa! Nihil, vero suscipit? Sequi?
</p>

<?php if($error) : ?>
    <div class="alert alert-danger">
        <?= $error ?>
    </div>
<?php else: ?>
    <div class="alert alert-success">
        Votre email a été bien enregistré.
    </div>
<?php endif ?>
<form action="" method = "POST" class="form-inline">
    <div class="form-group">
        <input type="mail" name="mail" placeholder="qldqk@sdkfksd.com" required class="form-control" value="<?= htmlspecialchars($_POST['mail']) ?>">
    </div>
         <button class="btn btn-primary" type="submit">S'inscrire</button>
</form>
