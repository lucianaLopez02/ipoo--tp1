<?php 

include_once 'Calculadora.php';

$objCalculadora = new Calculadora (2,3);

echo $objCalculadora;

 $resp = $objCalculadora->suma();

echo "la respuesta es: ".$resp;
?>