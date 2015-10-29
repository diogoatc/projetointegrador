<?php
include_once 'class_bd.php';
class aluno {
	private $ra, $nome, $turma, $externo;
	public function getRa() {
		return $this->ra;
	}
	public function setRa($ra) {
		$this->ra = $ra;
	}
	public function getNome() {
		return $this->nome;
	}
	public function setNome($nome) {
		$this->nome = $nome;
	}
	public function getTurma() {
		return $this->turma;
	}
	public function setTurma($turma) {
		$this->turma = $turma;
	}
	public function getExterno() {
		return $this->externo;
	}
	public function setExterno($externo) {
		$this->externo = $externo;
	}
}

?>