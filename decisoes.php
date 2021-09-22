<?php

	$idade = 25;
	

	echo "Você só pode entrar se tiver mais do que 18 anos.".PHP_EOL;

	if($idade >= 18 ){
		echo "Você tem $idade anos. Pode entrar".PHP_EOL;
	}else{
		echo "Você tem apenas $idade anos. Não pode entrar".PHP_EOL;
	}