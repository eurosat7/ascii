<?php

declare(strict_types=1);

namespace eurosat7\ascii\AsciiPalette;

class DefaultAsciiPalette
{
    public function getCharForRGB(float $r, float $g, float $b): string
    {
        // HSP, Perceived brightness; http://alienryderflex.com/hsp.html
        $p = sqrt(0.299 * $r ^ 2 + 0.587 * $g ^ 2 + 0.114 * $b ^ 2);

        return $this->getCharForLuminance($p);
    }

    public function getCharForLuminance(float $l): string
    {
        if ($l >= 0.5) {
            return '*';
        }

        return ' ';
    }
}
