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
		
		left: 70%;
		bottom: 10%;
		position: absolute;
		margin-top: 25%; 	
	}
	.container{
         
        background-color: white;
        left: 20%;
        width: 700px;
    	height: 400px;    
    	padding: 10px;
    	border: 4px solid black;
    	position: relative;
    	margin-top: 10%;
		

    	}
	.input{
			position:absolute;
			top:22%;
			left:28%;
			width:23px;
			height:23px;
	}

</style>
</head>
<body>
			<div class="container">



					<form action="tela2.php" name="pesquisa" method="post">
					<h3>Insira o RA: </h3>
	<input type="text" name="ra"> <input class="input" name="pesquisa" type="image" src="imgs/search.png" >


</form>
<div class="button">
<input type="image" src="imgs/materiais.png" width="200px" height="100px" onClick="Nova()">
</div>
	

	</div>


			

</body>
</html>