<?php
	/*
		Laço enquanto (while)
		$contator = 1;
	while($contador <= 15){
		echo "#".$contador.PHP_EOL;
		$contador += +1;
	}
	*/

	//Laço Para (for)

	for($contador = 1;$contador <= 15;$contador++)
	{
		if( $contador == 13){
			continue;
			//break; interrompe o loop
		}
		echo "#".$contador.PHP_EOL;
	}