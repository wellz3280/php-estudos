<?php

	/*
		calcular o imc (indíce de massa corporea)
		imc = peso / altura x altura
		
		Magreza, quando o resultado é menor que 18,5 kg/m2;
		Normal, quando o resultado está entre 18,5 e 24,9 kg/m2;
		Sobrepeso, quando o resultado está entre 24,9 e 30 kg/m2;
		Obesidade, quando o resultado é maior que 30 kg/m
	*/

	$altura = 1.80;
	$peso = 95;

	$imc = $peso / $altura ** 2;



	if ($imc < 18.5) {
		echo "seu imc $imc kg/m2 e você esta magro e esta abaixo do recomendado";
	}
	
	else if($imc >= 18.5 and $imc <= 24.9){
		echo "seu imc $imc kg/m2 e você esta em forma.";
	}
	
	else if ($imc > 24.9 and $imc <= 30) {
		echo "seu imc $imc kg/m2 e você esta com sobrepeso e esta abaixo do recomendado";
	}

	else if ($imc > 30) {
		echo "seu imc $imc kg/m2 e você esta Obeso e esta abaixo do recomendado";
	}
	

 	
