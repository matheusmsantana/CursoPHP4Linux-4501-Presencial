<?php 

//criar uma classe chamada conta
//ele deve ter dois atributos
//numconta saldo
//voce deve atribuir valores para esses atributos
//mostrar na tela a seguinte mensagem
//saldo atual da conta x e x
//criar dois metodos sacar(valor) e depositar (valor);
//estou sacando x;
//estou depositando x;
//alterar o valor do atributo saldo
//exibir o saldo atualizado
//criar funcao getSaldo para retornar o saldo

class Conta
{
	public $numConta;
	private $saldo;

	public function sacar(int $valor)
	{
		$this->saldo += $valor;
		//echo "estou depositando " . $valor . "</br>";
	}

	public function depositar(int $valor)
	{
		$this->saldo -=$valor;
		//echo "estou depositando " . $valor . "</br>";
	}

	public function getSaldo()
	{
		return $this->saldo;
	}

}

$conta = new Conta();

$conta->numConta = "xpto";
//$conta->saldo = "1.000,00";

//echo "o numero da sua conta é $conta->numConta </br> o saldo atual da sua conta é $conta->saldo </br>";


$conta->sacar(20);
//$conta->depositar(20);	

//var_dump($conta->saldo);

var_dump($conta->getSaldo());