<?php

declare(strict_types=1);

namespace eurosat7\ascii;

class AsciiWriterFile
{
    public function write(AsciiCanvas $ascii, string $filename, string $newline = "\n"): void
    {
        ob_start();
        $writer = new AsciiWriterEcho();
        $writer->write($ascii, $newline);
        $string = ob_get_clean();
        file_put_contents($filename, $string);
    }
}
