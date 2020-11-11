<?php

$numero1;
$numero2;
$aux = 0;

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];

function ordemCrescente($numero1, $numero2, $aux)
{
    if ($numero1 > $numero2) {
        $aux = $numero1;
        $numero1 = $numero2;
        $numero2 = $aux;
    }

    echo $numero1 . " " . " " . $numero2;
}

ordemCrescente($numero1, $numero2, $aux);
