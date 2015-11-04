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
		
 class emprestados extends Conecta{
 	public function listatudo(){
 		$this->conectar();
 		$rs=$this->conexao->query("SELECT relac_aluno_material.ordemservico, relac_aluno_material.ra_aluno, materiais.materiais FROM materiais INNER JOIN relac_aluno_material ON relac_aluno_material.id_material=materiais.id");
 		$b= new Material();
 		while ($row = $rs->fetch (PDO::FETCH_OBJ)){
 			
 			
 		echo "<table width='200' border='1' cellspacing='3' cellpadding='2'>
  				<tr>
    				<th scope='row'>$row->ordemservico</th>
    				<td>$row->ra_aluno</td>
    				<td>$row->materiais</td>
  				</tr>
				</table>";
 			
 			
 			
 			
 			
 			
 			
 			$b->raaluno= $row->ra_aluno;
 			$b->ordemservico=$row->ordemservico;
 			$b->materiais=$row->materiais;
 			
 
 		}
 		
 		echo "<a href='tela1.php'>Home></a>";
 		return $b;
 	}
 
 
 }
 
 class Material{
 	public $raaluno;
 	public $ordemservico;
 	public $materiais;
 
 }
	



?>