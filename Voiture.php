<?php
namespace App;
use App\Vehicule;


final class Voiture extends Vehicule{
    private int $nombrePorte;

    public function __construct(string $marque, string $modele, int $annee, int $nombrePorte) {
        parent::__construct($marque, $modele, $annee);
        $this->nombrePorte = $nombrePorte;
    }
    public function getNombrePorte(): int {
        return $this-> nombrePorte;
    }

    public function setNombrePorte(int  $nombrePorte):void{
        $this-> nombrePorte =  $nombrePorte;
    }

abstract public function afficherDetails(): string;
}