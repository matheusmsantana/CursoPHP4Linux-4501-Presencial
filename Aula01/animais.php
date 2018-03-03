<?php

class Animais
{
	protected $genero;
	private $cor;
}

class Cachorro extends Animais
{

}

class Gato extends Animais
{

}

$dog = new Cachorro;
$cat = new Gato;

var_dump($dog->genero);
var_dump($cat);