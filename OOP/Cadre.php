<?php

require_once 'Employe.php';

class Cadre extends Employe {
    private $salaireBase;
    private $bonus;

    public function __construct($nom, $id, $poste, $salaireBase, $bonus) {
        parent::__construct($nom, $id, $poste);
        $this->salaireBase = $salaireBase;
        $this->bonus = $bonus;
    }

    public function calculerSalaire() {
        $this->salaire = $this->salaireBase + $this->bonus;
    }
}
