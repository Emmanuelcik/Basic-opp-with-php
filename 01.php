<?php include 'includes/header.php';

    //Define a class with the reserved word class
    class Product {
        //define the attributes
        public $name;
        public $price;
        public $disponibility;

    }
    //create a new instance
    $product = new Product();
    $product->name = "Tablet";
    $product->price = 2000;
    $product->disponibility = true;
    echo "<pre>";
    var_dump($product);
    echo "</pre>";
    //Create a new instance of another product
    $product2 = new Product();
    $product2->name = "Laptop";
    $product2->price = 4000;
    $product2->disponibility = false;
    echo "<pre>";
    var_dump($product2);
    echo "</pre>";

include 'includes/footer.php';