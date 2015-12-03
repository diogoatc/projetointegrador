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
		while ( @$row = $rs->fetch ( PDO::FETCH_OBJ ) ) {
			


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
 class Material{
 	public $nomealuno;
 	public $raaluno;
 	public $ordemservico;
 	public $materiais;
 
 }
 class emprestados extends Conecta{
 	public function listatudo(){
 		$this->conectar();
 		$rs=$this->conexao->query("SELECT relac_aluno_material.ordemservico as ordemservico, aluno.nome as nome, relac_aluno_material.ra_aluno as raaluno, materiais.materiais as materiais FROM materiais INNER JOIN relac_aluno_material ON relac_aluno_material.id_material=materiais.id INNER JOIN aluno ON relac_aluno_material.ra_aluno=aluno.ra");
 		
 		while ($row = $rs->fetch (PDO::FETCH_OBJ)){
 			
 			$b= new Material();
 			$b->nomealuno=$row->nome;
 			$b->raaluno=$row->raaluno;
 			$b->ordemservico=$row->ordemservico;
 			$b->materiais=$row->materiais;
 			$todosmateriais[]=$b;
 		}
 		
 		
 		return @$todosmateriais;
 	}
 
 
 }
 //TODO: Implementar a classe deleta para chamar na tela2
 
	class deleta extends Conecta{
		public function deletamaterial($id){
			$this->conectar();
			$rs=$this->conexao->query("DELETE FROM relac_aluno_material WHERE ordemservico=$id");
			$rs->execute();
			header("refresh: 0.0;tela3.php");
			
		}
		
	}


?>