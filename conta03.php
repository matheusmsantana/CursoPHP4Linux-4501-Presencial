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
	private $status;
	private $tipo;

	//Metodos
	/*public function __construsct(int $saldo = 0, string $titular)
	{
		$this->numConta = numConta();
		$this->saldo = $saldo;
		$this->titular = $titular;
	}*/

	public function abrirConta(string $tipo, string $titular){
		if($tipo == "CC"){
			$this->tipo = $tipo;
			$this->saldo = 100;
			$this->titular = $titular;
			$this->status = true;
			$this->numConta = $this->SetnumConta();
		}elseif($tipo == "CP"){
			$this->tipo = $tipo;
			$this->saldo = 100;
			$this->titular = $titular;
			$this->status = true;
			$this->numConta = $this->SetnumConta();
		}else{
			return "tipo invalido";
		}
	}	

	public function fecharConta(){
		
	}

	public function SetnumConta(){
		return $numConta = rand();
	}

	public function getNumConta()
	{	
		if($this->status == true){
			return $this->numConta;
		}else{
			return "Conta inativa";
		}
	}

	public function depositar($valor)
	{
		if($this->status == true){
			$this->saldo += $valor;
		}else{
			return "conta inativa";
		}
	}

	public function sacar($valor)
	{
		if($this->status == true){
			if($this->saldo <= 0){
				return "voce nao pode sacar pois nao tem saldo";
			}else{
				if($valor > $this->saldo){
					return "valor insuficiente";
				}else{
					$this->saldo -= $valor;
				}
			}
		}else{
			return "conta inativa";
		}
	}

	public function getSaldo()
	{	
		if($this->status == true){
			if($this->saldo <0){
				return "voce nao tem saldo";
			}else{
				return $this->saldo;
			}
	
		}else{
			return "conta inativa";
		}
	}

	public function setTitular($titular)
	{	
		if($this->status == true){
		$this->titular = $titular;
		}else{
			return "conta inativa";
		}
	}

	public function getTitular()
	{
		if($this->status == true){
		return $this->titular;
		}else{
			return "conta inativa";
		}
	}

}

$conta = new Conta();

$conta->abrirConta("CC","matheus");
var_dump($conta);
echo "</br>";

echo $conta->sacar(50);
echo "</br>";
var_dump($conta->getSaldo());
echo "</br>";

echo $conta->sacar(50);
echo "</br>";
var_dump($conta->getSaldo());
echo "</br>";

$conta->depositar(100);
var_dump($conta->getSaldo());
echo "</br>";

