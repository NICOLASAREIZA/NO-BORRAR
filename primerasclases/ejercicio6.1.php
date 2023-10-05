<?php
/*pida a un usuario la edad y genero, para que el sistema le indique si ya esta en la edad 
para presencionarse. tenga encuenta que un hombre se puede pencionar a los 60 años o mas, mientras que las 
mujeres a los 54 años*/
$edad = 68;
$genero = "mujer";

if ($genero === "masculino" ){
    if ($edad >= 60)
    echo "El puede jubilarse";

    else{
        echo "No cuentas con el requisito";
    }
}
if ($genero === "mujer" ){
    if ($edad >= 54)
    echo " ella puede jubilarse";

    else{
        echo "No cuentas con el requisito";
    }

}

?>
