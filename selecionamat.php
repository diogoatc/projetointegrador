<?php
include "Conecta.php";

class inseremateriais extends Conecta{
	
	public function insere(){
		try{
		$this->conectar();
		$ra=$_POST['raaluno'];
		$material=$_POST['materiais'];
		
			$sql="INSERT INTO relac_aluno_material(ra_aluno,id_material) VALUES(:ra,:id)";
			$stmt=$this->conexao->prepare($sql);
			$stmt->bindParam(':ra', $ra,PDO::PARAM_INT);
			$stmt->bindParam(':id', $material,PDO::PARAM_INT);
			
			$stmt->execute();
		}catch (Exception $e){
			echo 'Error: ' . $e->getMessage();
		}
		
		
		
	}
	
}

$x= new inseremateriais();
$x->insere();
header("location:tela3.php");
?>