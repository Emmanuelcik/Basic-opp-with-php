<?php include 'includes/header.php';
declare( strict_types = 1);
    //Define a class with the reserved word class
    class Product {
        //define the attributes
        public $name;
        public $price;
        public $disponibility;

        public function __construct(string $name, int $price, bool $disponibility)
        {
            $this-> name = $name;
            $this-> price = $price;
            $this-> disponibility = $disponibility;
        }

    }
    //create a new instance
    // $product = new Product();
    // $product->name = "Tablet";
    // $product->price = 2000;
    // $product->disponibility = true;
    $product = new Product("Tablet", 2000, true);
     echo "<pre>";
     var_dump($product);
     echo "</pre>";
    


include 'includes/footer.php';