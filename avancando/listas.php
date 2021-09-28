<?php
		
		$idadeList = [21,23,22,15,42,32];

		list($idadeVinicius,$idadeJoao,$idadeMaria) = $idadeList;

		$idadeList[] = 20;
		
		foreach ($idadeList as $idade) {
				
				echo $idade. PHP_EOL;
		}

		