<?php 

  $host = "localhost";
  $user = "root";
  $pwd  = "@luno1fpe";
  $bd   = "Elsez";
 
  $conexao = mysql_connect($host, $user, $pwd);
  mysql_select_db($bd);
 
  $id = $_POST['login'];
  $query = "delete from linguagens where id=".$id;  
 
  $res   = mysql_query($query, $conexao)or die(mysql_error());
 
  if($res){  
      echo "Dado removido com sucesso.";
  }else{  
      echo "Falha ao tentar remover dado.";
  }
 
?>