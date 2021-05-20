<?php include 'includes/header.php';

    class Transport {

        public function __construct(protected int $wheels, protected int $capacity)
        { 

        }

        public function getInfo() : string{
            return "This trasnport has " . $this->wheels . " wheels and a capacity of " . $this->capacity. " persons"; 
        }
        public function getWheels(){
            return $this->wheels;
        }
    }

    class Bicycle extends Transport{
        public function getInfo() :string {
            return "This trasnport has " . $this->wheels . " wheels and a capacity of " . $this->capacity. " persons and it is sustainable "; 
        }
    }
    class Car extends Transport{
        
        public function __construct(protected int $wheels, protected int $capacity, protected string $transmission)
        { 

        }
        public function getTrans(): string{
            return $this->transmission; 
        }
    }

    $bike = new Bicycle(2,1);
    echo $bike->getInfo();
    echo $bike->getWheels();
    echo "<hr>";
    $car = new Car(4,100, "automatic");
    echo $car->getInfo();
    echo "<br>";
    echo $car->getTrans();
    echo " "; 
    echo $car->getWheels();
    echo "<hr>";

include 'includes/footer.php';