# DEncrypt-PHP - Simple Text Encrypt & Decrypt For PHP

## Basic Usage

1. Generate your encryption key:

        $ php -a
        Interactive shell

        php > echo str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789;`</>- |_=,.:ABCDEFGHIJKLMNOPQRSTUVWXYZ\/'");
        -<6/Gf>;.y`/xzsiVlrLUK|20DSvdjHF,ObkTIEq4N'3Qch\R7JpuYa15:PXogmW=9Bnw AC_e8MtZ
        php > 

2. Choose your Offset key:

        From 100 - 999
        Example: 176

3. Write your code:

        <?php

        require __DIR__ . '/vendor/autoload.php';
        $ds = new \App\DSec\Main("-<6/Gf>;.y`/xzsiVlrLUK|20DSvdjHF,ObkTIEq4N'3Qch\R7JpuYa15:PXogmW=9Bnw AC_e8MtZ", 176);
        
        $exampleInputedText = "Let's Encrypt Me Bro";
        $exampleEncryptText = $ds->encryptText($exampleInputedText);
        $exampleDecryptText = $ds->decryptText($exampleEncryptText);
        
        echo "InputText: " . $exampleInputedText;
        echo "\n";
        echo "Encrypted: " . $exampleEncryptText;
        echo "\n";
        echo "Decrypted: " . $exampleDecryptText;

## Note

You can only encrypt text if the characters are in the encryption key
