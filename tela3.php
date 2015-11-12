<?php
include "Conecta.php";

$x= new emprestados();
$lista=$x->listatudo();


echo "<table width='200' border='1' cellspacing='3' cellpadding='2'>";
foreach ($lista as $mat){
	$id=$mat->ordemservico;
echo "
  				<tr>
    				<td>$mat->ordemservico</td>
    				<td>$mat->raaluno</td>
    				<td>$mat->materiais</td>
    				<td><a href='deleta.php?id=$id'> Deletar </a>  </td>

  				</tr>
				"; }
echo "</table>";

?>
<a href="tela1.php">Pagina inicial</a>
