<?php
$nums = [2,1,1,1];

function calcularsuma($resultado){
    $suma = 0;
    foreach ($resultado as $numero){
        $suma += $numero;
    }
    return $suma;
}

$resultado =calcularsuma ($nums);
echo "suma: ".$resultado;

