<?php 

class Linea{
    private $pA;
    private $pB;
    private $pC;
    private $pD;

    public function __construct($pa,$pb,$pc,$pd){
        $this->pA = $pa;
        $this->pB = $pb;
        $this->pC = $pc;
        $this->pD = $pd;
    }

    
    public function getPA()
    {
        return $this->pA;
    }

    public function setPA($pa)
    {
        $this->pA = $pa;
    }

    public function getPB(){
        return $this->pB;
    }

    public function setPB($pb){
        $this->pB = $pb;
    }

    public function getPC(){
        return $this->pC;
    } 

    public function setPC($pc){
        $this->pC = $pc;
    }

    public function getPD(){
        return $this->pD;
    } 

    public function setPD($pd){
        $this->pD = $pd;
    }

    public function mueveDerecha($d){
        $nuevaDistanciaA = $this->getPA() + $d;
        $this->setPA($nuevaDistanciaA);

        $nuevaDistanciaC = $this->getPC() + $d;
        $this->setPC($nuevaDistanciaC);
    }

    public function mueveIzquierda($d){
        $nuevaDistanciaA = $this->getPA() - $d;
        $this->setPA($nuevaDistanciaA);

        $nuevaDistanciaC = $this->getPC() - $d;
        $this->setPC($nuevaDistanciaC);
    }

    public function mueveArriba($d){
        $nuevaDistanciaB = $this->getPB() + $d;
        $this->setPB($nuevaDistanciaB);

        $nuevaDistanciaD = $this->getPD() + $d;
        $this->setPD($nuevaDistanciaD);
    }

    public function mueveAbajo($d){
        $nuevaDistanciaB = $this->getPB() - $d;
        $this->setPB($nuevaDistanciaB);

        $nuevaDistanciaD = $this->getPD() - $d;
        $this->setPD($nuevaDistanciaD);
    }

    public function __toString(){
    return "pA: ".$this->getPA()."\npB: ".$this->getPB()."\npC: ".$this->getPC()."\npD: ".$this->getPD()."\n";
    }
}

?>