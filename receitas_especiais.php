<?php require_once("./includes/header.php") ?>
<main class="especiais-main">
  <div class="container especiais-title">
    <div class="especiais-box">
      <div class="box-img">
        <h1><a href="receitas_especiais.php"><?= htmlspecialchars(count($especiais), ENT_QUOTES, 'UTF-8') ?> Receitas fáceis para festas juninas</a></h1>
        <img src="imgs/festa-junina.jpg" alt="festa junina">
      </div>
      <div class="box-outros">
        <section>
          <p>As receitas para festas juninas são marcadas por sabores tradicionais e aquele toque caseiro que traz conforto e nostalgia. Pratos como pamonha, canjica, milho cozido e bolo de fubá são presença garantida, valorizando ingredientes simples como milho, coco e amendoim. Essas receitas carregam a essência das celebrações típicas do interior, com preparos que muitas vezes passam de geração em geração, mantendo viva a cultura popular brasileira.</p>
        </section>
      </div>
    </div>
    <p>Além do sabor, as comidas juninas também têm um forte apelo afetivo e social, reunindo famílias e amigos em torno da mesa. Doces como pé de moleque, paçoca e arroz doce complementam o cardápio, criando uma experiência rica e acolhedora. Preparar essas receitas em casa não só é uma forma de economizar, mas também de personalizar os pratos e aproveitar o momento, tornando a festa ainda mais especial.</p>
  </div>
  <section class="container especiais">
    <?php foreach ($especiais as $b):?>
    <article class="imagem-receita">
      <a href="post.php?id=<?= htmlspecialchars($b["id"], ENT_QUOTES, 'UTF-8') ?>">
        <img src="<?= htmlspecialchars($b["imagem"],ENT_QUOTES, 'UTF-8')?>" alt="<?= htmlspecialchars($b["titulo"], ENT_QUOTES, 'UTF-8')?>" width="100%">
        <div class="especiais-texto">
          <h2><?= htmlspecialchars(mb_substr($b["titulo"], 0, 22), ENT_QUOTES, 'UTF-8') . "..." ?></h2>
          <span class="especiais-a">Ver receita <img src="icons/flexa.svg" alt="ver receita"></span>
        </div>
      </a>
    </article>
    <?php endforeach ?>
  </section>
  <?php require_once("./includes/menu_inferior.php")?>
</main>
<?php require_once("./includes/footer.php") ?>