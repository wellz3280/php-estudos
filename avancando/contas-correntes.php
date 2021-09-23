<?php
	//array associativos

	$conta1 =[

		'titular' => 'weliton',
		'saldo' => 4000
	]; 

	$conta2 = [
		'titular' => 'jean',
		'saldo' => 10000
	];

	$conta3 = [
		'titular' => 'karla',
		'saldo' => 320
	];



	$contasCorrentes = [$conta1,$conta2,$conta3];

	
	
	for ($i=0; $i < count($contasCorrentes) ; $i++) { 
		echo $contasCorrentes[$i]['titular']. PHP_EOL;
	}
	