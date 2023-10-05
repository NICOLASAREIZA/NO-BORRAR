<form action="#" method="post">
<input step="any" type="number" name="numero" placeholder="Escriba el digito" required>
<button type="submit">Enviar</button>
</form>


<?php




function calcularmetros ($metro){

    $metro = $_POST['numero'];  
    $resultado = $metro*2;
    return $resultado;

}
echo "El resultado es: ".$resultado." centimetros";
