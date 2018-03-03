<?php

//abstract essa funcao indica que essa classe nao pode ser instanciada
/*abstract class Conta
{

}

class ContaCorrente extends Conta
{
	
}

//$conta = new Conta;
$contaC = new ContaCorrente; */	

//metodos abstratos
abstract class Conta
{	
	//todas as classes que heradem desta classe teram que ter esta funcao tambem
	abstract function funcaoabstract();
}

class ContaCorrente extends Conta
{
	function funcaoabstract(){

	}
}

//$conta = new Conta;
$contaC = new ContaCorrente; 