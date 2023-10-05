<?php
/*Ejercicio 4: (Ejercicio de palíndromos: Escribe un programa que verifique si una palabra
ingresada por el usuario es un palíndromo (se lee igual de izquierda a derecha y
de derecha a izquierda)*/

$polindro  = readline('');
$nopolindro = strrev($polidro);

if ($nopolindro <= $polindro){
    echo "la palabra '$polindro' es un polidromo. \n";
}


else{
    echo "la palabra '$nopolindro' no es un polindromo.\n";
}

?>