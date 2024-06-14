<?php
declare(strict_types=1);

namespace eurosat7\ascii;

class AsciiFontTools
{
    /**
     * Does not override existing chars
     */
    public function copyUppercaseToLowercase(AsciiFont $font): AsciiFont
    {
        foreach (range('A', 'Z') as $char) {
            $lcase = strtolower($char);
            $asciiCharInfo = $font->getCharInfo($char);
            if ($asciiCharInfo->width > 0) {
                continue;
            }
            $font->char($lcase, $asciiCharInfo->data);
        }

        return $font;
    }

    public function flipCharHor(AsciiCharInfo $char): AsciiCharInfo
    {
        return $char;
    }

    public function flipCharVert(AsciiCharInfo $char): AsciiCharInfo
    {
        return $char;
    }

    /**
     * @param array<int, string> $data
     * @return array<int, string>
     */
    public function colorizeCharData(array $data, string $color): array
    {
        foreach ($data as $i => $line) {
            $data[$i] = $this->colorizeLine($line, $color);
        }
        return $data;
    }

    public function colorizeLine(string $line, string $color): string
    {
        for ($i = 0; $i < strlen($line); $i++) {
            if (trim($line[$i]) === '') continue;
            $line[$i] = $color;
        }
        return $line;
    }

}