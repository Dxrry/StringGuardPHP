<?php
namespace App;

class StringGuard {

    public $baseKey;
    public $flippedBaseKey;

    function __construct($defaultBaseKey = "abcdefghijklmnopqrstuvwxyz0123456789;`</>- |_=,.:ABCDEFGHIJKLMNOPQRSTUVWXYZ\/", $offsetKey = 105) {
        $baseKeyRemap = array();
        foreach(str_split($defaultBaseKey) as $keyArray => $valueArray) {
            $baseKeyRemap[($keyArray + $offsetKey)] = $valueArray;
        }
        ((array_key_first($baseKeyRemap) < 100) ? exit("too small") : ((array_key_last($baseKeyRemap) > 999) ? exit("too big") : false));
        $this->baseKey = $baseKeyRemap;
        $this->flippedBaseKey = array_flip($this->baseKey);
    }

    private function generateRandomNumber($min = 1, $max = 10) {
        $result = "";
        for ($i = 0; $i < rand($min, $max); $i++) {
            $randomNumber = $this->generateUniqueRandomNumber();
            $result .= $randomNumber;
        }
        return $result;
    }

    private function generateUniqueRandomNumber() {
        do {
            $randomNumber = rand(100, 999);
        } while (array_key_exists($randomNumber, $this->baseKey));
        return $randomNumber;
    }
    
    public function enc($textInput) {
        $textSplit = str_split($textInput);
        $encryptedText = $this->generateRandomNumber(1, 1);
        foreach($textSplit as $iterSplit) {
            (!array_key_exists($iterSplit, $this->flippedBaseKey) ? exit($iterSplit . " not in baseKey") : false);
            $encryptedText .= $this->generateRandomNumber(1, 1);
            $encryptedText .= $this->flippedBaseKey[$iterSplit];
            $encryptedText .= $this->generateRandomNumber(1, 1);
        }
        return $encryptedText;
    }

    public function dec($textInput) {
        $textSplit = str_split($textInput, 3);
        $dencryptedText = "";
        foreach($textSplit as $iterSplit) {
            $dencryptedText .= (array_key_exists($iterSplit, $this->baseKey) ? $this->baseKey[$iterSplit] : "");
        }
        return $dencryptedText;
    }

}