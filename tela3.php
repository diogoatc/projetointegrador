<html>
<head>
<title>SEME</title>
<link rel="sortcut icon" href="imgs/logo.png" type="image/x-icon" />
<!-- SCRIPT PARA REDIRECIONAMENTO PARA A TELA 3 -->
<script type="text/javascript">
function Nova()
{
location.href=" index.php"
}
</script>
<link rel="stylesheet" type="text/css" href="css/tela3.css">
</head>
<body>

<div class="container">



<?php
// ADAPTAÇÃO TECNICA(GAMBI) PARA TIRAR O ERRO CASO A LISTA FIQUE VAZIA 
error_reporting(0);
include "Conecta.php";

$x= new emprestados();
$lista=$x->listatudo();

// LISTAGEM DE TODOS OS MATERIAIS EMPRESTADOS
echo "<table border='1' cellspacing='3' cellpadding='2'>";
echo "<td> <strong>RA</strong></td>
	  <td> <strong>Nome do Aluno</strong> </td>
	  <td> <strong>Material Emprestado</strong></td>
	  <td> <strong>Devolver</strong></td>";
 foreach ($lista as $mat){
	$id=$mat->ordemservico;
echo "
  				<tr>
    				<td width='20%'><strong>$mat->raaluno</strong></td>
    				<td width='20%'>$mat->nomealuno</td>
    				<td width='20%'>$mat->materiais</td>
    				
    				<td width='20%'><a href='deleta.php?id=$id'> <img src='imgs/deleta.ico' width='20px' height='20px' /> </a>  </td>
   
  				</tr>
				"; }
echo "</table>";

?>





</div>

<div class="Menu">
<input type="image" src="imgs/home.png" width="50px" height="50px" onClick="Nova()">
</div>




</body>
</html>