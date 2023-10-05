<!-- A un trabajador le descuentan de su sueldo el 12% si su sueldo es menor o igual a 500000, por
encima de 500000 y hasta 1000000 el 15%, y por encima de 1000000 el 18%. Realice un
algoritmo que calcule el descuento y sueldo total que recibe el trabajador dado su sueldo
inicial. -->

<form method="POST" action="">
        <label for="sueldo">Ingrese su sueldo:</label>
        <input type="number" id="sueldo" name="sueldo" required><br>
        <input type="submit" value="Calcular">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $sueldo = $_POST['sueldo'];

    if ($sueldo === "-1") {
        $respuesta = "El sueldo ingresado es -1. El programa ha finalizado.";
    } else {
        $sueldo = intval($sueldo); // Convertir la entrada a número entero

        if ($sueldo < -1) {
            $respuesta = "Error, dato no válido";
        } else if ($sueldo <= 500000 && $sueldo > 0) {
            $totalmenos = $sueldo - ($sueldo * 0.12);
            $respuesta = "Su sueldo con el descuento es de " . $totalmenos;
        } else if ($sueldo <= 1000001) {
            $totalmedio = $sueldo - ($sueldo * 0.15);
            $respuesta = "El sueldo con el descuento es igual a " . $totalmedio;
        } else {
            $totalmayor = $sueldo - ($sueldo * 0.18);
            $respuesta = "El sueldo con el descuento es igual a " . $totalmayor;
        }
    }
    echo $respuesta;
}
?>