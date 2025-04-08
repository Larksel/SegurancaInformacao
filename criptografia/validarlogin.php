<?php
include 'criptografia.php';

$usuario = decifrar($_POST['usuario']);
$senha = decifrar($_POST['senha']);

if ($usuario == 'aluno' && $senha == '123456a')
  echo 'ACESSO PERMITIDO';
else
  echo 'Sai carniça podre';
?>