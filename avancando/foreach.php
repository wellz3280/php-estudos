<?php
	//array associativos e foreach


	$contasCorrentes = [

		36529972803 => 
		['titular' => 'weliton',
		'saldo' => 4000],

		26529273804 => 
		['titular' => 'jean',
		'saldo' => 10000],

		16339472903 => 
		['titular' => 'karla',
		'saldo' => 320]
	];
	//adicionando conta a lista
	$contasCorrentes[26429875812] = [
		'titular' => 'claudia',
		'saldo' => 20000

	];

	//foreach (para cada um)
foreach($contasCorrentes as $cpf => $contas){
	echo $cpf." ".$contas['titular']. PHP_EOL;
}	
	