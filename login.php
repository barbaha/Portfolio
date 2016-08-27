<?php
    $login = $_POST['login'];
    $entrar = $_POST['entrar'];
    $senha = $_POST['senha'];
    $connect = mysql_connect('localhost','root','@luno1fpe');
    $db = mysql_select_db('Elsez');
        if (isset($entrar)) {
                     
            $verifica = mysql_query("select * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
                if (mysql_num_rows($verifica)<=0){
                    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
                    die();
                }else{
                    session_start();
                    $_SESSION['login']=$login;
                    $_SESSION['senha']=$senha;
                    header("Location:index.html");
                }
        }
?>
