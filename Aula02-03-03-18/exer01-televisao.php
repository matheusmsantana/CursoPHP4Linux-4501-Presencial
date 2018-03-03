<?php

interface Televisao
{
	public function aumentaVolume();
	public function diminuiVolume();
	public function trocarCanal($canal);
	public function liga();
	public function desliga();
}

class Televisao01 implements Televisao{
	//ATRIBUTOS
	private $volume;
	private $canal;
	private $estado;

	//CONSTRUTORES
	public function __construsct(int $volume = 10, int $canal = 5, bool $estado = false)
	{
		$this->volume = $volume;
		$this->canal = $canal;
		$this->estado = $estado;
	}

	//METODOS
	public function aumentaVolume(){
		$this->volume++;
		return $this->volume;
	}
	public function diminuiVolume(){
		$this->volume--;
		return $this->volume;
	}
	public function trocarCanal($canal){
		$this->canal = $canal;
		return $this->canal;
	}
	public function liga(){
		$this->estado = true;
		return $this->estado;
	}
	public function desliga(){
		$this->estado = false;
		return $this->estado;
	}
}

$televisao01 = new Televisao01();

$televisao01->__construsct();

echo'<pre>';
var_dump($televisao01);

echo'</br>';
var_dump($televisao01->aumentaVolume());	

echo'</br>';
var_dump($televisao01->diminuiVolume());

echo'</br>';
var_dump($televisao01->trocarCanal(20));

echo'</br>';
var_dump($televisao01->liga());

echo'</br>';
var_dump($televisao01->desliga());

