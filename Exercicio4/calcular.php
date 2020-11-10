<?php

	require_once "classes/Calculadora.php";

	$numero1 = $_POST["numero1"];
	$numero2 = $_POST["numero2"];
	$operacao = $_POST["operacao"];

	$calculadora = new Calculadora();

	$calculadora->setNumero1($numero1);
	$calculadora->setNumero2($numero2);

	$calculadora->somar();

	switch ($operacao) {
		case "somar":
			echo "resultado = " . $calculadora->somar();
			break;
		case "subtrair":
			echo "resultado = " . $calculadora->subtrair();
			break;

		case "multiplicar":
			echo "resultado = " . $calculadora->multiplicar();
			break;

		case "dividir":
			echo "resultado = " . $calculadora->dividir();
			break;

		default:
			# code...
			break;
	}

	echo $calculadora->getTotal();

?>