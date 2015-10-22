<?php

 function pesquisaaluno(){
	
 	
 	$ra= $_POST['ra'];
 	
 	
 	
 	$mysqli = new mysqli('localhost', 'root', '', 'alunos');
	
 	if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
 	
 	$sql = "SELECT * FROM aluno WHERE ra=$ra";
 	
 	$query = $mysqli->query($sql);
 	
 	while ($dados = $query->fetch_array()) {
 		echo $dados['nome']."<br/>";
 		echo $dados['ra']."<br/>";
 		echo $dados['externo']."<br/>";
 	}
 	
}
if(isset($_POST['pesquisa'])){
pesquisaaluno();
}

?>

<form action="" name="pesquisa" method="post">
	<input type="text" name="ra">
	<input type="submit" name="pesquisa">


</form>
