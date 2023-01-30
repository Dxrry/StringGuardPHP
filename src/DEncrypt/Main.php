<?php
namespace App\DEncrypt;

class Main {

    public $baseKey;
    public $flippedBaseKey;

    function __construct($defaultBaseKey = "abcdefghijklmnopqrstuvwxyz0123456789;`</>- |_=,.:ABCDEFGHIJKLMNOPQRSTUVWXYZ\/", $offsetKey = 105) {
        $baseKeyRemap = [];
        foreach(str_split($defaultBaseKey) as $keyArray => $valueArray) {
            $baseKeyRemap[($keyArray + $offsetKey)] = $valueArray;
        }
        if(array_key_first($baseKeyRemap) < 100) {
            exit("offset is too small, please input it from 100 - 999");
        }elseif(array_key_last($baseKeyRemap) > 999) {
            exit("offset is too big, please reduce it");
        }
        $this->baseKey = $baseKeyRemap;
        $this->flippedBaseKey = array_flip($this->baseKey);
    }

    public function generateRandomNumber($min = 1, $max = 10) {
        $returnFunc = "";
        for ($i = 0; $i < rand($min, $max); $i++) {
            $genRandomNumber = rand(100, 999);
            if(!array_key_exists($genRandomNumber, $this->baseKey)) {
                $returnFunc .= $genRandomNumber;
            }
        }
        return $returnFunc;
    }
    
    public function encryptText($textInput) {
        $textSplit = str_split($textInput);
        $encryptedText = "";
        foreach($textSplit as $iterSplit) {
            $encryptedText .= $this->generateRandomNumber();
            $encryptedText .= $this->flippedBaseKey[$iterSplit];
            $encryptedText .= $this->generateRandomNumber(1, 3);
        }
        return $encryptedText;
    }

    public function decryptText($textInput) {
        $textSplit = str_split($textInput, 3);
        $dencryptedText = "";
        foreach($textSplit as $iterSplit) {
            if(array_key_exists($iterSplit, $this->baseKey)) {
                $dencryptedText .= $this->baseKey[$iterSplit];
            }
        }
        return $dencryptedText;
    }

}