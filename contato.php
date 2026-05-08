<?php include_once("./includes/header.php") ?>

<form class="form" action="enviar_form.php" method="post">
  <!-- MARCADOR PÁGINA -->
  <div style="margin-bottom: 20px; margin-top: 20px; position: sticky left: 10px; top: 10px;">
    <a href="contato.php" style="display: flex; align-items: center; color: #6b6b6b">Contato <img src="icons/siga.svg" alt="siga"></a>
  </div>
  <h3>Entre em contato pelo nosso whatsapp e envie sua receita</h3>
  <h2 style="padding: 10px 0; color: #d65502; border-radius: 5px; font-weight: bold;">Sugestões de receitas</h2>
  <p>Envie sua sugestão de receita preferida</p>
  <p>Preencha os campos com os dados</p>
  <label for="nome">Nome</label>
  <input type="text" name="nome" placeholder="Seu nome" required>
  <label for="email">Email</label>
  <input type="email" name="email" placeholder="Seu e-mail" required>
  <label for="sugestao">Receita</label>
  <p>Digite no campo abaixo sua receita completa com ingredientes e modo de preparo</p>
  <textarea  placeholder="Digite sua receita" name="mensagem"></textarea>
  <button type="submit">Enviar</button>
</form>

<!-- MENU INFERIOR -->
<?php include_once("./includes/menu_inferior.php")?>

<!-- FOOTER -->
<?php include_once("./includes/footer.php") ?>