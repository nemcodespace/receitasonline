<?php require_once("includes/header.php"); ?>
<?php require_once("dados/p-3.php");?>
<div class="container2">
<div class="container voltar">
  <a href="index.php"><img src="icons/volte.svg" alt="volte">Voltar</a>
</div>

<div class="outras-receitas">
  <h2>Página 3</h2>
</div>
<!-- PÁGINA -->
<div class="container">
  <!-- CARDS DAS RECEITAS -->
    <section class="cards-receitas" data-ad-unit="noads">
        <?php 
          shuffle($pagina3);
          foreach ($pagina3 as $items): ?>
            <article class="card-item">
              <a href="post.php?id=<?= $items["id"]?>" class="links">
                <h3><?= mb_substr($items["titulo"], 0, 30, "UTF-8") . "..." ?></h3>
              </a>
              <a href="post.php?id=<?= $items["id"]?>" class="links">
                <p><?= mb_substr($items["subtitulo"], 0, 40, "UTF-8") . "..."?></p>
              </a>
              
              <a href="post.php?id=<?= $items["id"] ?>">
                <img src="<?= $items["imagem"] ?>" alt="<?= $items["descricao"] ?>">
              </a>
              <!-- LEIA MAIS  -->
              <div class="ver">
                <a href="post.php?id=<?= $items["id"]?>">Receita completa...</a>
              </div>
            </article>
        <?php endforeach ?>
    </section>
    <!-- PAGINACAO -->
    <div class="paginacao">
      <span>Páginas...</span>
      <a href="./index.php">1</a>
      <a href="./pagina2.php">2</a>
      <a href="./pagina3.php" id="mark">3</a>
    </div>
</div>
</div>

<!-- FOOTER -->
<?php require_once("includes/footer.php"); ?>