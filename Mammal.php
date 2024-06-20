<?php

abstract class Mammal extends Animal {
    protected string $furColor;

    public function __construct(string $name, int $age, string $furColor) {
        parent::__construct($name, $age);
        $this->furColor = $furColor;
    }

    // Getter for furColor
    public function getFurColor(): string {
        return $this->furColor;
    }

    // Setter for furColor
    public function setFurColor(string $furColor): void {
        $this->furColor = $furColor;
    }
}
?>