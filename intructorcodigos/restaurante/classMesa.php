<?php
require_once ("classCliente.php");
require_once ("classCajaregistradora.php");

class mesa extends clientes {

    //PROPIEDADES


    public $intnumeromesa;


    //METODOS

    public function __construct(int $Numeromesa)
    {
        $this -> intnumeromesa = $Numeromesa;
    }

}


?>