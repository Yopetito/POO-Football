<?php

Class Joueur {
private string $nom;
private string $prenom;
private DateTime $dateDeNaissance;
private Pays $nomPays;
private array $carrieres;

    public function __construct(string $nom, string $prenom, string $dateDeNaissance, Pays $nomPays) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateDeNaissance = new DateTime($dateDeNaissance);
        $this->nomPays = $nomPays;
        $pays->addJoueurs($this);
        $this->carrieres = [];
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

    public function getPrenom()
    {
    return $this->prenom;
    }

    public function setPrenom($prenom)
    {
    $this->prenom = $prenom;

    return $this;
    }

    public function getDateDeNaissance()
    {
    return $this->dateDeNaissance;
    }

    public function setDateDeNaissance($dateDeNaissance)
    {
    $this->dateDeNaissance = $dateDeNaissance;

    return $this;
    }

    public function addCarriere(Carriere $carriere){
        $this->carrieres[] = $carriere;
    }

    public function afficherOrigine() {
        return "Le joueur ".$this." viens de: ".$this->pays;
    }

    public function afficherCarriere() {
        $result = "le joueur ".$this." a la carriere suivante: <br>";
        foreach($this->carrieres as $carriere){
            $result .= $carriere->getEquipe()." >> ".$carriere->getAnneeSaison()."<br>";
        }
        return $result;
    }

    public function __toString() {
        return $this->prenom." ".$this->nom;
    }
}