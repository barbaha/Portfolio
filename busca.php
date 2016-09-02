<?php 

$host = 'localhost'; 
$user = 'root'; 
$pass = '@luno1fpe';
$con = mysql_connect($host,$user,$pass); 
$db = 'Elsez';
$busca = $_POST['busca'];
mysql_select_db($db,$con) or print mysql_error();
$sql = mysql_query("select * from fotos where tipo like '%$busca%' or local like '%$busca%'");
$count = mysql_num_rows($sql);

if ($count == 0) {
    echo "Nenhum resultado! ". '<br>';
} else {
    if ($count == 1) {
    echo "1 resultado encontrado!". '<br>';
	}
}
if ($count > 1) {
    echo "$count resultados encontrados!". '<br>';
}
while ($dados = mysql_fetch_array($sql)) {
    echo $dados['tipo']." - " .$dados['local'] . '<br>';
}
?>