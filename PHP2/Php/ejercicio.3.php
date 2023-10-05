<!-- Escribir un algoritmo que, ingresada una calificación del 1 al 10, muestre por pantalla el
siguiente mensaje. Cuando la calificación sea de 7 o superior mostrar “APROBADO” y si no
obtuvo esa calificación mostrar “REPROBADO” -->

<form method="POST" action="">
        <label for="nota">Ingrese la nota:</label>
        <input type="number" id="nota" name="nota" required><br>
        <input type="submit" value="Validar">
    </form>



<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nota = trim($_POST['nota']);
    $respuesta = "";

    if ($nota === "") {
        $respuesta = "Por favor, ingresa un dato válido.";
    } else {
        $nota = floatval($nota);
        if (is_nan($nota) || $nota < 1 || $nota > 10) {
            $respuesta = "Error: La nota ingresada no es válida. Debe ser un número entre 1 y 10.";
        } else if ($nota >= 7) {
            $respuesta = "APROBADO";
        } else {
            $respuesta = "REPROBADO";
        }
    }
    echo $respuesta;
}
?>
