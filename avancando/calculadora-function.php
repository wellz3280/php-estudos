<?php

	
	function soma($f1,$f2)
	{
		$resultado = $f1 + $f2;

		return $resultado;
	}
	
	function subtrair($f1,$f2)
	{
		$resultado = $f1 - $f2;

		return $resultado;
	}

	function multiplicar($f1,$f2)
	{
		$resultado = $f1 * $f2;

		return $resultado;
	}

	function dividir($f1,$f2)
	{
		$resultado = $f1 /$f2;

		return $resultado;
	}


	function exibeValor($exibimdovalor)
	{
		echo $exibimdovalor. PHP_EOL;
	}

	$fator1 = 540;
	$fator2 = 200;

	exibeValor(subtrair($fator1,$fator2));