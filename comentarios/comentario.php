<html>
<head>
<meta charset="utf-8">
<title>Deixe seu Comentário!</title>
<style type="text/css">
	body{
	background-image: url("images.png");
	width: 100%;
}
.com{
	text-align: center;
	background-color: #D3D3D3;
	border-radius: 15px 50px 30px;
	margin: 10% 35%;
	padding: 35px;
	height: 30%;
	width: 25%;
	border-style: solid;
	border-color:#000;
}

</style>
</head>
<body>
<div class="com">
	<form action="comentando.php" method="POST">
		<table>
			<tr>
				<td><label>Nome:<label></td>
				<td><input type="text" name="nome" placeholder="Insira seu nome"></td>
			</tr>
			<tr>
				<td><label>Comentário:<label></td>
				<td><textarea id="mensagem" name="mensagem" rows="10" cols="35" placeholder="Deixe aqui seu comentário sobre o fotografo ou fotos"></textarea></td>
			</tr>
		</table>
		<input type="submit" value="Enviar"> <input type="reset" value="Limpar">
	</form>
</div>	
</body>
</html>
