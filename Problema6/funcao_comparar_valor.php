<?php
$numero1;
$numero2;

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];

function compararValor($numero1, $numero2)
{
    if ($numero1 > $numero2) {
        echo "O primeiro número é maior que o segundo número";
    } else {
        echo "O segundo número é maior que o primeiro número";
    }
}

compararValor($numero1, $numero2);
