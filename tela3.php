<html>
<head>
<title>Ginasio poliesportivo</title>
<script type="text/javascript">
function Nova()
{
location.href=" index.php"
}
</script>
<style>
body{
	background-color: #00BFFF;
}


.info{
	position: fixed;
	left: 25%;
	bottom: 50%;

}

.menu{
	position: relative;
	left: 74%;
	bottom: 57%;
	position: relative;
	margin-top: 40%;
}

.container{
	 
	background-color: white;
	left: 20%;
	width: 700px;
	height: 400px;
	padding: 50px;
	border: 4px solid black;
	border-radius: 40px;
	position: relative;
	margin-top: 10%;
	overflow:auto;
}

.devo {
	left: 85%;
	bottom: 57%;
	position: relative;
	margin-top: 40%;
}
.menu {
	left: 85%;
	bottom: 0.5%;
	position: absolute;
	margin-top: 40%;
}


</style>
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
    				<td width='20%'><a href='deleta.php?id=$id'> DEVOLVER </a>  </td>
   
  				</tr>
				"; }
echo "</table>";

?>
<div class="Menu">
<input type="button" value="Menu Inicial" onClick="Nova()">
</div>




</div>






</body>
</html>