<?php

$resultado = 0;
$numero = $_POST["numero"];

function fatorial($numero, $resultado)
{

    if ($numero == 0) {
        $resultado = 1;
    } else {
        $resultado = $numero * fatorial($numero - 1, $resultado);
    }
    return $resultado;
}

echo fatorial($numero, $resultado);
