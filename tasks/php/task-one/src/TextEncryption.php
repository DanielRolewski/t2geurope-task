<?php

/**
 * TextEncryption is responsible for text encryption and decryption.
 */
class TextEncryption {
    /**
     * decryptor() is responsible for text decryption and encryption.
     * 
     * @param string $textToDecrypt text to decrypt or encrypt.
     * @param bool $isEncryptor if true, decryptor() method encrypt text instead of decrypting it.
     * @return string
     */
    public function decryptor ($textToDecrypt, $isEncryptor): string {
        $allCharConnections = $this->getCharConnections();
        $splittedDecryptText = mb_str_split($textToDecrypt);

        $charConnIndex = [0, 1]; 
        if ($isEncryptor) $charConnIndex = [1, 0];

        for ($i = 0; $i < count($splittedDecryptText); $i++) {
            for ($j = 0; $j < count($allCharConnections); $j++) {
                if ($splittedDecryptText[$i] === $allCharConnections[$j][$charConnIndex[0]]) {
                    $splittedDecryptText[$i] = $allCharConnections[$j][$charConnIndex[1]];
                    break;
                }
            }
        }

        return htmlspecialchars(implode($splittedDecryptText)); 
    }

    /**
     * getCharConnections() is responsible for delivery char connections.
     * 
     * @return array
     */
    private function getCharConnections(): array {
        $charsWithAscii = array();
        $firstCharNum = 97;
        $lastCharNum = 111;
        $asciiCharOffset = 11;

        //Chars connections that must be hardcoded.
        $charsWithoutAscii = [
            ['!', 'a'],
            [')', 'b'],
            ['"', 'c'],
            ['(', 'd'],
            ['£', 'e'],
            ['*', 'f'],
            ['%', 'g'],
            ['&', 'h'],
            ['>', 'i'],
            ['<', 'j'],
            ['@', 'k']
        ];
        
        for ($i = $firstCharNum; $i <= $lastCharNum; $i++) {
            array_push($charsWithAscii, [chr($i), chr($i + $asciiCharOffset)]);
        }

        return array_merge($charsWithoutAscii, $charsWithAscii);;
    }
}

?>