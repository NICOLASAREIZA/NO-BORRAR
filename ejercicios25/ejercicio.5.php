<?php
/*Ejercicio 5: (Ejercicio de primos: Escribe un programa que determine si un número
ingresado por el usuario es primo o no.)*/

$numero = readline();
$contador02 = 0;

for ($contador = 1; $contador <= $numero; $contador++){
    if ($numero % $contador == 0){
        $contador02 = $contador02 + 1;
    }
}

if ($numero == 1 or $contador02 == 2){
    echo "El numero". $numero. "es primo";  
} 

else{
    echo "El numero".$numero. "No es primo";
}
?>