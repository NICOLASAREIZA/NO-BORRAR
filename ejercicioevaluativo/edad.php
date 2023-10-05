<form action="verificar_anemia.php" method="post">
        <select name="edades">
            <option value="#"></option>
            <option value="1"></option>
            <option value="2"></option>
            <option value="3"></option>
            <option value="4"></option>
            <option value="5"></option>
            <option value="6"></option>
            <option value="7"></option>
            <option value="8"></option>
        </select>
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" required>
        <select name="unidadEdad">
            <option value="meses">Meses</option>
            <option value="años">Años</option>
        </select><br><br>
        
        <label for="sexo">Sexo:</label>
        <input type="text" name="sexo" id="sexo" required><br><br>
        
        <label for="nivelHemoglobina">Nivel de Hemoglobina:</label>
        <input type="number" step="0.1" name="nivelHemoglobina" id="nivelHemoglobina" required><br><br>
        
        <input type="submit" value="Verificar">
    </form>

<?php

function verificarAnemia($edad, $sexo, $nivelHemoglobina) {
    $resultado = "";
    
    $sexo = strtolower($sexo);
    
    if ($edad >= 0 && $edad <= 1) {
        $nivelRequerido = 13;
    } elseif ($edad > 1 && $edad <= 6) {
        $nivelRequerido = 10;
    } elseif ($edad > 6 && $edad <= 12) {
        $nivelRequerido = 11;
    } elseif ($edad > 12 && $edad <= 60) {
        $nivelRequerido = ($sexo === 'mujeres') ? 12 : 14;
    } elseif ($edad > 60 && $sexo === 'mujeres') {
        $nivelRequerido = 12;
    } elseif ($edad > 60 && $sexo === 'hombres') {
        $nivelRequerido = 14;
    } else {
        $resultado = "Error: Edad o sexo no válidos.";
        return $resultado;
    }
    if ($nivelHemoglobina < $nivelRequerido) {
        $resultado = "Positivo: Tiene anemia.";
    } else {
        $resultado = "Negativo: No tiene anemia.";
    }
    return $resultado;
}

// Datos de ejemplo
$edad = ""; // Ingresa la edad aquí
$sexo = ""; // Ingresa el sexo aquí (mayúsculas o minúsculas)
$nivelHemoglobina = ""; // Ingresa el nivel de hemoglobina aquí

// Verificar anemia y mostrar resultado
$resultadoAnemia = verificarAnemia($edad, $sexo, $nivelHemoglobina);
echo $resultadoAnemia;

?>




?>