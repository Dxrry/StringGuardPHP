<?php
require_once __DIR__ . "/../vendor/autoload.php";

// Example 1
// Key set number only so this tool only can encrypt number only
$ds = new \App\DEncrypt\Main("0896745231", 777);

$exampleInputedText = 1337;
$exampleEncryptText = $ds->encryptText($exampleInputedText);
$exampleDecryptText = $ds->decryptText($exampleEncryptText);
echo "Example 1\n\n";
echo "InputText: " . $exampleInputedText;
echo "\n";
echo "Encrypted: " . $exampleEncryptText;
echo "\n";
echo "Decrypted: " . $exampleDecryptText;


echo "\n\n\n";


// Example 2
// you can shuffle with str_shuffle :
// str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789;`</>- |_=,.:ABCDEFGHIJKLMNOPQRSTUVWXYZ\/'");
// result shuffle :
// -<6/Gf>;.y`/xzsiVlrLUK|20DSvdjHF,ObkTIEq4N'3Qch\R7JpuYa15:PXogmW=9Bnw AC_e8MtZ
$ds = new \App\DEncrypt\Main("-<6/Gf>;.y`/xzsiVlrLUK|20DSvdjHF,ObkTIEq4N'3Qch\R7JpuYa15:PXogmW=9Bnw AC_e8MtZ", 133);

$exampleInputedText = "Let's Encrypt Me Bro";
$exampleEncryptText = $ds->encryptText($exampleInputedText);
$exampleDecryptText = $ds->decryptText($exampleEncryptText);
echo "Example 2\n\n";
echo "InputText: " . $exampleInputedText;
echo "\n";
echo "Encrypted: " . $exampleEncryptText;
echo "\n";
echo "Decrypted: " . $exampleDecryptText;
