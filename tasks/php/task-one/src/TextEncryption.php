<?php

/**
 * TextEncryption is responsible for text encryption and decryption.
 */
class TextEncryption {
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