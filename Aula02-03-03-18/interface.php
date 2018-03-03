<?php

//Funcao nativa do PHP interface: e como se fosse uma classe porem me permite erdar multiplas classes
//ela tambem obriga as classes que a extenderem a implementar os seus metodos
interface ContaInterface
{
	public function sacar();
	public function depositar();
	public function verSaldo();
}

class ContaCorrente implements ContaInterface{
	public function sacar(){};
	public function depositar(){};
	public function verSaldo(){};
}