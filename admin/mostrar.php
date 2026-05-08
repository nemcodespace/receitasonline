<?php
include_once("banco.php");

$sql = "SELECT * FROM pagina4";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Receitas</title>
</head>

<body>

<h1>Receitas</h1>

<?php
if($resultado->num_rows > 0){

  while($receita = $resultado->fetch_assoc()){
?>

<div class="receita">

<h2><?php echo $receita["titulo"]; ?></h2>

<p><?php echo $receita["subtitulo"]; ?></p>

<img src="imagens/<?php echo $receita["imagem"]; ?>" width="300">

<h3>Ingredientes</h3>
<p><?php echo nl2br($receita["ingredientes"]); ?></p>
<a href="post.php?id=<?php echo nl2br($receita["ingredientes"]); ?>">ingredientes</a>

<h3>Modo de preparo</h3>
<p><?php echo nl2br($receita["modoPreparo"]); ?></p>

<h3>Benefícios</h3>
<p><?php echo nl2br($receita["beneficios"]); ?></p>

</div>

<hr>

<?php
  }
}else{
  echo "Nenhuma receita encontrada.";
}
?>

</body>
</html>