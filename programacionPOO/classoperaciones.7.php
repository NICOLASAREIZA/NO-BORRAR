<?php

class Operaciones{
    //Propiedades
    public $intCantidadUno = 0;
    public $intCantidadDos = 0;
    public $floatResultado = 0;
    

    //Metodos

    public function __construct(int $val1, int $val2){
        $this -> intCantidadUno = $val1;
        $this -> intCantidadDos = $val2;

    }

    public function __divicion(){
        $this->floatResultado = $this -> intCantidadUno / $this ->intCantidadDos;
        
        return $this->floatResultado;
    }
} 



?>