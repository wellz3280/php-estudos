<?php

	$carroList = [
		'sb456' =>
	[
		'marca' => 'fiat',
		'modelo' => 'argo',
		'ano' => 2021,
		'cor' => 'prata',
		'tipo' => 'heth',
		'valor' => 65000
	],
		
	
		'sb867' =>
	[
		'marca' => 'ford',
		'modelo' => 'ka',
		'ano' => 2019,
		'cor' => 'preto',
		'tipo' => 'heth',
		'valor' => 45000
	],

	
		'sb885' =>
	[
		'marca' => 'volkswagem',
		'modelo' => 'polo',
		'ano' => 2008,
		'cor' => 'verde',
		'tipo' => 'sedan',
		'valor' => 15000
	]
	];

	$carroList ['sb123'] = [
		'marca' => 'bmw',
		'modelo' => 'S2',
		'ano' => 2015,
		'cor' => 'azul',
		'tipo' => 'heth',
		'valor' => 150000
	];

	foreach($carroList as $chassi => $carros){
		echo $chassi." ". $carros['marca']. " ". $carros['modelo']." ".$carros['ano']." ". $carros['cor']." ".$carros['tipo']." ".$carros['valor'] .PHP_EOL;
	}

