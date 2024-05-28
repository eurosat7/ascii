<?php
// utf-8

declare(strict_types=1);

namespace eurosat7\ascii\AsciiPalette;

class C64AsciiPalette extends DefaultAsciiPalette
{
    public function getCharForLuminance(float $l): string
    {
        parent::getCharForLuminance($l);
        $floor = (int) floor($l * 4.999);

        return match ($floor) {
            4 => '█',
            3 => '▓',
            2 => '▒',
            1 => '░',
            default => ' '
        };
    }
}
