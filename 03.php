<?php 
//Static Methdos
declare( strict_types = 1);
include 'includes/header.php';
    //Define a class with the reserved word class
    class Product {

        public $image;
        public static $placeHoderImage = "image.jpg"; 

        public function __construct(protected string $name,public int $price, public bool $disponibility, string $image)
        {
            if($image){
                self::$placeHoderImage = $image;
            }
        }

        public static function getImageProduct(){
            return self::$placeHoderImage;
        }

        public function showIt() : void{
            echo "The producot is " . $this->name . " And its price is " . $this->price;
        }
        public function getName() :string {
            return $this->name;
        }
        public function setName(string $name){
            $this->name = $name;
        }
    }   
    //create a new instance
    
    $product = new Product("Tablet", 2000, true, "");
    // $product->showIt();
    echo $product::getImageProduct();
    $product->setName("Smartphone");

    $product2 = new Product("Tablet", 2000, true, "Cellphone 4k");
    echo "</br>";
    echo $product::getImageProduct();
     echo "<pre>";
     var_dump($product);
     echo "</pre>";
    

include 'includes/footer.php';