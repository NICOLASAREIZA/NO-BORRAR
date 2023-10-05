<!-- Leer 3 número distintos y determinar cuál es el menor. -->

<form method="POST" action="">
        <label for="numero1">Número 1:</label>
        <input type="number" id="numero1" name="numero1" required><br>
        
        <label for="numero2">Número 2:</label>
        <input type="number" id="numero2" name="numero2" required><br>
        
        <label for="numero3">Número 3:</label>
        <input type="number" id="numero3" name="numero3" required><br>
        
        <input type="submit" value="Comparar">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero1 = floatval($_POST['numero1']);
    $numero2 = floatval($_POST['numero2']);
    $numero3 = floatval($_POST['numero3']);

    if (is_nan($numero1) || is_nan($numero2) || is_nan($numero3)) {
        $respuesta = "Por favor, ingrese números válidos en todos los campos.";
    } else if ($numero1 === $numero2 && $numero1 === $numero3) {
        if ($numero1 > $numero2 && $numero1 > $numero3) {
            $respuesta = "Los tres números son iguales y el mayor es " . $numero1 . ".";
        } else {
            $respuesta = "Los tres números son iguales.";
        }
    } else if ($numero1 === $numero2) {
        if ($numero1 > $numero3) {
            $respuesta = "El primer y segundo número son iguales y mayores que " . $numero3 . ".";
        } else {
            $respuesta = "El primer y segundo número son iguales y menores que " . $numero3 . ".";
        }
    } else if ($numero1 === $numero3) {
        if ($numero1 > $numero2) {
            $respuesta = "El primer y tercer número son iguales y mayores que " . $numero2 . ".";
        } else {
            $respuesta = "El primer y tercer número son iguales y menores que " . $numero2 . ".";
        }
    } else if ($numero2 === $numero3) {
        if ($numero2 > $numero1) {
            $respuesta = "El segundo y tercer número son iguales y mayores que " . $numero1 . ".";
        } else {
            $respuesta = "El segundo y tercer número son iguales y menores que " . $numero1 . ".";
        }
    } else if ($numero1 < $numero2 && $numero1 < $numero3) {
        $respuesta = "El número " . $numero1 . " es el menor de los tres.";
    } else if ($numero2 < $numero1 && $numero2 < $numero3) {
        $respuesta = "El número " . $numero2 . " es el menor de los tres.";
    } else {
        $respuesta = "El número " . $numero3 . " es el menor de los tres.";
    }
    echo $respuesta;
}
?>

