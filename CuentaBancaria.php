<?php 

class CuentaBancaria{
    //atributos
    private $numeroCuenta;
    private $dniCliente;
    private $saldoActual;
    private $interesAnual;

    public function __construct($numCuentaC,$dniClienteC,$saldoC,$interesAnualC){
        $this->numeroCuenta = $numCuentaC;
        $this->dniCliente = $dniClienteC;
        $this->saldoActual = $saldoC;
        $this->interesAnual = $interesAnualC;
    }

    //GETTERS
    public function getNumeroCuenta(){
        return $this->numeroCuenta;
    }

    public function getDniCliente(){
        return $this->dniCliente;
    }

    public function getSaldoActual(){
        return $this->saldoActual;
    }

    public function getInteresAnual(){
        return $this->interesAnual;
    }

    //SETTERS

    public function setNumeroCuenta($numCuentaC){
        $this->numeroCuenta = $numCuentaC;
    }
    public function setDniCliente($dniClienteC){
        $this->dniCliente = $dniClienteC;
    }
    public function setSaldoActual($saldoC){
        $this->saldoActual = $saldoC;
    }
    public function setInteresAnual($interesAnualC){
        $this->interesAnual = $interesAnualC;
    }

    function actualizarSaldo(){
        $interesDiario = $this->getInteresAnual() / 365;
        $saldoFinal= $this->getSaldoActual() + $interesDiario; 
        $this->setSaldoActual($saldoFinal);
    }

    function depositar($cant){
        $saldoFinal = $this->getSaldoActual() + $cant;
        $this->setSaldoActual($saldoFinal);
    }

    function retirar($cant){
        if ($this->getSaldoActual() > 0 && $cant <= $this->getSaldoActual()) {
            $saldoFinal = $this->getSaldoActual() - $cant;
            $this->setSaldoActual($saldoFinal);
        }else{
            echo "no se puede retirar saldo";
        }
    }

    public function __toString(){
        return "Numero de cuenta: ".$this->numeroCuenta()."Dni Cliente: ".$this->numeroCliente()."Saldo actual: ".$this->saldoActual()."interes anual: ".$this->interesAnual();
    }
}
