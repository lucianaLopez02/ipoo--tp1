<?php 

class Calculadora{

    private $operando1;
    private $operando2;

    public function __construct($op1,$op2){
        $this->operando1 = $op1;
        $this->operando2 = $op2;
    }

    public function getOperando1(){
        return $this->operando1;
    }

    public function getOperando2(){
        return $this->operando2;
    }

    public function setOperando1($op1){
        $this->operando1 = $op1;
        
    }

    public function setOperando2($op2){
        $this->operando2 = $op2;
    }
    
    public function suma(){
        $suma = $this->getOperando1() + $this->getOperando2();
        return $suma;
    }

    public function resta(){
        $resta = $this->getOperando1() - $this->getOperando2();
        return $resta;
    }

    public function producto(){
        $producto = $this->getOperando1() * $this->getOperando2();
        return $producto;
    }

    public function division(){
        $division = $this->getOperando1() / $this->getOperando2();
        return $division;
    }

    public function __toString(){
        return "el primer numero es: ".$this->getOperando1()." el segundo numero es: ".$this->getOperando2();
    }
}

?>