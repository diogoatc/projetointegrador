<?php

	class Conecta{
	public $conexao;
		public function conectar(){
		
		$servidor= 'localhost';
		$bd = 'alunos';
		$senha='';
		$usuario='root';
		
		$this->conexao= new PDO("mysql:host=$servidor;dbname=$bd", $usuario, "$senha");
		
}
	}
class listar extends Conecta{
	
	public function lista(){
		$ra="104696";
		$this->conectar();
		$rs= $this->conexao->query("SELECT * FROM aluno WHERE ra=$ra");
		$a=new Aluno();
		while ($row= $rs->fetch(PDO::FETCH_OBJ)){
			
			$a->ra=$row->ra;
			$this->saidara= $row->ra. "<br/>";
			$this->saidanome= $row->nome. "<br/> ";
			$this->saidacurso=$row->curso."<br/>";
			$this->saidaexterno=$row->externo."<br/>";
			
		}
		return $a;
	} 
	
	


}
 class Aluno{
 	public $ra;
 	
 }
		
$x=new listar();
$aluno=$x->lista();
	


?>