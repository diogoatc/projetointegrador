<?php
include "Conecta.php";
include "tela2.php";
$raaluno=$aluno->ra;
class inseremateriais extends Conecta{
	
	public function insere(){
		
		global $raaluno;
		$material=$_POST['materiais'];
		
			$sql="INSERT INTO relac_aluno_material(ra,id) VALUES(:ra,:id)";
			$stmt=$pdo->prepare($sql);
			$stmt->bindParam(':ra', $raaluno,PDO::PARAM_INT);
			$stmt->bindParam(':id', $material,PDO::PARAM_INT);
			
			$stmt->execute();
		
		
		
		
	}
	
}



?>