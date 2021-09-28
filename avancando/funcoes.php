<?php

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
	

	function titularcomletrasmaiscula(array &$conta)
	{
		$conta['titular'] = strtoupper($conta['titular']);
	}


	function exibeMensagem(string $mensagem)
	{
		echo $mensagem . PHP_EOL;
	}