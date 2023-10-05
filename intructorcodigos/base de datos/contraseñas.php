<?php

    echo "<br>".$_POST["Usuario"];
    echo "<br>".$_POST["contra"];

    //$contras = md5 ($_POST["contra"]);
    $contras = "9619375e1aa5faa777dfe4c3b8b49f17";
    //echo $contras;
    $user = "hola";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="#" method="post">
        <label for="">Usuario</label>
        <input type="text" name="Usuario">
        <br>
        <label for="">Contraseña</label>
        <input type="password" name="contra">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

