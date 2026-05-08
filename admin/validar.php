<?php 
session_start();

$usuario_correto = "admin";
$senha_correta = 1234;
  
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if($usuario == $usuario_correto && $senha == $senha_correta){
  $_SESSION["usuario"] = $usuario;
  header("Location: painel.php");
  exit;
}else {
  header("Location: painel.php");
  echo "usuário ou senha incorretos!";
  exit;
}



