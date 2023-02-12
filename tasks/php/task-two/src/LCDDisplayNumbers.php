<?php

    class LCDDisplayNumbers {
        /**
         * 
         * displayNumbers() displays the numbers entered by the user in a form similar to that on lcd screens.
         * 
         * @param string $numberToDisplay
         * 
         * @return void
         */
        public function displayLCDNumbers ($numberToDisplay): void {
            echo "<pre>";
            for ($i = 0; $i < 3; $i++) {
                for ($j = 0; $j < strlen($numberToDisplay); $j++) {
                    echo $this->convertedNumbers[$numberToDisplay[$j]][$i];
                }
                echo "<br>";
            }
            echo "</pre>";
        }

        private array $convertedNumbers = [
            [" _ ", "| |", "|_|"],
            ["   ", "  |", "  |"],
            [" _ ", " _|", "|_ "],
            [" _ ", " _|", " _|"],
            ["   ", "|_|", "  |"],
            [" _ ", "|_ ", " _|"],
            [" _ ", "|_ ", "|_|"],
            [" _ ", "  |", "  |"],
            [" _ ", "|_|", "|_|"],
            [" _ ", "|_|", " _|"]
        ];
    }
?>