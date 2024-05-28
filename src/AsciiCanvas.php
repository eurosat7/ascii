<?php

declare(strict_types=1);

namespace eurosat7\ascii;

class AsciiCanvas
{
    public int $posX = 1;
    public int $posY = 1;

    public bool $transparency = true;
    public ?string $color = null;

    /** @var array<int, array <int,string>> $canvas */
    private array $canvas = [];

    public function __construct(
        public readonly int $width,
        public readonly int $height
    )
    {
    }

    public function setXY(int $x, int $y): void
    {
        $this->posX = $x;
        $this->posY = $y;
    }

    public function write(string $string, ?int $x = null, ?int $y = null): void
    {
        $x ??= $this->posX;
        $y ??= $this->posY;
        if ($x < 0) {
            $x += $this->width - strlen($string) + 1;
        }
        if ($y < 0) {
            $y += $this->height - 1 + 1; // todo multiline
        }
        $string = html_entity_decode($string);
        foreach (mb_str_split($string) as $i => $char) {
            $this->canvas[$y][$x + $i] = htmlentities($char);
            $this->poke($x + $i, $y, $char);
        }
    }

    public function poke(int $x, int $y, string $char): void
    {
        $this->canvas[$y] ??= [];
        $this->canvas[$y][$x] = htmlentities($char);
    }

    /** @return array<int, array <int,string>> */
    public function getCanvas(): array
    {
        return $this->canvas;
    }
}
