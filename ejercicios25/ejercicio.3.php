<?php
/*Ejercicio 3: (Ejercicio de factorial: Escribe un programa que calcule el factorial de un
número ingresado por el usuario.)*/

$dato = '6';

$factory = '1';
for ($var = $dato; $var > 0; $var--)
{
    $factory *= $var;
}

echo "Factorial"; $factory;

?>