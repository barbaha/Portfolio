<?php 

$connect = mysql_connect('localhost','root','@luno1fpe');
$db = mysql_select_db('Elsez');

$login = $_POST["login"];
$senha = $_POST["senha"];
$email = $_POST["email"];
$id;

$sql = "update usuario SET login='$login', senha='$senha',email='$email' WHERE id='$id'";
$resultado = mysql_query($sql)
or die (mysql_error());

echo "Alteração realizada com sucesso!";


?>