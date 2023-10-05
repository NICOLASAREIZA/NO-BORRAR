
<form method="post">
        <p>Seleccione su candidato:</p>
        <input type="radio" name="candidato" value="1">Sergio Mauricio Zúñiga<br>
        <input type="radio" name="candidato" value="2">Yider Luna Joven<br>
        <input type="radio" name="candidato" value="3">Franklin Alexander Vega<br>
        <input type="radio" name="candidato" value="4">Voto en blanco<br>
        <input type="submit" value="Votar">
    </form>

    <?php
    if (isset($_COOKIE['sergioVotes']) && isset($_COOKIE['yiderVotes']) && isset($_COOKIE['franklinVotes']) && isset($_COOKIE['blankVotes'])) {
        mostrarResultados();
    } else {
        echo "Votos totales: 0<br>";
        echo "Ganador: No hay votos aún.";
    }
    ?>

    <br>
    <a href="?reset=true">Reiniciar Votos</a>

    <?php
    if (isset($_GET['reset']) && $_GET['reset'] === 'true') {
        setcookie('sergioVotes', 0, time() - 3600);
        setcookie('yiderVotes', 0, time() - 3600);
        setcookie('franklinVotes', 0, time() - 3600);
        setcookie('blankVotes', 0, time() - 3600);
        header('Location: ' . $_SERVER['PHP_SELF']);
    }
    ?>


<?php
// Comprobamos si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["candidato"])) {
        votar($_POST["candidato"]);
    } else {
        echo "Por favor, seleccione un candidato.";
    }
}

// Función para incrementar el voto del candidato seleccionado
function votar($candidato)
{
    if (!isset($_COOKIE['sergioVotes'])) {
        setcookie('sergioVotes', 0, time() + 3600);
    }
    if (!isset($_COOKIE['yiderVotes'])) {
        setcookie('yiderVotes', 0, time() + 3600);
    }
    if (!isset($_COOKIE['franklinVotes'])) {
        setcookie('franklinVotes', 0, time() + 3600);
    }
    if (!isset($_COOKIE['blankVotes'])) {
        setcookie('blankVotes', 0, time() + 3600);
    }

    switch ($candidato) {
        case 1:
            setcookie('sergioVotes', $_COOKIE['sergioVotes'] + 1, time() + 3600);
            break;
        case 2:
            setcookie('yiderVotes', $_COOKIE['yiderVotes'] + 1, time() + 3600);
            break;
        case 3:
            setcookie('franklinVotes', $_COOKIE['franklinVotes'] + 1, time() + 3600);
            break;
        case 4:
            setcookie('blankVotes', $_COOKIE['blankVotes'] + 1, time() + 3600);
            break;
        default:
            echo "Opción no válida";
            break;
    }
}

// Función para mostrar el ganador y la cantidad de votos totales
function mostrarResultados()
{
    $sergioVotes = $_COOKIE['sergioVotes'] ?? 0;
    $yiderVotes = $_COOKIE['yiderVotes'] ?? 0;
    $franklinVotes = $_COOKIE['franklinVotes'] ?? 0;
    $blankVotes = $_COOKIE['blankVotes'] ?? 0;

    $votosTotales = $sergioVotes + $yiderVotes + $franklinVotes + $blankVotes;
    echo "Votos totales: $votosTotales<br>";

    $ganador = '';
    $empate = false;
    $maxVotes = max([$sergioVotes, $yiderVotes, $franklinVotes, $blankVotes]);

    if ($maxVotes == $sergioVotes) {
        $ganador .= "Sergio Mauricio Zúñiga, ";
    }
    if ($maxVotes == $yiderVotes) {
        $ganador .= "Yider Luna Joven, ";
    }
    if ($maxVotes == $franklinVotes) {
        $ganador .= "Franklin Alexander Vega, ";
    }
    if ($maxVotes == $blankVotes) {
        $ganador .= "Voto en blanco, ";
    }

    $ganador = rtrim($ganador, ', ');

    if (substr_count($ganador, ',') >= 1) {
        $empate = true;
    }

    echo "Ganador: ";
    if ($empate) {
        echo "Empate entre $ganador con $maxVotes votos.";
    } else {
        echo "$ganador con $maxVotes votos.";
    }
}
?>