<?php
class bd {
	private $servidor = 'localhost', $usuario = 'root', $senha = '', $bd = 'alunos', $conexao;
	public function conectar() {
		$this->conexao = new mysqli ( $this->servidor, $this->usuario, $this->senha, $this->bd );
		;
		if (mysqli_connect_errno ())
			trigger_error ( mysqli_connect_error () );
	}
	public function query($query) {
		$sql = $mysqli->query ( $query );
		return $sql;
	}
	public function desconecta() {
		mysqli_close ( $this->conexao );
	}
}

?>