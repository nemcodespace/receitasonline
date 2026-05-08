<?php 
session_start();
if(!isset($_SESSION["usuario"])){
  header("Location: index.php");
  exit;
}
$usuario = $_SESSION["usuario"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/admin.css">
  <title>Receitas online - Painel</title>
</head>
<body>

<div class="container">

<header class="header-admin">
<h1>Bem vindo <?= htmlspecialchars($usuario) ?></h1>

<nav class="nav-admin">
<ul>
<li><a href="">Receitas</a></li>
<li><a href="sair.php">Sair</a></li>
</ul>
</nav>
</header>

<form action="dados.php" method="POST" enctype="multipart/form-data" class="painel_cadastro">

<label>Titulo da Receita
<input type="text" name="titulo" required>
</label>

<label>Subtitulo da Receita
<input type="text" name="subtitulo" required>
</label>

<label>Imagem da receita
<input type="file" name="imagem" class="inputFile" accept="image/*" required>
</label>

<label>Ingredientes
<textarea name="ingredientes" required></textarea>
</label>

<label>Modo de preparo
<textarea name="modo_preparo" required></textarea>
</label>

<label>Benefícios da Receita
<textarea name="beneficios"></textarea>
</label>

<button type="submit">Cadastrar receita</button>

</form>

</div>

</body>
</html>