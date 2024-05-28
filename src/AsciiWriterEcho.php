<?php

declare(strict_types=1);

namespace eurosat7\ascii;

class AsciiWriterEcho
{
    public function write(AsciiCanvas $ascii, string $newline = "\n"): void
    {
        $canvas = $ascii->getCanvas();
        for ($y = 0; $y < $ascii->height; $y++) {
            for ($x = 0; $x < $ascii->width; $x++) {
                echo $canvas[$y][$x] ?? ' ';
            }
            echo $newline;
        }
    }
}
