<!-- Escribe una función que cualcule la suma de todos los digítos entero dado. 
Por ejemplo, si el número es 1234, la suma sería 1+2+3+4 = 10. -->


<form action="#" method="POST">
    <input type="text" placeholder="Numero" name="numero">
    <button type="submit">Calcular</button>
</form>

<?php

$numeros = $_POST['numero'];

$splitNumeros = str_split($numeros);
$numeros = 0;

foreach ($splitNumeros as $split) {
    $numeros += intval($split);
}

echo $numeros;

?>
