<?php
include_once 'Login.php';

$contrasenias = array("123","lolo","kodd","ooo");
$objLogin = new Login("Tamaki","1234","lunita",$contrasenias);


$validacionContrasenia = $objLogin->validarContrasenia("1234");

if ($validacionContrasenia) {
    echo "la contraseña es valida\n";
}else{
    echo "no es una contraseña valida\n";
}

if ($objLogin->cambiarContrasenia("1234")) {
    echo "la contraseña ha sido utilizada recientemente\n";
    
}else{
    echo $objLogin->getContrasenia()."\n";
}


if($objLogin->recordarContrasenia("tamaki")){
    echo $objLogin->getFrase();
}else{
    echo "nombre de usuario no encontrado\n";
}



