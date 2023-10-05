<!-- Crea una función llamada "esPalindromo" que reciba una cadena de texto como parámetro y devuelva true si la cadena es un palindromo y false  si no lo es.
Un polindromo es una palabra o frase que se lee igual de izquierda a derecha y de derecha a izquierda, ignorando los espacios y signos de puntuación. -->


<form action="#" method="post">
    <input step="any" type="text" name="polindromo" placeholder="ingresa la palabra" required>
    <button type="submit">Enviar</button>
</form>

<?php

function esPalindromo(){
    $resultado = strtolower($_POST["polindromo"]);
    $polidromo = strrev($resultado);
if($polidromo == $resultado){
    echo "la palabra '$resultado' es un polidromo.\n";
}else{
    $polidromo = strrev($resultado);
    echo "la palabra '$resultado' no es un polidromo.\n";
}
}
echo esPalindromo();
?>