<?php
include "Conecta.php";
//TODO: Retirar essa p�gina e jogar na classe da p�gina conecta 
$id=$_GET['id'];
$x=new deleta();
$x->deletamaterial($id);



/*$con=new PDO("mysql:host=localhost;dbname=alunos",'root', '');
$consulta = $con->query("DELETE FROM relac_aluno_material WHERE ordemservico=$id" );
$consulta->execute();

header("refresh: 0.0;tela3.php");*/