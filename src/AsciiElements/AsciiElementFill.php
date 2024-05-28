<?php

declare(strict_types=1);

namespace eurosat7\ascii\AsciiElements;

use Generator;

readonly class AsciiElementFill implements AsciiElementInterface
{
    public function __construct(
        public string $char,
        public int $x,
        public int $y,
        public int $width,
        public int $height,
    ) {
    }

    public function getGenerator(): Generator
    {
        for ($y = $this->y; $y < $this->height; $y++) {
            for ($x = $this->x; $x < $this->width; $x++) {
                yield [$x, $y, $this->char];
            }
        }
    }
}
