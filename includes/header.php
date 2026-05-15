<?php
header('Content-Type: text/html; charset=UTF-8');
require_once("./dados/todas_receitas.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-X32M5CC6TZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-X32M5CC6TZ');
  </script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/normalize.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700&display=swap" rel="stylesheet">
  <title>
    <?php if(isset($currentPost)): ?>
      <?= htmlspecialchars($currentPost["titulo"], ENT_QUOTES, 'UTF-8') ?> | Receitas Online
    <?php else: ?>
      Receitas Online | Receitas fáceis e rápidas
    <?php endif; ?>
  </title>
  <meta name="description" content="<?=
isset($currentPost)
? htmlspecialchars($currentPost["descricao"], ENT_QUOTES, 'UTF-8')
: 'Seu site de receitas Online, com receitas fáceis, rápidas e deliciosas.'
?>">
  <!-- SEO -->
  <meta name="keywords" content="receitas, receitas online, receitas fáceis, culinária, cozinha, comidas, pratos rápidos, receitas bolos, carnes, sucos detox,ovos">
  <meta name="author" content="receitasOnline">
  
  <!-- Open Graph (para Facebook, WhatsApp etc) -->
  <meta property="og:title" content="receitasOnline — Seu site de receitas Online">
  <meta property="og:description" content="Receitas fáceis, rápidas e deliciosas para o seu dia a dia.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://receitasonlines.com.br">
  <meta property="og:image" content="<?=
'https://receitasonlines.com.br/' .
htmlspecialchars($currentPost['imagem'] ?? 'imgs/berinjela.avif', ENT_QUOTES, 'UTF-8')
?>">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="receitasOnline — Seu site de receitas Online">
  <meta name="twitter:description" content="Receitas fáceis, rápidas e deliciosas para o seu dia a dia.">
  <meta name="twitter:image" content="https://receitasonlines.com.br/imgs/batatadocearfry.jpg">
  <!-- GOOGLE DISCOVER -->
  <meta name="robots" content="max-image-preview:large">
  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <!-- favicon -->
  
  <!-- ADSENCE -->
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5288917035894033"
     crossorigin="anonymous"></script>
</head>
<body>
  <header class="header-top" data-ad-unit="noads">
      <div class="logo"><!-- LOGO -->
        <div class="container logo">
          <a href="index.php"><img src="icons/logo.png" alt="logo receitas online" class="logo-img">Receitas Online</a>
          <div class="logo-radius">
            <button onclick="mostrarSearch()">
              <img src="icons/search2.svg" alt="search">
            </button>
            <a href="./contato.php">
              <img src="icons/add.svg" alt="adicionar receita">
            </a>
          </div>
        </div>
      </div><!-- FIM DA LOGO -->
      
    <!-- MENU TOPO -->
    <div class="menu-top">
      <nav class="container">
          <ul>
            <li id="home">
              <a href="/index.php">Home</a>
            </li>
            <li>
              <a href="/index.php#receitas">Receitas</a>
            </li>
            <li>
              <a href="receitas_especiais.php">festas juninas</a>
            </li>
            <li>
              <a href="/contato.php">Contato </a>
            </li>
            <li>
              <a href="/sobre-nos.php">Sobre-nos</a>
            </li>
            <li>
              <a href="contato.php" id="btn-enviar-receita">Enviar Receita</a>
            </li>
        </ul>
      </nav>
    </div>
    <!-- BUSCA RECEITAS -->
    <div class="busca" id="busca">
      <div class="container">
        <form action="busca.php" method="GET">
            <div class="busca_input">
              <input type="search" name="nome" placeholder="Buscar receitas..." required="">
              <button type="submit"><img src="icons/search.svg" alt="submit" width="20px"></img>
            </div>
        </form>
      </div>
    </div>
  </header>