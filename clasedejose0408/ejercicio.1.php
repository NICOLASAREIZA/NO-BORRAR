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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["candidato"])) {
        votar($_POST["candidato"]);
    } else {
        echo "Por favor, seleccione un candidato.";
    }
}

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

function mostrarResultados()
{
    $sergioVotes = $_COOKIE['sergioVotes'] ?? 0;
    $yiderVotes = $_COOKIE['yiderVotes'] ?? 0;
    $franklinVotes = $_COOKIE['franklinVotes'] ?? 0;
    $blankVotes = $_COOKIE['blankVotes'] ?? 0;

    $votosTotales = $sergioVotes + $yiderVotes + $franklinVotes + $blankVotes;
    echo "Votos totales: $votosTotales<br>";

    $ganador = '';

    if ($sergioVotes >= $yiderVotes && $sergioVotes >= $franklinVotes && $sergioVotes >= $blankVotes) {
        $ganador = "Sergio Mauricio Zúñiga";
    } elseif ($yiderVotes >= $sergioVotes && $yiderVotes >= $franklinVotes && $yiderVotes >= $blankVotes) {
        $ganador = "Yider Luna Joven";
    } elseif ($franklinVotes >= $sergioVotes && $franklinVotes >= $yiderVotes && $franklinVotes >= $blankVotes) {
        $ganador = "Franklin Alexander Vega";
    } elseif ($blankVotes >= $sergioVotes && $blankVotes >= $yiderVotes && $blankVotes >= $franklinVotes) {
        $ganador = "Voto en blanco";
    } elseif ($sergioVotes == $yiderVotes){
        $ganador = "Sergio Mauiricio Zuñiga esta en empate con Yider Luna Joven ";
    } elseif ($sergioVotes == $blankVotes){
        $ganador = "Sergio Mauiricio Zuñiga esta en empate con Yider Luna Joven ";
    } elseif ($sergioVotes == $franklinVotes){
        $ganador = "Sergio Mauiricio Zuñiga esta en empate con Franklin Alexander Vega";
    } elseif ($yiderVotes == $franklinVotes){
        $ganador = "Yider Luna Joven esta en empate con Franklin Alexander Vega";
    }
    echo "Ganador: $ganador con " . max([$sergioVotes, $yiderVotes, $franklinVotes, $blankVotes]) . " votos.";
}

?>