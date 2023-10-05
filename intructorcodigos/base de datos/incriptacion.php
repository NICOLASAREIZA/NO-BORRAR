<?php

/*PASSWORD_BCRYPT ( cadena )
PASSWORD_BCRYPTse utiliza para crear nuevos hash de contraseña utilizando el CRYPT_BLOWFISHalgoritmo.
Esto siempre dará como resultado un hash usando el formato de cripta "$2y$", que siempre tiene 60 caracteres de ancho. */

echo "<br>";
echo "<br>";
$clave = "HolaMundo123";
echo password_hash($clave, PASSWORD_BCRYPT,["cost" =>13]);
echo password_verify($clave,$clave_procesada);

?>