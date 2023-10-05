<?php

//explode — Divide un string en varios string
$numeros = "uno dos tres cuatro cinco";

print_r (value: "<pre>");
print_r (explode(" ",$numeros));
print_r (value: "</pre>");

$fecha = "21/09/2023";
print_r (value: "<pre>");
print_r (explode (" /",$fecha));
print_r (value: "</pre>");

//abs — Valor absoluto
echo "<br>";
echo abs (num:-4);

//floor — Redondear fracciones hacia abajo
echo "<br>";
echo floor(num:50.300);

echo "<br>";


//dependiendo de la zona horaria cambia y del mayuscula o minuscula de la letras tambien afecta.
date_default_timezone_set(timezoneId:'America/bogota');
$fechahora = date (format:"m-d-Y h-i-s");
echo "<br>";
echo $fechahora;

echo "<br>";
date_default_timezone_set(timezoneId:'Asia/Tokyo');
echo date (format:"m-d-Y h-i-s");


echo "<br>";
date_default_timezone_set(timezoneId:'Europe/Monaco');
echo date (format:"m-d-Y h-i-s");

/*
$hora = explode(":",$arraData[1]);

print_r (value: "<pre>");
print_r ($hora);
print_r (value: "</pre>");
*/

//hash — Generar un valor hash (resumen de mensaje)
echo "<br>";
echo "<br>";
$clave = "HolaMundo123";
echo hash ("md5", $clave)."<br>";

/*El constructor foreach proporciona un modo sencillo de iterar sobre arrays. 
foreach funciona sólo sobre arrays y objetos, y emitirá un error al 
intentar usarlo con una variable de un tipo diferente de datos o una variable no inicializada.

//hash_algos — Devuelve una lista de algoritmos hash registrados*/

foreach(hash_algos()as $algoritmos){
    echo $algoritmos. " - ".hash($algoritmos,$clave)."<br>";
}

/*PASSWORD_BCRYPT ( cadena )
PASSWORD_BCRYPTse utiliza para crear nuevos hash de contraseña utilizando el CRYPT_BLOWFISHalgoritmo.
Esto siempre dará como resultado un hash usando el formato de cripta "$2y$", que siempre tiene 60 caracteres de ancho. */

echo "<br>";
echo "<br>";
$clave = "HolaMundo123";
echo password_hash($clave, PASSWORD_BCRYPT,["cost" =>13]);



?>