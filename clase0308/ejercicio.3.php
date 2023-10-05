<!-- Crea una fución llamada "ordenarArray" que reciba un arreglo de números como parámetro 
y lo ordene de menor a mayor utilizando el algoritmo de ordenamiento burbuja. -->


<form action="#" method="POST">
    <input type="number" name="numero1" id="numero" placeholder="Numero">
    <input type="number" name="numero2" id="numero" placeholder="Numero">
    <input type="number" name="numero3" id="numero" placeholder="Numero">
    <input type="number" name="numero4" id="numero" placeholder="Numero">
    <input type="number" name="numero5" id="numero" placeholder="Numero">
    <button type="submit">Agregar</button>
</form>

<?php
    $array = array();

    $numero1 = intval($_POST['numero1']);
    $numero2 = intval($_POST['numero2']);
    $numero3 = intval($_POST['numero3']);
    $numero4 = intval($_POST['numero4']);
    $numero5 = intval($_POST['numero5']);
    array_push($array, $numero1, $numero2, $numero3, $numero4, $numero5);
    
    echo "Sin ordernar ".json_encode($array);
    
    function ordenarArray($array) {
        for ($i = count($array); $i > 0; $i--) {
            for ($j = 0; $j < $i - 1; $j++) {
                if ($array[$j] > $array[$j + 1]) {
                    $result = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1]  = $result;
                }
            }
        }
        return $array;
    }
    
    $resultado = json_encode(ordenarArray($array));
    echo "<br>";
    echo "Array ordenado ".$resultado;