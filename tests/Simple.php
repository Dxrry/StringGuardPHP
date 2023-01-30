<?php
require_once __DIR__ . "/../vendor/autoload.php";

$ds = new \App\DEncrypt\Main;
$exampleEncryptText = $ds->encryptText("Rawrrr");
// Encrypted Result :
// 689823477791946171330487251804292357105732853190508127608932241351694122951258422529122909295122574

// print_r($exampleEncryptText);


$exampleDecryptText = $ds->decryptText($exampleEncryptText);
// Decrypted Result:
// Rawrrr

print_r($exampleDecryptText);