<?php

declare(strict_types=1);

namespace eurosat7\ascii\AsciiElements;

use Generator;
use Iterator;

interface AsciiElementInterface
{
    /** @return Generator<int, array{int,int,string}, mixed, mixed> */
    public function getGenerator(): Generator;
}
