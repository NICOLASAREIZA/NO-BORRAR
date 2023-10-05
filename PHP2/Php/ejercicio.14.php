<!-- Se tienen un cultivo de café, de los cuales con el uso de la tecnología se recolectan los
siguientes datos para análisis de suelo:
PH (Acidez del suelo) rango adecuado entre 5 y 5.5.
Materia orgánica mayor a 8
Fosforo (P) mayor a 30
Calcio (Ca) mayor a 3
Magnesio (Mg) mayor a 0.9
Potasio (K) mayor a 0.4
Aluminio (Al) menor a 1
Acorde a los datos recolectados identificar si el suelo es apto para la siembra café -->
<form action="#" method="post">
    <input step="any" type="number" name="ph" placeholder="acides del suelo" required><br><br>
    <input step="any" type="number" name="mateariaorganica" placeholder="Material Organica" required><br><br>
    <input step="any" type="number" name="fosforo" placeholder="Fosforo" required><br><br>
    <input step="any" type="number" name="calcio" placeholder="Acido" required><br><br>
    <input step="any" type="number" name="magnesio" placeholder="Magnesio" required><br><br>
    <input step="any" type="number" name="potasio" placeholder="Potacio" required><br><br>
    <input step="any" type="number" name="aluminio" placeholder="Aluminio" required><br><br>
</form>

<?php

$ph = $_POST["ph: "];
$materialorganica = $_POST["materiaorganica: "];
$fosforo = $_POST["fosforo: "];
$calcio = $_POST["calcio: "];
$magnesio = $_POST["magnesio: "];
$potasio = $_POST["potasio: "];
$aluminio = $_POST["aluminio: "];

if ($ph >= 5 && $aluminioph <= 5.5 && 
    $materialorganica > 8 && 
    $fosforo > 30 && 
    $calcio > 3 && 
    $magnesio > 0.9 && 
    $potasio > 0.4 && 
    $aluminio < 1) {
    Echo "El suelo es apto";
} else {
    Echo "El suelo no es apto";
}


?>