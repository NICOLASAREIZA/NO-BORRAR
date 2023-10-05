<?php
class Producto{
    //PROPIEDADES
    public $strDescripcion;
    public $fltPrecio;
    public $intStockMinimo = 10;
    public $strStatus = "Activo";

    //METODOS

    function __construct(string $descripcion, float $precio ){
        $this->strDescripcion = $descripcion;
        $this->fltPrecio = $precio;
    }

    function getInfoProducto(){
        $datos = "
        <h1> DATOS PERSONALES </h1><br>
        Producto: {$this -> strDescripcion}<br>
        Precio: {$this -> fltPrecio}<br>
        Stoc_minimo: {$this ->intStockMinimo}<br>
        Estatus: {$this ->strStatus}<br>
        ";
        return $datos;
    }

}