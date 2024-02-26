<?php
// Use a key set that consists of numbers only, so you can encrypt number only.
require_once __DIR__ . "/../vendor/autoload.php";

$ds = new \App\StringGuard("0896745231", 777);

$exampleInputedText = 1337;
$exampleEncryptText = $ds->enc($exampleInputedText);
$exampleDecryptText = $ds->dec($exampleEncryptText);

echo "InputText: " . $exampleInputedText . "\n";
echo "Encrypted: " . $exampleEncryptText . "\n";
echo "Decrypted: " . $exampleDecryptText;
