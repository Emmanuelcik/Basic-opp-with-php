<?php include 'includes/header.php';

function my_autoload($class){
    echo $class;
    require __DIR__ . "/classes/".  $class . ".php"; 
}
spl_autoload_register("my_autoload");

$details = new Details();
echo "<br>";
$clients = new Client();

include 'includes/footer.php';