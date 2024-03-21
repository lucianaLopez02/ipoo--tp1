<?php
include_once 'Reloj.php';

$objReloj = new Reloj(23,59,59);

echo $objReloj;

$objReloj->incremento();

echo $objReloj;

$objReloj->incremento();

echo $objReloj;