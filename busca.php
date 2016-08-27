<?php 

$host = 'localhost'; 
$user = 'root'; 
$pass = '@luno1fpe';
$con = mysql_connect($host,$user,$pass); 
$db = 'Elsez';
mysql_select_db($db,$con) or print mysql_error();
$sql = mysql_query("select * FROM fotos WHERE tipo LIKE '%$busca%' OR localFoto LIKE '%$busca%'");
$count = mysql_num_rows($sql);

if ($count == 0) {
    echo "Nenhum resultado!";
} else {
    if ($count == 1) {
    echo "1 resultado encontrado!";
}
if ($count > 1) {
    echo "$count resultados encontrados!";
}
while ($dados = mysql_fetch_array($sql)) {
    echo "$dados[nome] $dados[email]";
}
?>