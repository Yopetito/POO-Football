<?php

Class Equipe {
    private string $nom;
    private int $anneeCreation;
    private Pays $nomPays;
    private array $carrieres;

    public function __construct(string $nom, Pays $nomPays, int $anneeCreation) {
        $this->nom = $nom;
        $this->nomPays = $nomPays;
        $this->anneeCreation = $anneeCreation;
        $pays->addEquipe($this);
        $this->carrieres = [];
    }

    public function addPays(Joueur $joueur) {
        $this->joueurs[] = $joueur;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAnneeCreation()
    {
        return $this->anneeCreation;
    }

    public function setAnneeCreation($anneeCreation)
    {
        $this->anneeCreation = $anneeCreation;

        return $this;
    }

    public function addCarriere(Carriere $carriere){
        $this->carrieres[] = $carriere;
    }

    public function __toString() {
        return $this->nom;
    }
}