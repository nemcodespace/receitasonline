<?php include_once("./includes/header.php"); ?>
<?php require_once("./dados/todas_receitas.php"); ?>
<?php require_once("dados/autor.php"); ?>
<?php require_once("./includes/funcoes.php"); ?>
<?php
    
      $busca = isset($_GET["nome"]) ? trim($_GET["nome"]) : "";
      $encontrou = false;
      $q = [];
        foreach ($receitas as $valor):?>
          <?php 
          $tituloSemAcento = removerAcentos($valor["titulo"]);
          $buscaSemAcento = removerAcentos($busca);
          
           if ($busca !== "" && stripos($tituloSemAcento, $buscaSemAcento) !== false) :
            $encontrou = true;
            $q[] = $valor;
            $total = count($q);
            
          ?>
            <section>
                  <?php 
                    if($total == 1) :?>
                      <div class="container">
                        <h2 class="encontradas">Receitas encontradas para <a href="post.php?id=<?= htmlspecialchars($valor["id"]) ?>" style="font-style: italic; text-decoration: underline; text-decoration-color: #adadad; font-weight: bold; color: #d65502;"><?= $busca ?></a> logo abaixo</h2>
                      </div>
                  <?php endif ?>
                  <div class="container">
                    <!-- TOTAL DE RECEITAS ENCONTRADAS -->
                    <div class="total_encontradas">
                      <h2>Receita  <?= " - " .$total ?></h2>
                    </div>
                    
                    <article class="receita-principal post">
                      
                        <!-- TITULO -->
                        <h1><?= htmlspecialchars($valor["titulo"]) ?></h1>
                        
                        <!-- SUBTITULO -->
                        <p><?= htmlspecialchars($valor["subtitulo"]) ?></p>
                        
                        <!-- IMAGEM -->
                        <div class="imagem-receita-post">
                          <img src="<?= $valor["imagem"] ?>" alt="<?= $valor["descricao"] ?>" width="100%">
                        </div>
                        
                        <div style="margin: 5px 0;">
                          <span style="display: flex; align-items: center; gap: 10px;"><?php echo "Autor:" . " " . $autor["nome"]; ?><img style="border-radius: 50%; box-shadow: 2px 2px 8px #e1e1e1; border: 1px solid #bababa" src="<?= $autor["imagem"];?>" alt="receitas online" width="30px" height="30px"></span>
                        </div>
                        
                        <!-- RECEITA COMPLETA-->
                        <div class="texto_completo">
                          <?= $valor["receita_completa"] ?>
                        </div>
                        
                        <div>
                          <a href="index.php" class="btn">Voltar para página inicial</a>
                        </div>
                        <hr>
                    </article>
                  </div>
              </section>
<?php endif ?>
<?php endforeach  ?>
<?php 
  if($busca !== "" && !$encontrou) :?>
    <div style="padding: 10px;" class="container">
     <h2 style="color: #d65502; margin:0;">Receita não encontrada</h2>
     <p>Digite outra receita no campo de busca</p>
    </div>
<?php endif ?>

<?php
  if($busca == "") :?>
    <div style="padding: 10px;" class="container">
     <h2 style="color: #d65502; margin:0;">Receita não encontrada</h2>
      <p style="margin: 0;">Digite algo no campo de busca.</p> 
    </div>
<?php endif ?>

<!-- veja mais receitas -->
<section>
  <div class="container">
    <div class="outras-receitas">
      <h2>Veja outras receitas</h2>
    </div>
      <nav class="vejaMais">
        <ul>
          <?php shuffle($receitas); foreach($receitas as $vejaMais):?>
          
              <li>
                <a href="post.php?id=<?= $vejaMais["id"] ?>"><?= mb_substr($vejaMais["titulo"], 0, 25, "UTF-8") . "..." ?></a>
              </li>
          <?php endforeach ?>
        </ul>
      </nav>
  </div>
</section>
<!-- MENU INFERIOR -->
<?php include_once("./includes/menu_inferior.php")?>
<!-- footer -->
<?php include_once("./includes/footer.php"); ?>

