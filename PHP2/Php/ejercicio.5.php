<!-- Los empleados de una fábrica trabajan en dos turnos: diurno y nocturno. Se desea calcular el
jornal diario de acuerdo con los siguientes puntos:
La tarifa de las horas diurnas es de 10 dólares.
La tarifa de las horas nocturnas es de 15 dólares.
Codifique un algoritmo que solicite el turno de trabajo y el número de horas trabajadas y
posteriormente calcule el valor a pagar. -->


<form method="POST" action="">
        <label for="turno">Ingrese el turno de trabajo (diurno/nocturno):</label>
        <input type="text" id="turno" name="turno" required><br>
        
        <label for="horas">Ingrese el número de horas trabajadas:</label>
        <input type="number" id="horas" name="horas" required><br>
        
        <input type="submit" value="Calcular">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $turno = strtolower($_POST['turno']);
    $horas = $_POST['horas'];

    $Diurna = 10;
    $Nocturna = 15;

    $valorAPagar = 0;

    if ($turno === "diurno") {
        $valorAPagar = $horas * $Diurna;
        $respuesta = "El total a pagar es de: " . $valorAPagar . " dólares.";
    } else if ($turno === "nocturno") {
        $valorAPagar = $horas * $Nocturna;
        $respuesta = "El total a pagar es de: " . $valorAPagar . " dólares.";
    } else {
        $respuesta = "El turno ingresado no es válido.";
    }
    echo $respuesta;
}
?>
