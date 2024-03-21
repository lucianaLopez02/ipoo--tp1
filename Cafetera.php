<?php 

class Cafetera{
    private $capacidadMaxima;
    private $cantidadActual;

    public function __construct($capacidadMaximaC,$cantidadActualC){
        $this->capacidadMaxima = $capacidadMaximaC;
        $this->cantidadActual = $cantidadActualC;
    }

    public function getCapacidadMaxima(){
        return $this->capacidadMaxima;
    }

    public function getCantidadActual(){
        return $this->capacidadMaxima;
    }

    public function setCapacidadMaxima($capacidadMaximaC){
        $this->capacidadMaxima = $capacidadMaximaC;
        
    }

    public function setCantidadActual( $cantidadActualC){
        $this->cantidadActual = $cantidadActualC;
    }

    function llenarCafetera(){
        $this->setCapacidadActual($this->getCapacidadMaxima());
    }

    function servirTaza($cantidad){
        if ( $this->getCantidadActual() < $this->getCapacidadMaxima()) {
            $this->setCantidadActual($cantidad); 
            echo "no alcanzo a llenarse la taza completa";
        }else if( $this->getCantidadActual() == $this->getCapacidadMaxima()){
            $this->setCantidadActual($cantidad); 
            echo "se lleno la taza";
        }else{
           
            $cantidadRebalsada = $cantidad - $this->getCapacidadMaxima();
            echo "se rebalso la taza con: ".$cantidadRebalsada;
        }
    function vaciarCafetera(){
        $this->setCantidadActual(0);
    }

    function agregarCafe($cantidad){
        $cafeAgregado = $this->getCapacidadActual() + $cantidad;
        $this->setCapacidadActual($cafeAgregado);
    }

    
}
}
?>