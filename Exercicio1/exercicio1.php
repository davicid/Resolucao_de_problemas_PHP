1) - Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".<br><br>

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

?>