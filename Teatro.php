<?php 

class Teatro{
    private $nombre;
    private $direccion;
    private $funciones;

    public function __construct($nombreT,$direccionT,$funcionesT){
        $this->nombre = $nombreT;
        $this->direccion = $direccionT;
        $this->funciones = $funcionesT;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombreT)
    {
        $this->nombre = $nombreT;
    }


    public function getDireccion()
    {
        return $this->direccion;
    }

 
    public function setDireccion($direccionT)
    {
        $this->direccion = $direccionT;
    }

    public function getFunciones()
    {
        return $this->funciones;
    }

    public function setFunciones($funcionesT)
    {
        $this->funciones = $funcionesT;
    }

    public function setNombreFuncion($nombre){
        $this->funciones[$indice-1]["nombre"] = $nombre;
        return $this;
    }

    public function cambiarPrecioFuncion($indice, $nuevoPrecio){
        $funcionest = $this->getFunciones(); // Obtener todas las funciones
        $funcionest[$indice-1]["precio"] = $nuevoPrecio;
        $this->setFunciones($funcionest);
    }


    public function __toString()
    {
        $nombreTeatro = "nombre teatro: ".$this->getNombre();
        $direccionTeatro = "Direccion: ".$this->getDireccion();
        $textoFuncion = "";

        for ($i=0; $i < count($this->getFunciones()); $i++){
            $unaFuncion = $this->getFunciones()[$i];

            $textoFuncion .= "Funcion ".($i+1). ":\n". $unaFuncion["nombre"]."\n". $unaFuncion["precio"]."\n";
        }
        return $nombreTeatro."\n".$direccionTeatro."\n".$textoFuncion;
    }
    //(arreglo indexado de arreglso asociativos)
}