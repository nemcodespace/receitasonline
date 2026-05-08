<?php 
include_once("p-1.php");
include_once("p-2.php");
include_once("p-3.php");
include_once("especiais.php");

$receitas = array_merge($pagina1, $pagina2, $pagina3, $especiais);
?>