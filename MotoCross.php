<?php
namespace App;

use App\Moto;

final class Motocross extends Moto {
    private string $suspension;

    public function __construct(string $marque, string $modele, int $annee, string $typeGuidon, string $suspension) {
        parent::__construct($marque, $modele, $annee, $typeGuidon);
        $this->suspension = $suspension;
    }

    public function getSuspension(): string {
        return $this->suspension;
    }

    public function setSuspension(string $suspension):void {
        $this->suspension = $suspension;
    }
    public function sauter(): string {
        return "";
    }
    public function faireWheelie(): string {
        return"";
    }

    public function afficherDetails(): string {
        return "";
    }
}
