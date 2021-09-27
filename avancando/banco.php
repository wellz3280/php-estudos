<?php
	//array associativos e foreach
	
	function sacar( array $conta ,float $valorAsacar): array
	{
			if($valorAsacar > $conta['saldo'])
		{
			exibeMensagem("saldo Insulficiente");
		}
		else{
			$conta['saldo'] -= $valorAsacar ;
		}

		return $conta;
	}
	
	function depositar(array $conta,float $valorAdepositar):array
	{

		if($valorAdepositar > 0){

		$conta['saldo'] += $valorAdepositar;
		}
		else{
			exibeMensagem("Não é possivel realizar este depósito.");
		}

		return $conta;
	}
	


	function exibeMensagem(string $mensagem)
	{
		echo $mensagem . PHP_EOL;
	}


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

	
	//foreach (para cada um)
foreach($contasCorrentes as $cpf => $contas){
	exibeMensagem( "$cpf $contas[titular] $contas[saldo]");
}	
	