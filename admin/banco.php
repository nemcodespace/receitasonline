<?php

$host = "receitasonlines.com.br";
$user = "receitas_receitas";
$pass = "Milton10@";
$db = "receitas_receitas";

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_error){
  echo "erro na conexao";
}
