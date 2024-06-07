<?php

require_once 'Employe.php';

class EmployeTempsPlein extends Employe {
    private $salaireFixe;

    public function __construct($nom, $id, $poste, $salaireFixe) {
        parent::__construct($nom, $id, $poste);
        $this->salaireFixe = $salaireFixe;
    }

    public function calculerSalaire() {
        $this->salaire = $this->salaireFixe;
    }
}