<?php
require_once("./classMesa.php");
require_once("./classProducto.php");
require_once("./classMueble.php");

$Producto = new Producto("Cama",15.5);
echo $Producto->getInfoProducto();

$Mueble = new Mueble("Estanteria",3.546,"Cafe","Roble");
echo $Mueble->getInfoProducto();

$Mesa = new Mesa(" Sofá",1.521," Blanco"," Cuero"," 25 metros");
$Mesa->setForma(" Redonda");
echo $Mesa -> getForma()."<br>";
echo $Mesa->getInfoProducto();