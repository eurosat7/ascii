<?php

declare(strict_types=1);

namespace eurosat7\ascii\AsciiElements;

use Generator;

class AsciiElementChar implements AsciiElementInterface
{
    /** @param array<int,string> $data */
    public function __construct(
        public readonly array $data,
        public int $x,
        public int $y,
    ) {
    }

    public function getGenerator(): Generator
    {
        foreach ($this->data as $y => $line) {
            foreach (mb_str_split($line) as $x => $pixel) {
                yield [$this->x + $x, $this->y + $y, html_entity_decode($pixel)];
            }
        }
    }
}
