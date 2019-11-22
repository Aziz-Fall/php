<?php 
    function nav_item(string $lien, string $titre, string $link_class = ' '):string 
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

    function select(string $name , $value, array $option): string 
    {
        $html_options = [];
        foreach($option as $key => $option)
        {
            $attributes = ($key == $value) ? 'selected' : '';
            $html_options[] = "<option value='$key' $attributes>$option</option>";
        }
        return "<select class ='form-control' name=$name >".implode($html_options)."</select>";
    }

    function creneaux_html(array $creneaux): string 
    {
        if(empty($creneaux))
        return "Fermé";

        $phrase = [];

        foreach($creneaux as $creneau)
        {
            $phrase[] = "<strong>De {$creneau[0]}</strong>H / <strong>{$creneau[1]}</strong>H<br>";
        }
       
        return "Ouvert:<br>  ". implode(" ", $phrase);    
    }

    function in_creneaux(int $heure, array $creneaux): bool
    {
        foreach($creneaux as $creneau)
        {
            $debut = $creneau[0];
            $fin = $creneau[1];

            if($heure >= $debut AND $heure < $fin)
                return true;
        }

        return false;
    }

