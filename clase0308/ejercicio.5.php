<!-- Escribe una función llamada "FierroAlv" que imprima los números del 1 al 100,
pero para los múltiplos de 3 imprime "Peso" en lugar del número y para los múltiplos 
de 5 imprime "Pluma". Para los números que son múltiplos de ambos, imprime "PesoPluma" -->


<?php

for ($i = 1; $i <= 100; $i++) {
    echo "<br>";
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "PesoPluma";
    }else if ($i % 3 == 0) {
        echo "Peso";
    } else if ($i % 5 == 0) {
        echo "Pluma";
    } else {
        echo $i;
    }
}

