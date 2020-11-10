<?php

$numero = $_POST["numero"];

function parImpar($numero)
{
    if ($numero % 2 == 0) {
        echo "O número é par";
    } elseif ($numero == 0) {
        echo "O valor é nulo";
    } else {
        echo "O número é ímpar";
    }
}

parImpar($numero);
