<?php require_once  '..'.DIRECTORY_SEPARATOR.'come_back'.DIRECTORY_SEPARATOR.'header.php'; ?>
<?php
require_once 'Message.php';
require_once 'GuestBook.php';
$message = null;
$guestBook = null;
$succes = null;
$error = null;
if(!empty($_POST['userName']) and !empty($_POST['message']))
{
    if(isset($_POST['userName']) and isset($_POST['message']))
    {
        $date = new DateTime();
        $message = new Message(htmlspecialchars($_POST['userName']), htmlspecialchars($_POST['message']), $date);
        $errors = $message->getError();

        if($errors['userName'] !== null)
            $error .= "User name no valid: ".$errors['userName'];
        else
        {
            $succes = "Message sended";
            $guestBook = new GuestBook('data.txt');
            $guestBook->addMessage($message);
        }
        
    }
} 
?>

<?php if($error): ?>
    <div class="alert alert-danger">
        <?= $error ?>
    </div>
<?php endif ?>
<?php if($succes): ?>    
    <div class="alert alert-success">
        <?= $succes ?>
    </div>
<?php endif ?>
<h1>Livre d'or</h1>
<div class="row">
    <div class="col-md-6">
        <form action="" method="POST">
            <div class="form-group"> 
                    <input type="text" name="userName" placeholder="Votre pseudo">
            </div>
            <div class="form-group">
                    <textarea name="message" placeholder="Votre message"></textarea>
            </div>
            <button class="btn btn-primary">Envoyer</button>
        </form>
    </div>
</div>

<h2>Les Message:</h2>

<?php if(!empty($message) and !empty($guestBook)):?>
    <?php $data = $guestBook->getMessage() ?>
    <pre>
        <?php var_dump($data); ?>
    </pre>
    <?php foreach($data as $key => $d):?>
        <pre>
        <?php var_dump($d); ?>
    </pre>
        <?php var_dump(Message::fromJSON($d)) ?>
        <?php //$d->toHTML() ?>
    <?php endforeach ?>
<?php endif ?>

<?php require_once '..'.DIRECTORY_SEPARATOR.'come_back'.DIRECTORY_SEPARATOR.'footer.php'; ?>