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

foreach($contasCorrentes as $cpf => $contas){
	echo $cpf. PHP_EOL;
}	
	