<?php
include "Conecta.php";

$x= new emprestados();
$lista=$x->listatudo();
//print_r($lista);
echo "<table width='200' border='1' cellspacing='3' cellpadding='2'>";
foreach ($lista as $mat){
echo "
  				<tr>
    				<td>$mat->ordemservico</td>
    				<td>$mat->raaluno</td>
    				<td>$mat->materiais</td>
  				</tr>
				"; }
echo "</table>";
//echo "<a href='tela1.php'>Home></a>";
?>

