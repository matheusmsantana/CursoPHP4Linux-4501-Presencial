<?php  


 class Conta
{	
	//funcao final ela proibe que outras classes que erdem esta possam sobrescrever a funcao com o funcao final
	final public function funcaoafinal(){}
}

class ContaCorrente extends Conta
{
	function funcaoafinal(){

	}
}

//$conta = new Conta;
$contaC = new ContaCorrente; 