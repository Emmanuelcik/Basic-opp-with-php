<?php

use interfaceTransport as GlobalInterfaceTransport;
use Transport as GlobalTransport;

include 'includes/header.php';

interface interfaceTransport{
    public function getInfo() : string;
    public function getWheels() : int;
}

class Transport implements GlobalInterfaceTransport {

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
class Car extends Transport implements interfaceTransport{
    public function __construct(protected int $wheels, protected int $capacity, protected string $color)
    {
        
    }
    public function getInfo() : string{
        return "This trasnport Car has " . $this->wheels . " wheels and a capacity of " . $this->capacity. " persons y tiene un color " . $this->color; 
    }
    public function getColor() : string {
        return "The color is: " . $this->color;
    }
}

echo "<pre>";
var_dump($T = new Transport(4,20));
var_dump($car = new Car(4,4, "rojo"));
echo "</pre>";
echo $car->getColor();
echo "<br>";
echo $car->getInfo();
echo "<br>";
echo $T->getInfo();
include 'includes/footer.php';