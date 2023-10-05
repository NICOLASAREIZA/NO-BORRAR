<form action="#" method = "post"> 
    <input step="any" type="number" name = "altura" placeholder= "Ingrese su altura aproximada">
    <input type="text" name = "iniciales" placeholder= "Ingrese sus iniciales">
    <button type = "submit">Enviar</button>
</form>

<?php

$altura = $_POST ['altura'];
$iniciales = $_POST ['iniciales'];

$porciones = explode(".", $altura);
if ($altura > 0 && $porciones > 0) {
    echo "Sus iniciales son:  ".$iniciales." y su altura es: ".$porciones[0]." metro y ".$porciones[1]." centimetros";
}elseif ($altura < 0) {
    echo "altura baja";
}

?>