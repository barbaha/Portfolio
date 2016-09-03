<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
 
<?php
$nome= $_POST['nome'];
$mensagem=$_POST['mensagem'];
$msg = "<div class=com><table><tr><td><label>Nome: $nome</label></td></tr><tr><td><label>Comentário: $mensagem</label></td></tr></table></div>";/*
$msg.= "<tr><td bgcolor='#d9e6f7'><div align='center'><font color='#000000'><strong>Comentário:</strong> $mensagem</font></div></td></tr>";//adiciona o conteudo da mensagem
$msg.= "</table>";//termina a mensagem*/
$coment = fopen("comentarios.php", "a");//arquivo em que serao postados os comentarios
fwrite($coment, "$msg");//escreve no arquivo
fclose ($coment);//fecha o arquivo
header("Location:comentarios.php");
?>
</body>
</html>
