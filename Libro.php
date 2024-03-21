<?php
class Libro{
    //atributos
    private $isbn;
    private $titulo;
    private $anioEdicion;
    private $editorial;
    private $nombre;
    private $apellido;

    public function __construct($isbnL,$tituloL,$anioEdicionL,$editorialL,$nombreL,$apellidoL){
        $this->isbn = $isbnL;
        $this->titulo =$tituloL;
        $this->anioEdicion = $anioEdicionL;
        $this->editorial = $editorialL;
        $this->nombre = $nombreL;
        $this->apellido = $apellidoL;
    }

    public function getIsbn(){
        return $this->isbn;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getAnioEdicion(){
        return $this->anioEdicion;
    }

    public function getEditorial(){
        return this->editorial;
    }

    public function nombre(){
        return $this->nombre;
    }

    public function apellido(){
        return $this->apellido;
    }

    public function set($isbnL){
        $this->isbn = $isbnL;
    }

    public function setTitulo($tituloL){
        $this->titulo = $tituloL;
    }

    public function setAnioEdicion($anioEdicionL){
        $this->anioEdicion = $anioEdicionL;
    }

    public function setEditorial($editorialL){
        $this->editorial = $editorialL;
    }

    public function setNombre ($nombreL){
        $this->nombre = $nombreL;
    }

    public function setApellido ($apellidoL){
        $this->apellido = $apellidoL;
    }
    //funciones
    function pertenceEditorial($peditorial){
        $esta = false;
       if($this->editorial == $peditorial){
        $esta = true;
       }
       return $esta;
    }

     function aniosdeEdicion(){
        $anioActual= 2024;
      $aniosPasados = $anioActual - $this->anioEdicion;
      return $aniosPasados;
    }

    public function __tooString(){
        return "isbn: ". $this->getIsbn()."Titulo: "
        .$this->getTitulo(). "Año de edicion: ".$this->getAnioEdicion().
        "Editorial: ".$this->getEditorial(). "Nombre: " .$this->getNombre(). 
        "apellido: ".$this->getApellido();
        ; 
    }






}