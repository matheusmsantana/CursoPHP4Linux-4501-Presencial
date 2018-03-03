<?php

class Aluno
{
	public $nome;
}

$matheus = new Aluno();
$matheus->nome = "matheus";
echo $matheus->nome;

$joao = clone $matheus;

echo $joao->nome;
$joao->nome = "joao";

echo $joao->nome;
echo $matheus->nome;