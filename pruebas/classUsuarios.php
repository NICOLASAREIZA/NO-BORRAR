<?php
class Usuarios{
    //PROPIEDADES

    private $strName;
    private $strTipo;
    private $strDpi;
    static $strEstado = "Activo";

    //METODOS

    function __construct(string $nombre, string $email, string $tipo ){
        $this -> strName = $nombre;
        $this -> strEmail = $email;
        $this -> strTipo = $tipo;
        $this -> strDpi = rand(100,1000);
        $this -> strFechaRegistro = date("Y-m-d H:i:s");
    }

    function getName(){
        return $this -> strName;
    }
    function getTipo(){
        return $this -> strTipo;
    }

    function getPerfil(){
        echo "<h1>Objeto nuevo para empleado </h1>";
        echo "<h2>Datos personales</h2> <br>";
        echo "DPI: ".$this->strDpi."<br>";
        echo "Nombre: ".$this->strName."<br>";
        echo "Estado: ".self::$strEstado."<br>";
    }

    function setCambiarclave($clave){
        return $this -> strDpi = $clave;
    }



}