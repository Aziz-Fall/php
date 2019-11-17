<?php 
    function nav_item(string $lien, string $titre, string $link_class = ' '): string 
    {
        $class = 'nav-item';

        if($_SERVER['SCRIPT_NAME'] === $lien)
             $class .= ' active';

        return <<<HTML
        <li class="$class">
            <a class="$link_class" href="$lien">$titre</a>
        </li>
HTML;

    }
    function nav_menu(string $link_class = '')
    {
        return nav_item('/index.php', 'Acceuil', $link_class) . nav_item('/contact.php', 'Contact', $link_class);
    }
?>