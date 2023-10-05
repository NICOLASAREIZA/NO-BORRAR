<!-- Hacer un algoritmo para ayudar a un trabajador a saber cuál será su sueldo semanal, se sabe
que, si trabaja 40 horas o menos, se le pagará $20 por hora, pero si trabaja más de 40 horas
entonces las horas extras se le pagarán a $25 por hora. -->

<form method="POST" action="">
        <label for="horasT">Ingrese las horas trabajadas:</label>
        <input type="number" id="horasT" name="horasT" required><br>
        <input type="submit" value="Calcular">
    </form>


<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $horasT = $_POST['horasT'];

    $minimo = 20;
    $tarifaSuperior = 25;

    $paga = 0;

    if ($horasT < 41) {
        $paga = $horasT * $minimo;
        $respuesta = "El total a pagar es de: " . $paga . " dólares.";
    } else {
        $paga = $horasT * $tarifaSuperior;
        $respuesta = "El total a pagar es de: " . $paga . " dólares.";
    }
    echo $respuesta;
}
?>
