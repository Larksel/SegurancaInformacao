<?php
include 'AES.php';
$inputText = "ma3vX3CMQwVPp4jSCsOMReb/Zzd8Xtp6X3MXfjZl0oU=";
$inputKey = "9871babc39h8857e";
$blockSize = 128;
$aes = new AES($inputText, $inputKey, $blockSize);
$dec=$aes->decrypt();
echo "Apos da decifragem.: ".$dec."<br/>";


?>