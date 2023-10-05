<?php

class item {
    

    //PROPIEDADES

    public $strnombre;
    public $intprecio;

    //  METODOS
    public function __construct(string $Nombre, int $Precio)
    {
        $this -> strnombre = $Nombre;
        $this -> intprecio = $Precio;
    }

    public function mostrarinformacion(){
        echo "Nombre: ".$this->strnombre."<br>";
        echo "Precio: ".$this->intprecio."<br>"; 
    }
}




?>