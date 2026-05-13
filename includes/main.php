<?php 
  include_once("./dados/autor.php");
  include_once("./dados/todas_receitas.php");
?>
<main class="main">
  <div class="titulo-top">
  <div class="container">
    <?php
      $quantidade = count($receitas);
      error_reporting(E_ALL);
      ?>
    <div class="titulo">
      <div class="titulo-hero">
        <h1>Receitas online</h1>
        <p>Receitas Caseiras Fáceis e Testadas</p>
      </div>
      <!-- CONTADOR DE RECEITAS -->
      <div class="contador">
        <div class="contador-meio">
          <div class="cont cont-b">
            <h2><span style="color: #d65502;">+</span><?= $quantidade ?></h2>
            <p>Receitas publicadas</p>
          </div>
          <div class="cont">
            <h2>100<span style="color: #d65502;">%</span></h2>
            <p>Testadas e aprovadas</p>
          </div>
        </div>
        <a href="#receitas">Ver receitas</a>
      </div>
    </div>
  </div>
  </div>
  <div class="container">
    <section>
      <article class="apresentacao">
        <h2>Bem-vindo ao <strong><a href="index.php">Receitas Online</a></strong></h2>
        <p>Aqui você encontra receitas práticas, saborosas e feitas com ingredientes acessíveis para o dia a dia. Nosso objetivo é ajudar você a preparar pratos simples, sobremesas deliciosas e bebidas saudáveis.</p>
        <p>Sempre com dicas úteis para melhorar sua alimentação e bem-estar. Todas as receitas são testadas, fáceis de seguir e ideais para quem busca praticidade na cozinha.</p>
        <h3>"<strong class="novas">Novas</strong> receitas são postadas semanalmente"</h3>
        <div class="envie">
          <h2>Compartilhe sua receita preferida</h2>
          <p>Envie sua receita preferida que postamos no nosso site</p>
          <a href="contato.php">Enviar receita</a>
        </div>
      </article>
    </section>
    <!-- RECEITA PRINCIPAL -->
    <section>
      <!-- receitas especiais -->
      <article class="receita-principal">
        <div class="imagem-receita">
          <a href="receitas_especiais.php" id="receitas_especiais-main-a">
            <img src="./imgs/festa-junina.jpg" width="100%">
          <div id="receitas_especiais-main">
            <h2><?= htmlspecialchars(count($especiais), ENT_QUOTES, 'UTF-8') ?> Receitas fáceis para festas Juninas</h2>
            <span>Ver Receitas</span>
          </div>
          </a>
        </div>
      </article>
      <article class="receita-principal">
          <!-- TITULO -->
          <?php 
            $index = array_rand($receitas);
            $receitaDestaque = $receitas[$index];
            unset($receitas[$index]);
          ?>
          <a href="post.php?id=<?= htmlspecialchars($receitaDestaque["id"], ENT_QUOTES, 'UTF-8')?>" class="links">
            <h2><?= htmlspecialchars($receitaDestaque["titulo"]) ?></h2>
          </a>
          <!-- SUBTITULO -->
          <a href="post.php?id=<?= $receitaDestaque["id"]?>" class="links">
            <p><?= htmlspecialchars($receitaDestaque["subtitulo"]) ?></p>
          </a>
          
          <!-- IMAGEM -->
          <div class="imagem-receita">
            <a href="post.php?id=<?= $receitaDestaque["id"]?>">
              <div class="destaque">
                <span>Destaque</span>
              </div>
              <img src="<?= $receitaDestaque["imagem"] ?>" alt="<?= $receitaDestaque["descricao"]?>" width="100%" height="450" loading="lazy" fetchpriority="high">
            </a>
          </div>
          <!-- AUTOR -->
          <div style="margin: 5px 0;">
            <span style="display: flex; align-items: center; gap: 10px;"><?php echo "Autor:" . " " . $autor["nome"]; ?><img style="border-radius: 50%; box-shadow: 2px 2px 8px #e1e1e1; border: 1px solid #bababa" src="<?= $autor["imagem"];?>" alt="receitas Online" width="30px" height="30px"></span>
          </div>
          <!-- LEIA MAIS  -->
          <div class="ver">
            <a href="post.php?id=<?= $receitaDestaque["id"]?>">Ver Receita Completa</a>
          </div>
      </article>
    </section>
    
    <!-- MEIO -->
    <div class="outras-receitas" id="receitas">
      <h2>Receitas Principais</h2>
    </div>
    
    <!-- CARDS DAS RECEITAS -->
    <section class="cards-receitas padding" data-ad-unit="noads">
        <?php 
          shuffle($pagina1);
          foreach ($pagina1 as $items): ?>
            <article class="card-item">
              <a href="post.php?id=<?= htmlspecialchars($items["id"]) ?>">
                <img src="<?= htmlspecialchars($items["imagem"]) ?>" alt="<?= $items["descricao"] ?>" width="100%" loading="lazy">
              </a>
              <a href="post.php?id=<?= $items["id"]?>" class="links">
                <h3><?= htmlspecialchars(mb_substr($items["titulo"], 0, 30, "UTF-8")) . "..." ?></h3>
              </a>
              <a href="post.php?id=<?= $items["id"]?>" class="links">
                <p><?= htmlspecialchars(mb_substr($items["subtitulo"], 0, 40, "UTF-8")) . "..."?></p>
              </a>
              <div class="ver">
                <a href="post.php?id=<?= $items["id"]?>">Ver Receita Completa</a>
              </div>
            </article>
        <?php endforeach ?>
    </section>
    <!-- PAGINACAO -->
    <div class="paginacao">
      <span>Páginas...</span>
      <a href="./index.php" id="mark">1</a>
      <a href="./pagina2.php">2</a>
      <a href="./pagina3.php">3</a>
    </div>
  
  <?php include_once("menu_inferior.php")?>
  </div>
</main>