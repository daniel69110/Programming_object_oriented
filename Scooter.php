<?php
namespace App;

use App\Moto;

final class Scooter extends Moto {
    private int $capaciteStockage;

    public function __construct(string $marque, string $modele, int $annee, string $typeGuidon, string $suspension, int $capaciteStockage) {
        parent::__construct($marque, $modele, $annee, $typeGuidon);
        $this->capaciteStockage = $capaciteStockage;
    }

    public function getcapaciteStockage(): int {
        return $this->capaciteStockage;
    }

    public function setcapaciteStockage(int $capaciteStockage):void{
        $this->capaciteStockage = $capaciteStockage;
    }
    public function rangement(): string {
        return "";
    }
    public function faireWheelie(): string {
        return"";
    }

    public function afficherDetails(): string {
        return "";
    }
}
