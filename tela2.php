<?php 
if (isset($_POST['envia']))
?>
<?php
include 'Conecta.php';
$x=new listar();
$aluno=$x->lista();


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="tela2style.css" />
<title>Segunda tela</title>

</head>
<body>
<div class="informacoesaluno">
<table id="tabelainformacao"width='200' border='1' cellpadding='1'>
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
<div class="selectmaterial">
<form>
<select>
  <option value="bolabasquete">Bola de Basquete</option>
  <option value="bolafutebol">Bola de Futebol</option>
  <option value="bolavolei">Bola de Vôlei</option>
  <option value="bolahandball">Bola de Handball</option>
  	
</select>
<input type="submit" name="seleciona">
</form>

</div>

</body>
</html>

