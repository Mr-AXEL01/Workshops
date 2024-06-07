<?php
require_once 'EmployeTempsPlein.php';
require_once 'EmployeTempsPartiel.php';
require_once 'Cadre.php';

$employe1 = new EmployeTempsPlein("Alice", 1, "Développeur", 3000);
$employe2 = new EmployeTempsPartiel("Bob", 2, "Assistant", 15, 20);
$employe3 = new Cadre("Charlie", 3, "Directeur", 5000, 1000);

$employe1->calculerSalaire();
$employe2->calculerSalaire();
$employe3->calculerSalaire();

echo "M." . $employe1->getNom() . ", travaille comme " . $employe1->getPoste() . ",et son salaire est : " . $employe1->getSalaire() . "\n";
echo "M." . $employe2->getNom() . ", travaille comme " . $employe2->getPoste() . ",et son salaire est : " . $employe2->getSalaire() . "\n";
echo "M." . $employe3->getNom() . ", travaille comme " . $employe3->getPoste() . ",et son salaire est : " . $employe3->getSalaire() . "\n";

