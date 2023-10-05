<!-- Dadas las tres calificaciones de un estudiante en la materia de algoritmia, calcule:
a. Determinar su promedio
b. Indicar si el estudiante aprobó o no el curso.
Un estudiante aprueba la materia si el promedio es mayor o igual a 70 puntos. -->

<form method="POST" action="">
        <label for="calificacion1">Calificación 1:</label>
        <input type="number" id="calificacion1" name="calificacion1" required><br>
        
        <label for="calificacion2">Calificación 2:</label>
        <input type="number" id="calificacion2" name="calificacion2" required><br>
        
        <label for="calificacion3">Calificación 3:</label>
        <input type="number" id="calificacion3" name="calificacion3" required><br>
        
        <input type="submit" value="Calcular">
    </form>



<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $calificacion1 = floatval($_POST['calificacion1']);

    if (is_nan($calificacion1) || is_nan($calificacion2) || is_nan($calificacion3)) {
        $resultado = "Error: Ingrese calificaciones válidas.";
    } else if ($calificacion1 < 0 || $calificacion1 > 1000 || $calificacion2 < 0 || $calificacion2 > 100 || $calificacion3 < 0 || $calificacion3 > 100) {
        $resultado = "Error: Las calificaciones deben estar entre 0 y 100.";
    } else {
        $promedio = ($calificacion1) * 2;
        $resultado = "Promedio: " . number_format($promedio, 2);

        if ($promedio >= 70) {
            $resultado .= " - Aprobado";
    }
    echo $resultado;
}
?>
