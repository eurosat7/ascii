<?php

declare(strict_types=1);

namespace eurosat7\ascii;

readonly class AsciiCharInfo
{
    /** @param array<int, string> $data */
    public function __construct(
        public array $data,
        public int $width,
        public int $height,
    ) {
    }
}