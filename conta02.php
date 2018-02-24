<?php

// classe conta

// atributos
// numconta - numero da conta
//saldo - saldo da conta
//tituloar - titutlar da conta
//tipo - tipo da conta, cc ou cp
//status - status, aberto(true) ou fechada(false)

//metodos
//gets e sets: satatus titular
//abrirConta(tipo, titutular);
//se  Conta corrente = saldo 100
//se conta poupanca = 150
//status true

//fecharconta
//nao pode ter dinheiro na conta
//nao pode estar devendo o banco
//status = false

//sacar
//verifica se conta esta aberta
//verifica a quantidade do saldo

//depostiar


//versaldo
//vertitular
//vernumconta
//gerarnumconta
//construtor = nome titutar, saldo, caso nao passe o saldo, saldo = 0, gerar numero da conta

//exibir na tela: o titutlar, o numero da conta, o saldo atural

class Conta
{
	//Atributos
	private $numConta;
	private $saldo;
	private $titular; 

	//Metodos
	public function __construsct($numConta, int $saldo = 0, string $titular)
	{
		$this->numConta = $numConta;
		$this->saldo = $saldo;
		$this->titular = $titular;
	}

	public function setNumConta($numConta)
	{
		$this->numConta = $numConta;
	}

	public function getNumConta()
	{
		return $this->numConta;
	}

	public function depositar($valor)
	{
		$this->saldo += $valor;
	}

	public function sacar($valor)
	{
		$this->saldo -= $valor;
	}

	public function getSaldo()
	{
		return $this->saldo;
	}

	public function setTitular($titular)
	{
		$this->titular = $titular;
	}

	public function getTitular()
	{
		return $this->titular;
	}

}

$conta = new Conta();

$numConta = rand();

$conta->__construsct($numConta,30,"matheus");
var_dump($conta);

//Numero da conta
$conta->setNumConta(4141);
echo "</br>";
var_dump($conta->getNumConta());

//Depositar
$conta->depositar(50);
echo "</br>";
var_dump($conta->getSaldo());

//Sacar
$conta->sacar(50);
echo "</br>";
var_dump($conta->getSaldo());

//Nome
$conta->setTitular("Caio");
echo "</br>";
var_dump($conta->getTitular());









