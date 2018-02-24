<?php

//conta
//titular
//saldo
//numConta

//com os atributos genericos 
//contacorrente herdar de conta

//metodos e atributos de cc
//chequeespecial = boolean
//sacar cobrar juros
//depositar cobrar juros

//contapoupanca herdara de conta
//metodos e atributos de cp
//sacar sem juros
//depositar sem juros

class Conta
{
	//atributos
	protected $conta;
	protected $titular;
	protected $saldo;
	protected $numConta;
	protected $tipo;

	//metodos
	public function abrirConta(string $tipo, string $titular){
		if($tipo == "CC"){
			$this->tipo = $tipo;
			$this->saldo = 100;
			$this->titular = $titular;
			$this->numConta = $this->SetnumConta();
		}elseif($tipo == "CP"){
			$this->tipo = $tipo;
			$this->saldo = 150;
			$this->titular = $titular;
			$this->numConta = $this->SetnumConta();
		}else{
			return "tipo invalido";
		}
	}	

	public function SetnumConta(){
		return $numConta = rand();
	}


}

class ContaCC extends Conta
{
	public function sacar($valor)
	{
		$juros = (($valor*5)/100);
		$total = ($juros + $valor); 
		if($this->saldo >= $total){
			$this->saldo -= $valor;
			return $this->saldo;
		}else{
			return "valor insuficiente, seu saldo e: $this->saldo valor do juros a ser cobrado: $juros";
		}

	}

	public function depositar($valor){
		$juros = (($valor*5)/100);
		$this->saldo -= $juros;
		$this->saldo += $valor; 
		return $this->saldo;
	}

	public function getSaldo(){
		return $this->saldo;
	}

}


class ContaCP extends Conta
{
	public function sacar($valor)
	{
		if($this->saldo < $valor){
			return "valor insuficiente $this->saldo";
		}else{
			$this->saldo -= $valor;
			return $this->saldo;
		}
	}

	public function depositar($valor){
		$this->saldo += $valor; 
		return $this->saldo;
	}

	public function getSaldo()
	{
	    return $this->saldo;
	}
	
}

$contacc = new ContaCC;

$contacc->abrirConta("CC", "matheus");
var_dump($contacc);
echo "<hr>";

echo $contacc->sacar(96);
echo "<hr>";

echo $contacc->depositar(100);
echo "<hr>";	

/*
$contacp = new ContaCP;

$contacp->abrirConta("CP", "matheus");
var_dump($contacp);
echo "<hr>";

echo $contacp->sacar(100);
echo "<hr>";*/	
