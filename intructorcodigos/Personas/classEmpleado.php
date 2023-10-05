<?php
require_once ("classPersona.php");
class Empleado extends Persona{

    //PROPIEDADES
    public  $Puesto;


    //METODOS
    function __construct(int $DPI, string $nombre, int $edad, string $strPuesto)
    {
        parent::__construct($DPI, $nombre, $edad);
    }
    public function setPuesto($strPuesto)
    {
        $this->Puesto = $strPuesto;
    }
   
    public function getDatosEmpleado(){
        $datos = "
        <h1> DATOS PERSONALES </h1><br>
        DPI: {$this -> intDpi}<br>
        Nombre: {$this -> strNombre}<br>
        Edad: {$this ->intEdad}<br>
        Puesto:{$this ->strPuesto}
        ";
        return $datos;
    }

}