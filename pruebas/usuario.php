<?php
require_once ("classUsuarios.php");

$usuario1 = new Usuarios("Diego Calderon","diego@gmail.com","Administrador");

//echo $usuario1 -> getName();

echo $usuario1 -> getName()."<br>";
echo $usuario1 -> getTipo()."<br>";

echo Usuarios::$strEstado."<br>";


$objParaco1 = new Usuarios("Paraco Emilio","AUC@para.com","Corta uñas");


$objParaco1 ->setCambiarclave("Pablo Tome la foto");

echo $objParaco1 ->getPerfil();

$objAndrea = new Usuarios("Andrea", "andrea@info.com", "vendedor");

echo $objAndrea->getPerfil();
$objAndrea ->setCambiarclave("PabloTomeLaFoto");
echo "cambio de clave <br><br>";
