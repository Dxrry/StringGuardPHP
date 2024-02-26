<?php
require_once __DIR__ . "/../vendor/autoload.php";

// Create an instance of StringGuard with a key set and offset.
// The key set is the result of shuffling: str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789;`</>- |_=,.:ABCDEFGHIJKLMNOPQRSTUVWXYZ\/'")
$ds = new \App\StringGuard("-<6/Gf>;.y`/xzsiVlrLUK|20DSvdjHF,ObkTIEq4N'3Qch\R7JpuYa15:PXogmW=9Bnw AC_e8MtZ", 666);

$exampleInputedText = "Let's Encrypt Me Bro";
$exampleEncryptText = $ds->enc($exampleInputedText);
$exampleDecryptText = $ds->dec($exampleEncryptText);

echo "InputText: " . $exampleInputedText . "\n";
echo "Encrypted: " . $exampleEncryptText . "\n";
echo "Decrypted: " . $exampleDecryptText;