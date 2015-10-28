<?php 
if (isset($_POST['envia']))
?>
<?php
include 'Conecta.php';
$x=new listar();
$aluno=$x->lista();


?>
<table width='200' border='1' cellpadding='1'>
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
    <th><?=$aluno->interno?></th>
  </tr>
</table>



