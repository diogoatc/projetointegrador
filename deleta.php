<?php
//TODO: Retirar essa página e jogar na classe da página conecta 
$id=$_GET['id'];
$con=new PDO("mysql:host=localhost;dbname=alunos",'root', '');
$consulta = $con->query("DELETE FROM relac_aluno_material WHERE ordemservico=$id" );
$consulta->execute();

header("refresh: 0.0;tela3.php");
?>