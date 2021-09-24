<?php

	/*
		tipos de dados em um array
		o php só usa como chaves de array associativo,
		tipo inteiros e string.
	*/
	$array = [
		1 => 'a'
	];	

	foreach($array as $item){
		echo $item . PHP_EOL
	}