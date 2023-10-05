<?php

require_once("./classCliente.php");
require_once("./classEmpleado.php");

$Persona = new Persona(1654654, "Chengo", 15);

echo $Persona->getDatosPersonales();

$Cliente = new Cliente(15465, "angela", 16);

echo $Cliente->getDatosCreditos();

$Empleado = new Empleado(44411, "nicolas", 18, "jefe");

echo $Empleado->getDatosEmpleado();