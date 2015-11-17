<html>
<head>
<!--  TODO: Alterar o nome da pagina para o nome do sistema -->
<title>Ginasio poliesportivo</title>
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
include "Conecta.php";

$x= new emprestados();
$lista=$x->listatudo();


echo "<table border='1' cellspacing='3' cellpadding='2'>";
echo "<td> <strong>Ordem de Serviço</strong></td>
	  <td> <strong>RA</strong> </td>
	  <td> <strong>Material Emprestado</strong></td>
	  <td> <strong>Devolver</strong></td>";
foreach ($lista as $mat){
	$id=$mat->ordemservico;
echo "
  				<tr>
    				<td width='20%'>$mat->ordemservico</td>
    				<td width='20%'>$mat->raaluno</td>
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