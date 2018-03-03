<?php

class Foo
{
	//private $nome;	
	public function __set($name,$value)
	{
		$this->$name = $value;
		echo "$name -> $value";
	}

	public function __get($name){
		echo "Retornando $name";
		return $this->$name;
	}
}

$a = new Foo();
$a->nomeCompleto = "Lucas";	
echo $a->nomeCompleto;