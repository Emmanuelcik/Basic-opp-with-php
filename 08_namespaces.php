<?php include 'includes/header.php';

 function my_autoload($class){
     $parts = explode("\\", $class);
     require __DIR__ . "/classes/".  $parts[1] . ".php"; 
}
 spl_autoload_register("my_autoload");

class Client{
    public function __construct()
    {
        echo "From autoload";
    }
}

$details = new App\Details();
echo "<br>";
$clients = new App\Client();
echo "<br>";
$clients2 = new Client();
include 'includes/footer.php';