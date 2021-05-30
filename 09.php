<?php include 'includes/header.php';

$db = new mysqli("localhost", "root", "n0m3l0", "bienes_raices");
$query = "Select titulo from propiedades";
$stmt = $db->prepare($query); //prepare the statement 

//$resultado = $db->query($query);
// basic form to use mysqli to print results
// while($row = $resultado->fetch_assoc() ) :
//     var_dump($row);
// endwhile;

$stmt->execute(); //execute the stmt

$stmt->bind_result($title); //Create a new variable

$stmt->fetch(); //Get the results

var_dump($title); //Print result




include 'includes/footer.php';