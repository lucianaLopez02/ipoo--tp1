<?php 

class Login {
    private $nombreUsuario;
    private $contrasenia;
    private $frase;
    private $ultimasContrasenias;

    public function __construct($nomUser,$pass,$frasesL,$ultContrasenias){
        $this->nombreUsuario = $nomUser;
        $this->contrasenia = $pass;
        $this->frase = $frasesL;
        $this->ultimasContrasenias = $ultContrasenias;
    }

    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }


    public function setNombreUsuario($nomUser)
    {
        $this->nombreUsuario = $nomUser;
    }

    public function getContrasenia()
    {
        return $this->contrasenia;
    }


    public function setContrasenia($pass)
    {
        $this->contrasenia = $pass;
    }


    public function getFrase()
    {
        return $this->frase;
    }


    public function setFrase($fraseL)
    {
        $this->frase = $fraseL;
    }


    public function getUltimasContrasenias()
    {
        return $this->ultimasContrasenias;
    }

    public function setUltimasContrasenias($ultContrasenias)
    {
        $this->ultimasContrasenias = $ultContrasenias;
    }

    function validarContrasenia($contrasenia){
        $valida = false;
        if ($this->getContrasenia() == $contrasenia) {
            $valida = true;
        }
        return $valida;
    }

    function cambiarContrasenia($nuevaContrasenia){
        $ultimasContrasenias = $this->getUltimasContrasenias();
        $n = count($ultimasContrasenias);
        $encontrada = false; 
        $i = 0;

        while ($i < $n && $encontrada == false) {
            if ($nuevaContrasenia == $ultimasContrasenias[$i]) {
                $encontrada = true;
            }else{
                $this->setContrasenia($nuevaContrasenia);
            }
            $i++;
        }
        return $encontrada;
    }

    function recordarContrasenia($usuario){
        $recordado = false;
        if ($this->getNombreUsuario() == $usuario) {
            $recordado = true;
        }
        return $recordado;
    }



}

?>