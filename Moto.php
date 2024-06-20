<?php
namespace App;
use App\Vehicule;

abstract class Moto extends Vehicule {
    protected string $typeGuidon;

    
    public function __construct(string $marque, string $modele, int $annee, string $typeGuidon) {
        parent::__construct($marque, $modele, $annee);
        $this->typeGuidon = $typeGuidon;
    }
    public function getTypeGuidon(): string {
        return $this->typeGuidon;
    }

    public function setTypeGuidon(string $typeGuidon):void{
        $this->typeGuidon = $typeGuidon;
    }

    public function afficherDetails(): string {
        return "";
    }
    abstract public function faireWheelie(): string;
}
