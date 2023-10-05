<!-- Diseñe un algoritmo que dado dos números A y B, determine si A es mayor, igual o menor a B. -->

<form method="POST" action="">
        <label for="numeroA">Número A:</label>
        <input type="number" id="numeroA" name="numeroA" required><br>
        
        <label for="numeroB">Número B:</label>
        <input type="number" id="numeroB" name="numeroB" required><br>
        
        <input type="submit" value="Comparar">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numeroA = floatval($_POST['numeroA']);
    $numeroB = floatval($_POST['numeroB']);

    if (is_nan($numeroA) || is_nan($numeroB)) {
        $resultado = "Error: Ingrese números válidos en ambos campos.";
    } else {
        if ($numeroA === $numeroB) {
            $resultado = "A es igual a B.";
        } else if ($numeroA < $numeroB) {
            $resultado = "A es menor que B.";
        } else {
            $resultado = "A es mayor que B.";
        }
    }
    echo $resultado;
}
?>
