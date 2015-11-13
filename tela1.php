<!DOCTYPE html>
<html>
<head>
	<title>Ginasio poliesportivo</title>
	<script type="text/javascript">
function Nova()
{
location.href=" tela3.php"
}
</script>
	
	<style>

	body{
				background-color: #00BFFF;
			}
	.ra{
		
		left: 5%;
		bottom: 60%;
		position: relative;
		margin-top: 25%;

	}
	.button{
		
		left: 74%;
		bottom: 10%;
		position: absolute;
		margin-top: 25%; 	
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
		

    	}
	

</style>
</head>
<body>
			<div class="container">



					<form action="tela2.php" name="pesquisa" method="post">
					<h3>Insira o RA: </h3>
	<input type="text" name="ra"> <input type="submit" value="Pesquisar" name="pesquisa">


</form>
<div class="button">
<input type="button" value="Materiais Emprestados" onClick="Nova()">
</div>
	

	</div>


			

</body>
</html>