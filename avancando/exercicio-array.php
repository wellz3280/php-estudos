<?php
    
    function notas($n1,$n2,$n3,$n4){
       
     $resultado =  ($n1+$n2+$n3+$n4) / 4;

        if($resultado <= 5)
        {
            exibeMensagem($resultado." REPROVADO");
            
        }
        else
        {
            exibeMensagem ($resultado." APROVADO");

        }
        

        return $resultado;
    }


    function exibeMensagem($mensagem)
    {
        echo $mensagem . PHP_EOL;
    }

 $aluno = [
 	10325 =>
 	[
 		'nome' => 'whashiton',
 		'nota1bi' => 4.0,
 		'nota2bi' => 3.0,
 		'nota3bi' => 2.0,
 		'nota4bi' => 1.5
 	],

 	10326 =>
 	[
 		'nome' => 'Elizangela',
 		'nota1bi' => 7.0,
 		'nota2bi' => 8.5,
 		'nota3bi' => 7.5,
 		'nota4bi' => 8.5
 	],

 	10327 =>
 	[
 		'nome' => 'whashiton',
 		'nota1bi' => 7.5,
 		'nota2bi' => 9.0,
 		'nota3bi' => 6.0,
 		'nota4bi' => 5.5
 	]
 
 ];	




 foreach ($aluno as $ra => $alunaNotas) {

    notas($alunaNotas['nota1bi'],$alunaNotas['nota2bi'],$alunaNotas['nota3bi'],$alunaNotas['nota4bi']);

 	exibeMensagem($ra." ".$alunaNotas['nome']." / ".$alunaNotas['nota1bi']." / ".$alunaNotas['nota2bi']." / ".$alunaNotas['nota3bi']." / ".$alunaNotas['nota4bi']);
 }