<?php
ob_start();
$nome = $_POST["nome"] ?? "";
$email = $_POST["email"] ?? "";
$mensagem = $_POST["mensagem"] ?? "";

$numero = "5561981224283";

$texto = "Olá sou o $nome\nEmail: $email\nReceita:\n$mensagem";

$texto = urlencode($texto);

$link = "https://wa.me/$numero?text=$texto";

header("Location: $link");
exit;
ob_end_flush();
?>