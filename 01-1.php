<?php include 'includes/header.php';
declare( strict_types = 1);
    //Define a class with the reserved word class
    class Product {

        public function __construct(string $name, int $price, bool $disponibility)
        {
    
        }

    }
    //create a new instance
    $product = new Product("Tablet", 2000, true);
     echo "<pre>";
     var_dump($product);
     echo "</pre>";
    


include 'includes/footer.php';