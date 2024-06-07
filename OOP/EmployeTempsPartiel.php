<?php

require_once 'Employe.php';

class EmployeTempsPartiel extends Employe {
    private $tauxHoraire;
    private $heuresTravaillees;

    public function __construct($nom, $id, $poste, $tauxHoraire, $heuresTravaillees) {
        parent::__construct($nom, $id, $poste);
        $this->tauxHoraire = $tauxHoraire;
        $this->heuresTravaillees = $heuresTravaillees;
    }

    public function calculerSalaire() {
        $this->salaire = $this->tauxHoraire * $this->heuresTravaillees;
    }
}

?>