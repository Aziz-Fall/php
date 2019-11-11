<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Cardo:400,400i,700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css">
    <title>Blog</title>
</head>
<body>
    <header class="topBar">
        <nav>
            <a href="acceuil.php">Acceuil</a>
            <a href="article.php" class="active">Articles</a>
            <a href="contact.php">Contact</a>
            <a href="apropos.php">À propos</a>
        </nav>
        <div class="social">
            <a href="#"><img src="img/facebook.png" alt=""></a>
            <a href="#"><img src="img/twitter.png" alt=""></a>
        </div>
    </header>
    <div class="banniere"></div>
        <div class="main">
            <div class="section">
                <article>
                    <div class="chat">
                        <img src="img/chat.png" alt="imgChat">
                    </div>
                    <div class="actu">
                        <div class="datePublication">
                            <p>Publié le 14 juin 2018</p>
                        </div>
                        <div class="contentArticle">
                            <h2>Le Statut de Freelance</h2>
                            <p>
                                Dans un précédent podcast on s'était intéressé au métier 
                                de développeur web de manière générale mais aujourd'hui je
                                voulais me focaliser sur le status de freelance en particulier.
                                Plutôt de faire une longue explication sur le statut, mon expér...
                            </p>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="chat">
                        <img src="img/chat.png" alt="imgChat">
                    </div>
                    <div class="actu">
                        <div class="datePublication">
                            <p>Publié le 14 juin 2018</p>
                        </div>
                        <div class="contenuArticle">
                            <h2>Le Statut de Freelance</h2>
                            <p>
                                Dans un précédent podcast on s'était intéressé au métier 
                                de développeur web de manière générale mais aujourd'hui je
                                voulais me focaliser sur le status de freelance en particulier.
                                Plutôt de faire une longue explication sur le statut, mon expér...
                            </p>
                        </div>
                    </div>
                </article>                      
                <article>
                    <div class="chat">
                        <img src="img/chat.png" alt="imgChat">
                    </div>
                    <div class="actu">
                        <div class="datePublication">
                            <p>Publié le 14 juin 2018</p>
                        </div>
                        <div class="contenuArticle">
                            <h2>Le Statut de Freelance</h2>
                            <p>
                                Dans un précédent podcast on s'était intéressé au métier 
                                de développeur web de manière générale mais aujourd'hui je
                                voulais me focaliser sur le status de freelance en particulier.
                                Plutôt de faire une longue explication sur le statut, mon expér...
                            </p>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="chat">
                        <img src="img/chat.png" alt="imgChat">
                    </div>
                    <div class="actu">
                        <div class="datePublication">
                            <p>Publié le 14 juin 2018</p>
                        </div>
                        <div class="contenuArticle">
                            <h2>Le Statut de Freelance</h2>
                            <p>
                                Dans un précédent podcast on s'était intéressé au métier 
                                de développeur web de manière générale mais aujourd'hui je
                                voulais me focaliser sur le status de freelance en particulier.
                                Plutôt de faire une longue explication sur le statut, mon expér...
                            </p>
                        </div>
                    </div>
                </article>
            </div>
            <aside>
                <div class="contentAside">
                    <h1>Catégories</h1>
                    <div class="lien">
                        <a href="#">Hight-Tech</a>
                        <a href="#">Concentré du Web</a>
                        <a href="#">À propos</a>
                        <a href="#">Astuces pour développeurs</a>
                        <a href="#">Ressources</a>
                        <a href="#">Bonnes pratiques</a>
                    </div>  
                </div>
            <div class="separateur">
                <img src="img/Rectangle.png" alt="rectangle">
            </div>
            <div class="contentAside">
                    <h1>Catégories</h1>
                    <div class="lien">
                        <a href="#">Hight-Tech</a>
                        <a href="#">Concentré du Web</a>
                        <a href="#">À propos</a>
                        <a href="#">Astuces pour développeurs</a>
                        <a href="#">Ressources</a>
                        <a href="#">Bonnes pratiques</a>
                    </div>  
                </div>
            </aside>
        </div>
        <footer>
        <?php require_once 'fonction.php' ?>
        <?php ajouter_vue(); ?>
        <?php $visit = nombres_vues(); ?>
Il  y a <?= $visit ?> visite<?php if($visit >= 1):?>s<?php endif;?> sur le site.
    </footer>
</body>
</html>