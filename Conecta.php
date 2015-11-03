<?php

	class Conecta{
	 public  $conexao;
		public function conectar(){
		
		$servidor= 'localhost';

		$bd = 'alunos';
		$senha = '';
		$usuario = 'root';
		
		$this->conexao = new PDO ( "mysql:host=$servidor;dbname=$bd", $usuario, "$senha" );
	}
}
class listar extends Conecta {
	public function lista() {
		$ra = $_POST ['ra'];
		$this->conectar ();
		$rs = $this->conexao->query ( "SELECT * FROM aluno WHERE ra=$ra" );
		$a = new Aluno ();
		while ( $row = $rs->fetch ( PDO::FETCH_OBJ ) ) {
			


			$a->ra=$row->ra;
			$a->nome=$row->nome;
			$a->regime=$row->regime;
			$a->curso=$row->curso;
			

		}
		return $a;
	}
}



 class Aluno{
 	public $ra;
 	public $nome;
 	public $curso;
 	public $regime;
 	
 }
		

	



?>