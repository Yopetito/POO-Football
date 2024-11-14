<?php

class carriere {
    private Equipe $equipe;
    private Joueur $joueur;
    private int $anneeSaison;

    public function __construct(Equipe $equipe, Joueur $joueur, int $anneeSaison) {
        $this->equipe = $equipe;
        $this->joueur = $joueur;
        $this->anneeSaison = $anneeSaison;
        $equipe->addCarriere($this);
        $joueur->addCarriere($this);
    }

    public function getEquipe()
    {
        return $this->equipe;
    }

    public function setEquipe($equipe)
    {
        $this->equipe = $equipe;

        return $this;
    }

    public function getJoueur()
    {
        return $this->joueur;
    }

    public function setJoueur($joueur)
    {
        $this->joueur = $joueur;

        return $this;
    }

    public function getAnneeSaison()
    {
        return $this->anneeSaison;
    }

    public function setAnneeSaison($anneeSaison)
    {
        $this->anneeSaison = $anneeSaison;

        return $this;
    }

    public function getAge(){
        $today = new DateTime(); //date d'aujourd'hui
        $age = $today->diff($this->joueur->getDateDeNaissance()); //calculer la difference grace au DateTime
        return $age->y; //return l'age en 'y' years. (années)
    }

}