<?php 
include_once 'Libro.php';

$objLibro = new Libro(1233,"El fantasma de cantenville",2000,"elgatodehojalata","oscar","wilde");
$objLibro2 = new Libro(2333,"caperucita roja",2002,"libracos","maria","walsh");
$objLibro3 = new Libro(8877,"brujas",2002,"libracos","maria","walsh");

$arregloLibros = array($objLibro,$objLibro2);


$perteneceLibro = $objLibro2->pertenceEditorial("libracos");
    if ($perteneceLibro) {
        echo "el libro pertenece a la editorial";
    }else{
        echo "no pertenece el libro";
    }

    $aniosEdicionPasados = $objLibro->aniosdeEdicion();
    echo "Los años que pasaron son: ".$aniosEdicionPasados;



function iguales($plibro,$parreglo){
    $encontrado = false;
    $n = count($parreglo);
    $i = 0;

    while ($i < $n && $encontrado == false) {
        if ($plibro == $parreglo[$i]) { //objlibro
            $encontrado = true;
        }
        
        $i++;
    }
    return $encontrado;
}

  $sonIguales = iguales($objLibro3,$arregloLibros);
  if ($sonIguales) {
    echo "se encontro el libro en la coleccion";
  }else{
    echo "no se encontro el libro en la coleccion";
  }

function libroEditoriales($arreglosLibros,$pEditorial){
    $arregloAsociativo = [];

    for ($i=0; $i < count($arreglosLibros); $i++) { 
        if ($arregloslibros[$i]->getEditorial() == $pEditorial) {
            $arregloAsociativo[] = $arreglosLibros[$i];
        }
        
    }
    return $arregloAsociativo;
}



?>