<!DOCTYPE html>
<html>
<head>

	<title>SEME</title>
	<!-- SCRIPT PARA REDIRECIONAMENTO PARA A TELA 3 -->
	<script type="text/javascript">
		function Nova(){
			location.href=" tela3.php"
						}
</script>
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="sortcut icon" href="imgs/logo.png" type="image/x-icon" />
</head>
<body>
			<div class="container">



					<form action="tela2.php" name="pesquisa" method="post">
					<h3>Insira o RA: </h3>
	<input type="text" name="ra"> <input class="input" name="pesquisa" type="image" src="imgs/search.png" >


</form>

<?php  //RESULTADO DA VERIFICAÇÃO DE ERROS 
if(isset($_GET['erro'])){
	echo '<p  class="erro">Erro: RA nulo ou não existente</p>';
	
}
if (isset($_GET['emprestado'])){
	echo '<p  class="erro">Erro: Aluno já possui material emprestado</p>';
}
?>
<div class="button">
<input type="image" src="imgs/materiais.png" width="200px" height="100px" onClick="Nova()">
</div>
	

	</div>


			

</body>
</html>