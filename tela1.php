<?php

class alunos{
	private $nome;
	private $ra;
	private $turma;
	private $externo;

 function pesquisaaluno(){
	
 	
 	$ra= $_POST['ra'];
 	
 	
 	
 	$mysqli = new mysqli('localhost', 'root', '', 'alunos');
	
 	if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
 	
 	$sql = "SELECT * FROM aluno WHERE ra=$ra";
 	
 	$query = $mysqli->query($sql);
 	
 	while ($dados = $query->fetch_array()) {
 		$dadosnome=$dados['nome'];
 		$dadosra=$dados['ra'];
 		$dadosexterno=$dados['externo'];
 		$dadoscurso=$dados['curso'];
 	}
 		echo $dadosnome."<br/>";
 		echo $dadosra."<br/>";
 		echo $dadosexterno."<br/>";
 		echo $dadoscurso."<br/>";
 		
 	mysqli_close($mysqli);
}
}

if (isset ( $_POST ['pesquisa'] )) {
	$x=new  alunos();
	$x->pesquisaaluno();
}
?>

<form action="" name="pesquisa" method="post">
	<input type="text" name="ra"> <input type="submit" name="pesquisa">


</form>
