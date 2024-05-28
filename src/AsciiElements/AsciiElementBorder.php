<?php

declare(strict_types=1);

namespace eurosat7\ascii\AsciiElements;

use Generator;

readonly class AsciiElementBorder implements AsciiElementInterface
{
    /** @param array<int, array <int, string>> $chars */
    public function __construct(
        public array $chars,
        public int $left,
        public int $top,
        public int $right,
        public int $bottom,
    ) {
    }

    public function getGenerator(): Generator
    {
        for ($iy = $this->top + 1; $iy < $this->bottom; $iy++) {
            yield [$this->left, $iy, $this->chars[1][0]];
            yield [$this->right, $iy, $this->chars[1][2]];
        }
        for ($ix = $this->left + 1; $ix < $this->right; $ix++) {
            yield [$ix, $this->top, $this->chars[0][1]];
            yield [$ix, $this->bottom, $this->chars[2][1]];
        }
        yield [$this->left, $this->top, $this->chars[0][0]];
        yield [$this->right, $this->top, $this->chars[0][2]];
        yield [$this->left, $this->bottom, $this->chars[2][0]];
        yield [$this->right, $this->bottom, $this->chars[2][2]];
    }
}