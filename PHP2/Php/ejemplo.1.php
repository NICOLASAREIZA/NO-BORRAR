<!-- Diseñar un algoritmo que dada la edad de una persona indique si es MAYOR o MENOR de edad. -->


<form method="POST" action="">
        <label for="edad">Ingrese su edad:</label>
        <input type="number" id="edad" name="edad" required>
        <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $edad = $_POST['edad'];

    if (is_numeric($edad) && $edad > 0 && $edad <= 100) {
        if ($edad >= 18) {
            echo "Usted tiene " . $edad . " años, eres mayor de edad.";
        } else {
            echo "Usted tiene " . $edad . " años, eres menor de edad.";
        }
    } else {
        echo "ERROR: La edad debe ser un número mayor a 0 y menor o igual a 100.";
    }
}
?>