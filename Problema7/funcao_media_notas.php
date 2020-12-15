<?php

$notas = [NULL, NULL, NULL];

$notas[0] = $_POST["nota1"];
$notas[1] = $_POST["nota2"];
$notas[2] = $_POST["nota3"];

echo "N1 = " . $notas[0];
echo "<br/>";
echo "N2 = " . $notas[1];
echo "<br/>";
echo "N3 = " . $notas[2];
echo "<br/>";

function calcularMedia($notas)
{
    if ($notas[0] && $notas[1] && $notas[2] != NULL) {
        $notaMedia = ($notas[0] + $notas[1] + $notas[2]) / 3;
        return round($notaMedia, 1);
    } else {
        return NULL;
    }
}

if (calcularMedia($notas) >= 6) {
    echo "A nota media do aluno = " . calcularMedia($notas) . " aprovado";
} else {
    echo "A nota media do aluno = " . calcularMedia($notas) . " reprovado";
}
