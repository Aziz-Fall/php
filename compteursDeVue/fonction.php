<?php

function ajouter_vue()
{
    $file = 'compteur';
    $file_journalier = $file.'-'. date('Y-m-d');
    incrementer_compteur($file);
    incrementer_compteur($file_journalier);

}

function incrementer_compteur(string $file): void 
{
    $compteur = 1;

    if(file_exists($file))
        $compteur += (int) file_get_contents($file);

    file_put_contents($file, $compteur);
}

function nombres_vues(): int
{
    $file = 'compteur';
    $compteur = (int) file_get_contents($file);
    return $compteur;
}