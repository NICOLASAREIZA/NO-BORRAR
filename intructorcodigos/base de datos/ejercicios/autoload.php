<?php

function autoload($clase){
    require_once($clase.".php");


    spl_autoload_register (callback:"autoload");
}

//Registrar las funciones dadas como implementación de __autoload()



?>