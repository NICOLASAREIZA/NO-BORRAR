<!-- Realizar un login de usuario, solicitando el correo y la contraseña, 
si el correo=’fund@gmail.com’ y la clave=’123456‘, el sistema mostrará el mensaje 
“Bienvenidos a Fundamentos de programación”, si los datos son inválidos el sistema deberá 
mostrar “Error en los datos de ingreso.”  -->
<form action="#" method="post">
    <input type="email" name="correo" placeholder= "Escriba su correo:">
    <input type="password" name="clave" placeholder= "Escriba su contraseña:">
    <button type="submit">Enviar</button>
</form>
<?php 

$correo = $_POST["correo"];
$contras = $_POST["clave"];


if ($correo == 'fund@gmail.com' && $contras == '123456') {
    echo "Bienvenidos a Fundamentos de programación";
} else  {
    echo "Error en los datos de ingreso";
}