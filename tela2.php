

<?php
if (isset ( $_POST ['envia']) )

?>

<?php   //ERRO de RA NULO

if($_POST['ra']==""){
	header('location: index.php?erro');
}
?>

<?php //LISTAGEM DE TODOS AS INFORMA��ES DO ALUNO

include 'Conecta.php';
$x = new listar ();
$aluno = $x->lista ();
	

?>

<?php //ERRO DE RA INCORRETO
if(isset($aluno->ra)==null){
	header('Location: index.php?erro');
	
}

?>
<!DOCTYPE html>
<html>
<head>
<!-- SCRIPT PARA REDIRECIONAR PARA O INDEX -->
<script type="text/javascript">
function Nova()
{
location.href=" index.php"
}
</script>
<link rel="sortcut icon" href="imgs/logo.png" type="image/x-icon" />
	<title>SEME</title>
<link rel="stylesheet" type="text/css" href="css/tela2.css">
</head>
<body> 

		<div class="container">

		<div class="info">
		
		<table class="tabela">




  <tr>
  	<th>RA </th>
    <th><?=$aluno->ra?></th>
  </tr>
  <tr>
  	<th>Nome</th>
    <th><?=$aluno->nome?></th>
  </tr>
  <tr>
  	<th>Curso</th>
    <th><?=$aluno->curso?></th>
  </tr>
  <tr>
  	<th>Regime</th>
    <th><?=$aluno->regime?></th>
</tr>
</table>

		</div>
		<div class="menu">
 <!-- TODO: Listar materiais diretamente do banco de dados (TCC)  -->
			<form method="post" action="selecionamat.php" id="selecionamat">
	<input type="hidden" name="raaluno" value="<?=$aluno->ra?>">
		<select name="materiais">
  			<option value="1">Bola de Campo</option>
  			<option value="2">Bola de Basquete</option>
  			<option value="3">Bola de V�lei</option>
  			<option value="4">Bola de Handball</option>
  			<option value="5">Bola de Tenis</option>
  			<option value="6">Kit Tenis de mesa</option>
  			<option value="7">Coletes</option>
  			<option value="8">Bola de futsal</option>
  			<option value="9">Bola quadra de areia</option>
  			<option value="10">Bicicleta</option>
  			<option value="4">Bola de V�lei de areia</option>
		</select>
	<input type="submit" value="Escolher material" name="seleciona">
			</form>

		</div>
		<div class="botao">
		<input type="image" src="imgs/home.png" width="50px" height="50px" onClick="Nova()">
		</div>
		</div>




</body>
</html>


<?php //VERIFICACAO DE MATERIAL J� EMPRESTADO
$con=new PDO("mysql:host=localhost;dbname=alunos",'root', '');
$ra=$_POST['ra'];
$consulta = $con->query("SELECT ra_aluno FROM relac_aluno_material WHERE ra_aluno=$ra" );
$consulta->execute();
$row = $consulta->rowCount();
if($row>0){
	header('Location: index.php?emprestado');
	
}


?>
