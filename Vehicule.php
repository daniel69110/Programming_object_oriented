<?php
namespace App;

abstract class Vehicule
{
    private string $marque;
    private string $modele;
    private int $annee;
    public function __construct(string $marque, string $modele, int $annee)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
    }

public function getMarque(): string {
    return $this->marque;
}
public function setMarque(string $marque):void{
    $this->marque = $marque;
}
public function getModele(): string {
    return $this->modele;
}
public function setModele(string $modele):void{
    $this->modele = $modele;
}
public function getAnnee(): int {
    return $this->annee;
}
public function setAnnee(int $annee):void{
    $this->annee = $annee;
}
public function start(): string{
    return "";
}
public function stop(): string{
    return "";
}
abstract public function afficherDetails(): string;

}
