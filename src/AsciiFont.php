<?php

declare(strict_types=1);

namespace eurosat7\ascii;

class AsciiFont
{
    /** @var AsciiCharInfo[] $chars */
    private array $chars = []; // y,x

    public function __construct(
        public readonly int $lineheight,
        public readonly int $letterspacing = 1,
    )
    {
        $this->chars[''] = new AsciiCharInfo([], 0, 0);
    }

    /** @param array<int,string> $data */
    public function char(string $char, array $data, ?int $dx = null, ?int $dy = null): self
    {
        if ($dx === null || $dy === null) {
            [$dx, $dy] = $this->calcDim($data);
        }
        $this->chars[$char] = new AsciiCharInfo($data, $dx, $dy);

        return $this;
    }

    public function getCharInfo(string $char): AsciiCharInfo
    {
        return $this->chars[$char] ?? $this->chars[''];
    }

    /**
     * @param array<int,string> $data
     * @return array{int,int}
     */
    private function calcDim(array $data): array
    {
        $dy = count($data);
        $dx = 0;
        foreach ($data as $line) {
            $dx = max($dx, strlen($line));
        }

        return [$dx, $dy];
    }
}
