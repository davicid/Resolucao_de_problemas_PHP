<?php

$numero;

$numero = $_POST["numero"];

function verificarNumero($numero)
{
    if ($numero > 0) {
        echo "O valor é positivo";
    } elseif ($numero < 0) {
        echo "O valor é negativo";
    } else {
        echo "O valor é igual a zero";
    }
}

verificarNumero($numero);
