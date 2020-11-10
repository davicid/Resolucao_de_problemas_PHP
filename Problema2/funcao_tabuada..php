<?php

$contador = 0;

$numero = $_POST["numero"];

function tabuada($numero, $contador)
{
    if ($numero < 0) {
        echo "número invalido";
    } else {
        while ($contador <= 10) {
            echo $numero * $contador . "<br>";
            $contador++;
        }
    }
}

tabuada($numero, $contador);
