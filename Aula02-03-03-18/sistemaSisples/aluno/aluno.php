<?php

namespace Escola\Aluno

use Escola\Aluno\Aluno;

class Aluno
{
	//Atributos
	private $nome;
	private $email;

	//Metodo construtos
	public function __construct(string $nome,string $email)
	{
		$this->nome = $nome;
		$this->email = $email;
	}

	//METODOS
	public function getNome()
	{
    	return $this->nome;
	}

	public function setNome($nome)
	{
    	return $this->nome = $nome;
	}

	public function getEmail()
	{
	    return $this->email;
	}
	
	public function setEmail($email)
	{
	    return $this->email = $email;
	}
}