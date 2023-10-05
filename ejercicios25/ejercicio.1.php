<?php
/*ejercicio 1: (Ejercicio de suma y promedio: Escribe un programa que solicite al usuario
ingresar una lista de números y luego calcule la suma y el promedio de esos
números)*/

$numeroDeDatos = intval(readline (prompt:"Ingrese la cantidad de datos a promediar \n "));

$datos = [];

for($i = 0; $i <= $numeroDeDatos; $i++){
    $datos[$i] = floatval (readline(prompt:"Ingrese el datos \n"));
}

$suma =0;
for($i = 0; $i <= $numeroDeDatos; $i++){
    $suma += $datos[$i];
}

echo $suma. "\n";

$resultado = $suma / $numeroDeDatos;
echo "el promedio de los datos es de".$resultado."\n";

//var_drum (para traer datos)
//var_drum ($datos)


?>