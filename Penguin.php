
<?php

final class Penguin extends Bird{
    private float $swimSpeed;

public function __construct(float $swimSpeed) {
$this->swimSpeed = $swimSpeed; 

}
public function swim(): string;

}