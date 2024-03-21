<?php 
class Cuadrado{
    private $vertices;

    public function __construct($vert){
        $this->vertices = $vert;
    }

    public function getVertices(){
        return $this->vertices;
    }

    public function setVertices($vert){
        $this->vertices = $vert;
    }

    public function area(){
        $posicionX1 = $this->getVertices()[1]["$posX"];
        $posicionX0 = $this->getVertices()[0]["$posX"];
        $lado = $posicionX1 - $posicionX0;

        $area = $lado * $lado;

        return $area;
    }

    
}