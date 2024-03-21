<?php 

class Reloj{
    private $horas;
    private $minutos;
    private $segundos;

    public function __construct($h,$m,$s){
        $this->horas = $h;
        $this->minutos = $m;
        $this->segundos = $s;
    }

    
    public function getHoras()
    {
        return $this->horas;
    }

  
    public function setHoras($h)
    {
        $this->horas = $h;
    }


    public function getMinutos()
    {
        return $this->minutos;
    }


    public function setMinutos($m)
    {
        $this->minutos = $m;

    }


    public function getSegundos()
    {
        return $this->segundos;
    }


    public function setSegundos($s)
    {
        $this->segundos = $s;
    }

    public function puesta_a_cero(){
        $this->getHoras(0);
        $this->getMinutos(0);
        $this->getSegundos(0);
    }

    public function incremento(){
        $seg = $this->getSegundos();
        $min = $this->getMinutos();
        $hr = $this->getHoras();

        if ( $seg == 59) {
            $this->setSegundos(0);
            if ($min == 59) {
                $this->setMinutos(0);
                if ($hr == 23) {
                    $this->setHoras(0);
                }else{
                    $this->setHoras($hr+1);
                }
            }else{
                $this->setMinutos($min+1);
            } 
        }else{
            $this->setSegundos($seg + 1);
        }
       
        

    }

    public function __toString(){
        return $this->getHoras()." : ".$this->getMinutos()." :".$this->getSegundos()."\n";
    }
}

?>