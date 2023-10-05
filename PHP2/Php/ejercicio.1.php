<!-- Leer dos números, determinar cuál es el mayor de los dos y mostrar ese número en pantalla
con el mensaje “Es el número mayor”.  -->

<form method="POST" action="">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" required><br>
        
        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" required><br>
        
        <input type="submit" value="Comparar">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = floatval($_POST['num1']);
    $num2 = floatval($_POST['num2']);

    if (is_nan($num1) || is_nan($num2)) {
        $respuesta = "Por favor, ingrese dos números válidos.";
    } else {
        if ($num1 > $num2) {
            $respuesta = "El primer número es mayor.";
        } else if ($num2 > $num1) {
            $respuesta = "El segundo número es mayor.";
        } else {
            $respuesta = "Los números son iguales.";
        }
    }
    echo $respuesta;
}
?>
