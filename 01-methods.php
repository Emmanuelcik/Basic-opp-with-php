<?php 
declare( strict_types = 1);
include 'includes/header.php';
    //Define a class with the reserved word class
    class Product {

        public function __construct(public string $name,public int $price, public bool $disponibility)
        {
            
        }

        public function showIt(){
            echo "The producot is " . $this->name . "And its price is " . $this->price;
        }
    }   
    //create a new instance
    $product = new Product("Tablet", 2000, true);
    $product->showIt();
     echo "<pre>";
     var_dump($product);
     echo "</pre>";
    


include 'includes/footer.php';