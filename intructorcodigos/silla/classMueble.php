<?php
require_once ("classProducto.php");
class Mueble extends Producto {
    //PROPIEDADES
    public $strColor;
    public $strMaterial;
    //METODOS

    public function __construct(string $descripcion, float $precio, string $color, string $material)
    {
        parent::__construct($descripcion, $precio);
        $this->strColor = $color;
        $this->strMaterial = $material;
    }

    function getInfoProducto(){
        $datos = "
        <h1> DATOS MUEBLES </h1><br>
        Producto: {$this -> strDescripcion}<br>
        Precio: {$this -> fltPrecio}<br>
        Stoc_minimo: {$this ->intStockMinimo}<br>
        Estatus: {$this ->strStatus}<br>
        Color: {$this -> strColor}<br>
        Material: {$this -> strMaterial}<br>
        ";
        return $datos;
    }


}