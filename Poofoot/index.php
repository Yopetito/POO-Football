<?php

spl_autoload_register(function ($class_name) {
    require "classes/" . $class_name . '.php';
});

//================PAYS=============
$france = new Pays("France");
$espagne = new Pays("Espagne");
$allemagne = new Pays("Allemagne");
$portugal = new Pays("Portugal");
$angleterre = new Pays("Angleterre");

//================Equipes de football=============
$real = new Equipe("Real madrid", $espagne, 1975);
$psg = new Equipe("Paris saint germain", $espagne, 1978);
$liverpool = new Equipe("Liverpool", $angleterre, 1961);
$barcelone = new Equipe("Barcelone", $espagne, 1967);

//=============JOUEURS==================
$kylian = new Joueur("MBAPPE", "Kylian", "1995-05-01", $france);
$cristiano = new Joueur("RONALDO", "Cristiano", "1991-07-01", $portugal);
$ramos = new Joueur("RAMOS", "Sergio", "1992-04-07", $espagne);
$thierry = new Joueur("HENRY", "Thierry", "1990-08-01", $france);

//Carrieres
$carriereKylian = new Carriere($psg, $kylian, 2017);
$carriereKylian = new Carriere($real, $kylian, 2024);

echo $kylian->afficherCarriere();
