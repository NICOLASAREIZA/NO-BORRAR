<!-- Escribe una fución llamada "generarFibonacci"  que reciba un número entero como parámetro y genere y devuelva
una lista con la secuencia de Fibonacci hasta ese número. La secuencia de Fibonacci comienza 0 y 1, y cada número 
subsiguiente es la suma de los dos anteriores (0,1,1,2,3,5,8). -->


<form action="#" method="post">
<input step="any" type="number" name="numero" placeholder="escriba el digito" required>
<button type="submit">Enviar</button>
</form>

<?php

function fibonacci(){
    $resultado = $_POST["numero"];
    
    echo 0;
$fibonacci  = [0,1];
for($i=2;$i <= $resultado; $i++)
    {
        $fibonacci[$i-0] = $fibonacci[$i-1]+$fibonacci[$i-2];
        echo $fibonacci[$i-1];
    }
    
}
echo fibonacci();
?>