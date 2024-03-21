<?php 
include_once 'linea.php';

$objLinea = new Linea(5,7,9,1);

echo $objLinea;

$objLinea->mueveDerecha(5);


echo $objLinea;

?>
