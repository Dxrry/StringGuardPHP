# DEncrypt-PHP - Simple Text Encrypt & Decrypt Using PHP

## Basic Usage

1. Generate your encryption key:
```bash
$ php -a
Interactive shell

php > echo str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789;`</>- |_=,.:ABCDEFGHIJKLMNOPQRSTUVWXYZ\/'");
-<6/Gf>;.y`/xzsiVlrLUK|20DSvdjHF,ObkTIEq4N'3Qch\R7JpuYa15:PXogmW=9Bnw AC_e8MtZ
php >
```

2. Choose your Offset key:
```bash
Select an offset key within the range of "100" to "999". For example, you can choose "176" as your offset key.
```

3. Write your code:
```php
<?php
require_once __DIR__ . "/vendor/autoload.php";

// Create an instance of StringGuard with a key set and offset 176.
// The key set is the result of shuffling: str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789;`</>- |_=,.:ABCDEFGHIJKLMNOPQRSTUVWXYZ\/'")
$ds = new \App\StringGuard("-<6/Gf>;.y`/xzsiVlrLUK|20DSvdjHF,ObkTIEq4N'3Qch\R7JpuYa15:PXogmW=9Bnw AC_e8MtZ", 176);

$exampleInputedText = "Let's Encrypt Me Bro";
$exampleEncryptText = $ds->enc($exampleInputedText);
$exampleDecryptText = $ds->dec($exampleEncryptText);

echo "InputText: " . $exampleInputedText . "\n";
echo "Encrypted: " . $exampleEncryptText . "\n";
echo "Decrypted: " . $exampleDecryptText;
```
## Note

You can only encrypt text if the characters are in the encryption key
