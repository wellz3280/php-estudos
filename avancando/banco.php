<?php
	//array associativos e foreach
	
	function sacar($conta ,$valorAsacar)
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
	

	function exibeMensagem($mensagem)
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

	$contasCorrentes[16339472903] = sacar($contasCorrentes[16339472903],500);

	
	//foreach (para cada um)
foreach($contasCorrentes as $cpf => $contas){
	exibeMensagem( $cpf." ".$contas['titular']." ".$contas['saldo']);
}	
	