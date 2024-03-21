<?php
include_once 'Teatro.php';

$funcion1 = array('nombre' => "sherk", 'precio'=> 30);
$funcion2 = array('nombre' => "princesa y sapo", 'precio'=> 300);
$funcion3 = array('nombre' => "pinocho", 'precio'=> 300);
$funcion4 = array('nombre' => "madagascar", 'precio'=> 300);

$funcionesTeatro = [$funcion1,$funcion2,$funcion3,$funcion4]; 

$objTeatro = new Teatro("Mega", "Avenida", $funcionesTeatro);
echo $objTeatro;

echo $objTeatro->cambiarPrecioFuncion(1,120);
echo $objTeatro;