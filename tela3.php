<?php
include "Conecta.php";

$x= new emprestados();
$lista=$x->listatudo();

echo $lista;
echo "<a href='tela1.php'>Home></a>";
?>

