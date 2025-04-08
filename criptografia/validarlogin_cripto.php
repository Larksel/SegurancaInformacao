<?php
include( 'aes.php' );

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$inputKey = "5131af7a19f7057b";
$blockSize = 128;
$aes = new AES($usuario, $inputKey, $blockSize);
$usuario_cripto = base64_encode($aes->encrypt());
$aes2 = new AES($senha, $inputKey, $blockSize);
$senha_cripto = base64_encode($aes2->encrypt());

$url='http://10.67.95.82/cripto/aes/validarlogin.php';

$ch = curl_init($url);

$params="usuario=$usuario_cripto&senha=$senha_cripto";

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

print_r($result);

curl_close($ch);
?>