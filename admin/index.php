<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/admin.css">
  <title>Receitas online - Admin</title>
</head>
<body class="admin">
  <form action="validar.php" method="POST" class="form-log">
    <h1>Receitas online</h1>
    <label for="usuario" class="label">Usuário
      <input type="text" placeholder="Usuário" class="input" name="usuario">
    </label>
    <label for="senha" class="label">Senha
      <input type="password" placeholder="senha" class="input" name="senha">
    </label>
    <button class="btn">Logar no painel</button>
    <div class="footer">
      <?php 
        $data = date("Y");
      ?>
      <p>Receitas online - <?= $data ?></p>
    </div>
  </form>
</body>
</html>