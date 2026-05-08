<?php
session_start();

if(!isset($_SESSION["usuario"])){
  header("Location: index.php");
  exit;
}

$usuario = $_SESSION["usuario"];

include_once("banco.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

  $titulo = $_POST["titulo"] ?? "";
  $subtitulo = $_POST["subtitulo"] ?? "";
  $ingredientes = $_POST["ingredientes"] ?? "";
  $modoPreparo = $_POST["modo_preparo"] ?? "";
  $beneficios = $_POST["beneficios"] ?? "";

  //upload da imagem
  $imagem = $_FILES["imagem"]["name"];
  $tmp = $_FILES["imagem"]["tmp_name"];

  $pasta = "imagens/";
  $caminho = $pasta . $imagem;

  move_uploaded_file($tmp, $caminho);

  $sql = "INSERT INTO pagina4 
  (titulo, subtitulo, imagem, ingredientes, modoPreparo, beneficios) 
  VALUES 
  ('$titulo', '$subtitulo', '$imagem', '$ingredientes', '$modoPreparo', '$beneficios')";

  if($conn->query($sql) === TRUE){
    echo "Receita cadastrada com sucesso";
  }else{
    echo "Erro: " . $conn->error;
  }

}
?>