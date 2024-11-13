<?php

Class Pays {
    private string $nomPays;
    private array $joueurs;
    private array $equipes;

    public function __construct(string $nomPays) {
        $this->nomPays = $nomPays;
        $this->joueurs = [];
        $this->equipes = [];
    }

    public function getNomPays()
    {
        return $this->pays;
    }
 
    public function setNomPays($NomPays)
    {
        $this->nomPays = $nomPays;

        return $this;
    }

    public function addJoueurs(Joueur $joueur) {
        $this->joueurs[] = $joueur;
    }

    public function addEquipe(Equipe $equipe) {
        $this->equipes[] = $equipe;
    }

    public function afficherEquipes() {
        $result = "Ces Equipes provienne de ".$this." : <br>";
        foreach($this->equipes as $equipe) {
            $result .= "$equipe<br>";
        }
        return $result;
    }

    public function afficherJoueurs() {
        $result = "Ces joueurs provienne de ".$this." : <br>";
        foreach($this->joueurs as $joueur) {
            $result .= "$joueur<br>";
        }
        return $result;
    }

    public function __toString() {
        return $this->nomPays;
    }
}