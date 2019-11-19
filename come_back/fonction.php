<?php 
    function nav_item(string $lien, string $titre, string $link_class = ' '): string 
    {
        $class = 'nav-item';

        if($_SERVER['SCRIPT_NAME'] === $lien)
             $class .= ' active';

        return <<<HTML
        <li class="$class">
            <a class="$link_class" href="$lien">$titre</a>fonction.php on line 31
        </li>
HTML;

    }
    function nav_menu(string $link_class = '')
    {
        return nav_item('/index.php', 'Acceuil', $link_class) . nav_item('/contact.php', 'Contact', $link_class);
    }

    function prix_parfum(array $par, array $parfum) 
    {
        $prix = 0;
            for($i = 0; $i < sizeof($par); $i++)
                if(isset($par[$i]) && array_key_exists($par[$i], $parfum))
                         $prix += (int)$parfum[$par[$i]];

        return $prix;
    }

    function prix_cornet(array $cor, array $cornet)
    {
        $prix = 0;
            for($i = 0; $i < sizeof($cor); $i++)
                if(isset($cor[$i]) && array_key_exists($cor[$i], $cornet))
                         $prix += (int)$cornet[$cor[$i]];

        return $prix;
    }

    function prix_supplement(array $sup, array $supplement)
    {
        $prix = 0;
            for($i = 0; $i < sizeof($sup); $i++)
                if(isset($sup[$i]) && array_key_exists($sup[$i], $supplement))
                         $prix += $supplement[$sup[$i]];

        return $prix;
    }
?>