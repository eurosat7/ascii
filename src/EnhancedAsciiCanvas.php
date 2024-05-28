<?php

declare(strict_types=1);

namespace eurosat7\ascii;

use eurosat7\ascii\AsciiElements\AsciiElementBorder;
use eurosat7\ascii\AsciiElements\AsciiElementChar;
use eurosat7\ascii\AsciiElements\AsciiElementFill;
use eurosat7\ascii\AsciiElements\AsciiElementInterface;

// uses some AsciiElementInterfaces
// supports a font for writing
class EnhancedAsciiCanvas extends AsciiCanvas
{
    // used as new $x if a newline triggers
    public int $paddingLeft = 1;

    public function __construct(
        int              $width,
        int              $height,
        public AsciiFont $font,
    )
    {
        parent::__construct($width, $height);
    }

    /** @SuppressWarnings(PHPMD.BooleanArgumentFlag) */
    public function drawElement(AsciiElementInterface $element, bool $transparency = false, ?string $forcedColor = null): void
    {
        foreach ($element->getGenerator() as [$x, $y, $c]) {
            if ($transparency && trim($c) === '') {
                continue;
            }
            $this->poke($x, $y, $forcedColor ?? $c);
        }
    }

    // helper to build AsciiElementFill
    public function fill(string $char, ?int $x = null, ?int $y = null, ?int $dx = null, ?int $dy = null): void
    {
        $x ??= 0;
        $y ??= 0;
        $dx ??= $this->width;
        $dy ??= $this->height;
        $fill = new AsciiElementFill($char, $x, $y, $dx, $dy);
        $this->drawElement($fill);
    }

    // helper to build AsciiElementChar
    private function printChar(string $char): void
    {
        $charinfo = $this->font->getCharInfo($char);
        $element = new AsciiElementChar($charinfo->data, $this->posX, $this->posY);
        $this->drawElement($element, true, $this->color);
        $this->posX += $charinfo->width + $this->font->letterspacing;
    }

    // helper to build AsciiElementBorder

    /** @param array<int, array <int, string>> $border */
    public function border(array $border, int $left, int $top, ?int $bottom = null, ?int $right = null): void
    {
        if ($right === null) {
            $right = $this->width - $left - 1;
        }
        if ($bottom === null) {
            $bottom = $this->height - $top - 1;
        }
        $element = new AsciiElementBorder($border, $left, $top, $right, $bottom);
        $this->drawElement($element);
    }

    // applies font
    public function print(string $string, ?int $x = null, ?int $y = null): void
    {
        $charList = $this->getCharList($string);
        $x1 = $x;
        $y1 = $y;
        if ($x1 !== null) {
            if ($x1 < 0) {
                $x1 += $this->width - $this->calcWidth($string);
            }
            $this->posX = $x1;
        }
        if ($y1 !== null) {
            if ($y1 < 0) {
                $y1 += $this->height - 1 + 1; // todo multiline
            }
            $this->posY = $y1;
        }
        foreach ($charList as $char) {
            $charinfo = $this->font->getCharInfo($char);
            if ($this->posX + $charinfo->width > $this->width) {
                $this->newline();
            }
            $this->printChar($char);
        }
    }

    public function newline(?int $x = null): void
    {
        $this->posX = $x ?? $this->paddingLeft;
        $this->posY += $this->font->lineheight;
    }

    private function calcWidth(string $string): int
    {
        $width = 0;
        $charList = $this->getCharList($string);
        foreach ($charList as $char) {
            $charinfo = $this->font->getCharInfo($char);
            $width += $charinfo->width;
        }

        return $width + (count($charList) - 1) * $this->font->letterspacing;
    }

    /** @return array<string> */
    private function getCharList(string $string): array
    {
        $string = html_entity_decode($string);

        return mb_str_split($string);
    }
}
