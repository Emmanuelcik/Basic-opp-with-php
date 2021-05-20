<?php 
//Encapsulation
declare( strict_types = 1);
include 'includes/header.php';
    //Define a class with the reserved word class
    class Product {
        //public can be accessed for all methods and classes 
        //protected - Can be just accessed in its class
        //Private - Just members of the same class
        public function __construct(protected string $name,public int $price, public bool $disponibility)
        {
            
        }

        public function showIt() : void{
            echo "The producot is " . $this->name . "And its price is " . $this->price;
        }
        public function getName() :string {
            return $this->name;
        }
        public function setName(string $name){
            $this->name = $name;
        }
    }   
    //create a new instance
    $product = new Product("Tablet", 2000, true);
    $product->showIt();
    echo $product->getName();
    $product->setName("new name");
     echo "<pre>";
     var_dump($product);
     echo "</pre>";
    

include 'includes/footer.php';