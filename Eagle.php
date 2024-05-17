
<?php

class Eagle extends Bird{
    private float $flightSpeed;

public function __construct(float $flightSpeed) {
$this->flightSpeed = $flightSpeed;

}
public function hunt(): string;

}