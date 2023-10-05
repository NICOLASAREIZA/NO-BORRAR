<?php
class Usuarios{
    //PROPIEDADES

    private $strName;
    private $strEmail;
    private $strTipo;
    private $strClave;
    protected $strFechaRegistro;
    static $strEstado = "Activo";

    //METODOS

    function __construct(string $nombre, string $email, string $tipo ){
        $this -> strName = $nombre;
        $this -> strEmail = $email;
        $this -> strTipo = $tipo;
        $this -> strClave = rand(100000,999999);
        $this -> strFechaRegistro = date("Y-m-d H:i:s");
    }

    function getMail(){
        return $this -> strEmail;
    }
    function getName(){
        return $this -> strName;
    }
    function getTipo(){
        return $this -> strTipo;
    }

    function getPerfil(){
        echo "<h1>Datos del usuario </h1> <br>";
        echo "Nombre: ".$this->strName."<br>";
        echo "E-mail: ".$this->strEmail."<br>";
        echo "Clave: ".$this->strClave."<br>";
        echo "Fecha de registro: ".$this->strFechaRegistro."<br>";
        echo "Estado: ".self::$strEstado."<br>";
    }

    function setCambiarclave($clave){
        return $this -> strClave = $clave;
    }



}