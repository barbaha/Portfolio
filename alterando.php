<?php 
$connect = mysql_connect('localhost','root','@luno1fpe');
$db = mysql_select_db('Elsez');

$id = $_POST["id"];
$nsenha = $_POST["nsenha"];
$nemail = $_POST["nemail"];

$sql = "update usuario SET senha='$nsenha',email='$nemail' WHERE id='$id'";

$resultado = mysql_query($sql) or die (mysql_error());


echo "Alteração realizada com sucesso!";
?>

