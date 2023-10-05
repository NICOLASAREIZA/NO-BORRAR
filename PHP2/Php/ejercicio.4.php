<!-- En un estacionamiento cobran $1.500 por hora. Diseñe un algoritmo que determine cuanto
debe pagar un cliente por el estacionamiento de su vehículo, conociendo el tiempo de
estacionamiento en horas. -->

<form method="POST" action="">
        <label for="horas">Ingrese la cantidad de horas:</label>
        <input type="number" id="horas" name="horas" required><br>
        <input type="submit" value="Calcular">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $horas = $_POST['horas'];
    $total = $horas * 1500;

    if ($horas === "") {
        // Si el usuario no ingresa ningún valor
        $respuesta = "No ingresaste ningún valor.";
    } else if (!is_numeric($horas)) {
        // Si el valor ingresado no es un número válido
        $respuesta = "Por favor, ingresa un valor válido.";
    } else if ($horas == 0) {
        // Si el valor ingresado es "0"
        $respuesta = "No tienes que pagar nada.";
    } else if ($horas > 0 && $horas <= 1) {
        // Si el valor ingresado está entre 0 (exclusivo) y 1 (inclusive)
        $respuesta = "El total a pagar es de " . $total . " por hora.";
    } else {
        // Si el valor ingresado es mayor que 1
        $total = $horas * 1500; // Recalculamos el total por horas
        $respuesta = "El total a pagar es de " . $total . " por " . $horas . " horas.";
    }
    echo $respuesta;
}
?>
