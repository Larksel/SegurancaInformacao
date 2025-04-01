<?php
include 'AES.php';
$inputText = "Security Information...";
$inputKey = "7141bc7a39h7057b";
$blockSize = 128;
$aes = new AES($inputText, $inputKey, $blockSize);
$enc = $aes->encrypt();
echo "Apos criptografia.: ".$enc."<br/>";

?>