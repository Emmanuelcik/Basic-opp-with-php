<?php

use Transport as GlobalTransport;

include 'includes/header.php';

interface interfaceTransport{
    public function getInfo() : string;
    public function getWheels() : int;
}

abstract class Transport implements interfaceTransport {

    public function __construct(protected int $wheels, protected int $capacity)
    { 

    }

    public function getInfo() : string{
        return "This trasnport has " . $this->wheels . " wheels and a capacity of " . $this->capacity. " persons"; 
    }
    public function getWheels() : int{
        return $this->wheels;
    }
}

include 'includes/footer.php';