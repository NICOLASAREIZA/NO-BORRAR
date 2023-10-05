<?php
require_once ("classPersona.php");
class Cliente extends Persona{

    //PROPIEDADES
    public  $strCreditos;


    //METODOS
    function __construct(int $DPI, string $nombre, int $edad)
    {
        parent::__construct($DPI, $nombre, $edad);
    }

    public function setCreditos($strCreditos): void
    {
        $this->strCreditos = $strCreditos;
    }
    public function getCreditos()
    {
        return $this->strCreditos;
    }
    
    public function getDatosCreditos(){
        $datos = "
        <h1> DATOS PERSONALES </h1><br>
        DPI: {$this -> intDpi}<br>
        Nombre: {$this -> strNombre}<br>
        Edad: {$this ->intEdad}<br>
        Creditos:{$this ->strCreditos}
        ";
        return $datos;
    }

}