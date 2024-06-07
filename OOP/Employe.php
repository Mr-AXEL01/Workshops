<?php

abstract class Employe {
    protected $nom;
    protected $id;
    protected $poste;
    protected $salaire;

    public function __construct($nom, $id, $poste) {
        $this->nom = $nom;
        $this->id = $id;
        $this->poste = $poste;
    }

    abstract public function calculerSalaire();

    public function getNom() {
        return $this->nom;
    }

    public function getId() {
        return $this->id;
    }

    public function getPoste() {
        return $this->poste;
    }

    public function getSalaire() {
        return $this->salaire;
    }
}


?>