<?php

	$idade = 30;
	$numeroDePessoas = 5;

	echo "Você só pode entrar se tiver mais do que 18 anos.".PHP_EOL;
	echo "Ou se tiver acomapachado de um adulto.".PHP_EOL;

	if($idade >= 18 ){
		echo "Você tem $idade anos. Pode entrar sozinho".PHP_EOL;
	}else if ($idade >= 16 && $numeroDePessoas >1) {
				echo PHP_EOL."Você tem $idade anos, está acomapachado(a) de um adulto então pode entrar.".PHP_EOL;
		}
			else{
				echo PHP_EOL."Você tem apenas $idade anos e não esta acomapachado de um adulto voçê não pode entrar.".PHP_EOL;
			}
	

	echo PHP_EOL. "ADEUS !!!";