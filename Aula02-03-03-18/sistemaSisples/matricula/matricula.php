<?php

namespace Escola\Matricula

class Matricula
{
	private $aluno;
	private $turma;

	public function __construct(Aluno $aluno, Turma $turma)
	{
		$this->aluno = $aluno;
		$this->turma = $turma;
	}

	public function getAluno()
	{
		return $this->aluno;
	}

	public function setAluno(Aluno $aluno)
	{
		return $this->aluno = $aluno;
	}