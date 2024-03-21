<?php 
include_once 'CuentaBancaria.php';

$objCuentaBancaria = new CuentaBancaria (1234,444443,1000,1);

$objCuentaBancaria->actualizarSaldo();

echo $objCuentaBancaria->getSaldoActual();

$objCuentaBancaria->depositar(1000);
echo "\n" .$objCuentaBancaria->getSaldoActual();

$objCuentaBancaria->retirar(2000);
echo "\n".$objCuentaBancaria->getSaldoActual();

?>