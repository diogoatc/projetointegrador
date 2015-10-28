<?php
include 'testePDO.php';
$x=new listar();
$aluno=$x->lista();
?>
<table width='200' border='1' cellspacing='3' cellpadding='2'>
  <tr>
    <th><?=$aluno->ra?></th>
  </tr>
  <tr>
    <th>2</th>
  </tr>
  <tr>
    <th>3</th>
  </tr>
  <tr>
    <th>4</th>
  </tr>
</table>



