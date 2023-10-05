<!-- Realizar un programa que capture los datos de un empleado:
Nombre, Genero (1-masculino, 2-femenino), Salario básico, y tiempo de servicio.
El sistema debe calcular el valor de la bonificación anual en base a los siguientes
lineamientos de la empresa:
Si es mujer y el tiempo de servicio es superior a 5 años, su bonificación será de un 20% del
Salario básico
Si es mujer y el tiempo de servicio es inferior o igual a 5 años, su bonificación será de un
15% del Salario básico
Si es hombre y el tiempo de servicio es superior a 6 años, su bonificación será de un 20% del
Salario Básico.
Si es hombre y el tiempo de servicio está entre 1 y 6 años su bonificación será de un 15%
del Salario Básico. -->

<form action="#" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="salario">Salario básico:</label>
        <input type="number" id="salario" name="salario" step="any" required><br><br>

        <label for="genero">Género:</label>
        <select name="genero" id="genero" required>
            <option value="1">Masculino</option>
            <option value="2">Femenino</option>
            <option value="3">Otro</option>
        </select><br><br>

        <label for="años">Tiempo de servicio:</label>
        <input type="number" id="años" name="años" step="any" required><br><br>

        <button type="submit">Calcular Bonificación</button>
    </form>



<?php 

$nombre = $_POST["nombre"];
$genero = intval($_POST["genero"]);
$salario = floatval($_POST["salario"]);
$servicio = floatval($_POST["años"]);

if ($salario < -1) {
    echo "Error, salario no válido";
} else {
    if ($genero == 2 && $servicio > 5) {
        echo "Bonificación 20%: " . ($salario * 0.20) . ", Total " . ($salario + ($salario * 0.20));
    } else if ($genero == 2 && $servicio <= 5) {
        echo "Bonificación 15%: " . ($salario * 0.15) . ", Total " . ($salario + ($salario * 0.15));
    } else if ($genero == 1 && $servicio > 6) {
        echo "Bonificación 20%: " . ($salario * 0.20) . ", Total " . ($salario + ($salario * 0.20));
    } else if ($genero == 1 && $servicio > 1 && $servicio <= 6) {
        echo "Bonificación 15%: " . ($salario * 0.15) . ", Total " . ($salario + ($salario * 0.15));
    } else if ($genero == 3) {
        echo "Bonificación 10%: " . ($salario * 0.10) . ", Total " . ($salario + ($salario * 0.10));
    }
}
?>
