<?php 
    function nav_item(string $lien, string $titre, string $link_class = ' '):string 
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

    function nav_menu(string $link_class = ''):string
    {
        return nav_item('/index.php', 'Acceuil', $link_class) . nav_item('/contact.php', 'Contact', $link_class);
    }

    function checkbox(string $name, string $value, array $data):string 
    {
        $attributes = '';

        if(isset($data[$name]) && in_array($value, $data[$name]))
             $attributes .= 'checked';

        return <<<HTML
            <input type = "checkbox" name="{$name}[]" value="$value" $attributes>
HTML;
    }

    function radio(string $name, string $value, array $data):string 
    {
        $attributes = '';

        if(isset($data[$name]) && ($value == $data[$name]))
             $attributes .= 'checked';

        return <<<HTML
            <input type = "radio" name="$name" value="$value" $attributes>
HTML;
    }
?>