<?php 
include_once("./includes/header.php");
include_once("./dados/todas_receitas.php");
include_once("dados/autor.php");

$currentPost = null; // inicia vazio
if (isset($_GET["id"])) {
  $postId = $_GET["id"]; // força para número
  foreach ($receitas as $post) {
    if ($post["id"] == $postId) { // agora pode usar == ou deixar o id inteiro
      $currentPost = $post;
      break;
    }
  }
}

//EVITAR ERRO SE NÃO ACHAR O ID 
if(!$currentPost){
  echo "<div class='container'><h2>Receita não encontrada</h2></div>";
  include_once("./includes/footer.php");
  exit;
}

?>

<section>
    <div class="container">
      <article class="receita-principal post">
        
          <!-- TITULO -->
          <h1><?= $currentPost["titulo"] ?></h1>
          
          <!-- SUBTITULO -->
          <p><?= $currentPost["subtitulo"] ?></p>
          
          <!-- IMAGEM -->
          <div class="imagem-receita-post">
            <img src="<?= $currentPost["imagem"] ?>" alt="<?= $currentPost["descricao"] ?>" width="100%">
          </div>
          
          <div style="margin: 5px 0;">
            <span style="display: flex; align-items: center; gap: 10px;"><?php echo "Autor:" . " " . $autor["nome"]; ?><img style="border-radius: 50%; box-shadow: 2px 2px 8px #e1e1e1; border: 1px solid #bababa" src="<?= $autor["imagem"];?>" alt="receitas online" width="30px" height="30px"></span>
          </div>
          
          <!-- RECEITA COMPLETA-->
          <div class="texto_completo">
            <?= $currentPost["receita_completa"] ?>
          </div>
          <div>
            <a href="index.php" class="btn">Voltar para página inicial</a>
          </div>
      </article>
    </div>
</section>
<!-- veja mais receitas -->
<section>
  <div class="container">
    <div class="outras-receitas">
      <h2>Veja outras receitas</h2>
    </div>
      <nav class="vejaMais">
        <ul>
          <?php shuffle($receitas); foreach($receitas as $vejaMais):?>
          <?php if($vejaMais["titulo"] !== $currentPost["titulo"]):?>
              <li>
                <a href="post.php?id=<?= $vejaMais["id"] ?>"><?= mb_substr($vejaMais["titulo"], 0, 15, "UTF-8") . "..." ?></a>
              </li>
            <?php endif ?>
          <?php endforeach ?>
        </ul>
      </nav>
  </div>
</section>

<!-- MAIS RECEITAS POST -->
<div class="outras-receitas" id="receitas">
  <h2>Mais receitas</h2>
</div>
<section>
  <div class="container mais-receitas">
    <?php 
    shuffle($receitas);
    foreach (array_slice($receitas, 0, 15) as $mais_receitas): ?>
        <?php 
        if(($mais_receitas["id"]) != ($currentPost["id"])) : ?>
          <article>
            <div class="mais-receitas-items">
              <div class="mais-receitas-imagem">
                <a href="post.php?id=<?= $mais_receitas["id"] ?>">
                  <img src="<?= $mais_receitas["imagem"]?>" alt="<?= $mais_receitas["descricao"]?>" width="100%">
                </a>
              </div>
              
              <!-- TITULO E SUBTITULO -->
              <div class="mais-receitas-titulo">
                <a href="post.php?id=<?= $mais_receitas["id"] ?>">
                  <h3><?= mb_substr($mais_receitas["titulo"], 0,100, "UTF-8") . "..." ?></h3>
                </a>
              </div>
            </div>
          </article>
        <?php endif ?>
    <?php endforeach ?>
</section>

<!-- MENU INFERIOR -->
<?php include_once("./includes/menu_inferior.php")?>

<!-- footer -->
<?php include_once("./includes/footer.php"); ?>