<?php
// Example with default Key and Offset
require_once __DIR__ . "/../vendor/autoload.php";

$ds = new \App\StringGuard;
$exampleInputedText = "Hello World";
$exampleEncryptText = $ds->enc($exampleInputedText);
$exampleDecryptText = $ds->dec($exampleEncryptText);

print_r("Encrypted : " . $exampleEncryptText . "\n");
print_r("Decrypted : " . $exampleDecryptText);