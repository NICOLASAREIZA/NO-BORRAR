<?php

require_once ("classItem.php");

//PROPIEDADES

class menu extends item {
    
    private $strtipo;



//METODOS


public function __construct($nombre, $precio, $tipo){

        parent:: __construct($nombre, $precio);
        $this -> strtipo = $tipo;

    }


    public function mostrarinformacion()
    {
        parent::mostrarinformacion();{
            echo "Tipo: ".$this->strtipo."<br>";
        }
    }
}


?>