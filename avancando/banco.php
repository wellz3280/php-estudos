<?php
	//array associativos e foreach
	require_once 'funcoes.php';
	
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

	$contasCorrentes [12767278912]= [
			'titular' => 'cleide',
			'saldo' => 120000
		];

	$contasCorrentes[16339472903] = sacar($contasCorrentes[16339472903],500);
	
	$contasCorrentes[36529972803] = depositar($contasCorrentes[36529972803],3500);

	titularcomletrasmaiscula($contasCorrentes[36529972803]);
	
	unset($contasCorrentes [12767278912]);

	//foreach (para cada um)
foreach($contasCorrentes as $cpf => $contas){
	//list
	['titular' => $titular, 'saldo' => $saldo ]= $contas;
	
	exibeMensagem( "$cpf $titular $saldo");
}	
	