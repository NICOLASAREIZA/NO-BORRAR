<?php
require_once ("classMueble.php");

class Mesa extends Mueble{
    //PROPIEDADES
    public $strForma;
    public $strTamanio;

    //METODOS

    public function __construct(string $descripcion, float $precio, string $color, string $material, string $tamanio)
    {
        parent::__construct($descripcion, $precio, $color, $material);
        $this->strTamanio = $tamanio;
    }
    function setForma($strForma):void{
        $this -> strForma = $strForma;
    }
    function getForma(){
        return $this -> strForma;
    }
    function getInfoProducto(){
        $datos = "
        <h1> DATOS MESA</h1><br>
        Producto: {$this -> strDescripcion}<br>
        Precio: {$this -> fltPrecio}<br>
        Stoc_minimo: {$this ->intStockMinimo}<br>
        Estatus: {$this ->strStatus}<br>
        Color: {$this -> strColor}<br>
        Material: {$this -> strMaterial}<br>
        Tamaño:{$this -> strTamanio}<br>
        Forma:{$this -> strForma}<br>
        ";
        return $datos;
    }
}