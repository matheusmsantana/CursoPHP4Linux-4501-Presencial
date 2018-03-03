<?php

interface FreteStrategy
{
	public function calcular();
}

Class FreteNormal
{
	public function calcular(int $preco)
	{
		return 5 + $preco;
	}
}

Class FreteExpresso
{
	public function calcular(int $preco)
	{
		return 10 + $preco;
	}
}

Class FreteTurbo
{
	public function calcular(int $preco)
	{
		return 15 + $preco;
	}
}

class Pedido
{
	//	private $FreteStrategy;
	private $preco = 0;
	public function __construct(int $preco,FreteStrategy $tipoFrete)
	{
		$this->FreteStrategy = $tipoFrete;
		$this->preco = $preco;
	}

	public function calcularTotalPedido()
	{
		return $this->totalPedido += $this->FreteStrategy->calcular();
	}
}	

$test = new Pedido(50,new FreteTurbo());
echo $test->calcularTotalPedido();	

//Exemplo sem desgner pattern
/* 
class Pedido
{
	public function __construct($tipoFrete)
	{
		if($tipoFrete == "frete_normal"){
			echo "frete normal";
		}elseif($tipoFrete === 'frete_expresso'){
			echo 'Frete expresso';
		}elseif($tipoFrete === 'fret_turbo'){
			echo 'frete turbo';
		}
	}
}

$pedido = new Pedido('frete_normal');*/