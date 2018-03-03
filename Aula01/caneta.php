<?php

//Criando a classe Caneta
class Caneta
{	
	//Atributos/Propriedades
	public $cor;
	public $marca;
	public $tampada;

	//Contrutores
	public function __construsct()
	{
		$this->cor = $cor;
		$this->marca = $marca;
		$this->tampada = $tampada;
	}

	//Métodos
	public function escrever(string $texto)
	{
		echo "estou escrevendo: " . $texto;
	}

	public function destampar()
	{	
		//Alterando o valor do atrabuto $tampada da classe caneta
		$this->tampada = false;
	}

	public function tamapada()
	{	
		//Alterando o valor do atrabuto $tampada da classe caneta
		$this->tampada = true;
	}

	public function getCor()
	{
		return $this->cor;
	}

	public function setCor(string $cor)
	{
		$this->cor = $cor;
	}

	public function getMarca()
	{
		$this->marca;
	}

	public function setMarca(string $marca)
	{
		$this->marca = $marca;
	}

}

//Instanciando a classe c
$azul = new Caneta();
$vermelha = new Caneta();

$azul->cor = "azul";
$azul->marca = "BIC";

$vermelha->cor = "vermelha";
$vermelha->marca = "BIC";

echo "<pre>";
var_dump($azul->cor);
var_dump($vermelha->cor);		

echo "<hr>";
$azul->escrever("hello mundo");
echo "</br>";	
$vermelha->escrever("ola mundo");

$azul->tamapada();
$vermelha->destampar();

var_dump($vermelha->tampada);
var_dump($azul->tampada);

var_dump($vermelha->getCor());

$vermelha->setCor("preta");
var_dump($vermelha->getCor());

$vermelha->__construsct("vermelha","","");

