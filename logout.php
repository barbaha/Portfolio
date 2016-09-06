<?php 
session_start();
$login = $_SESSION['login'];
 $senha = $_SESSION['senha'];
$id = $_SESSION['id'];
session_destroy();
   header("location:login.html");
?>