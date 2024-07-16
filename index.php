<?php

declare(strict_types=1);

namespace eurosat7\ascii;

use eurosat7\ascii\AsciiPalette\C64AsciiPalette;

include(__DIR__ . '/vendor/autoload.php');

/** @var AsciiFont $font */
$font = include(__DIR__ . '/fonts/default.php');

$ascii = new EnhancedAsciiCanvas(width: 38, height: 9, font: $font);
$palette = new C64AsciiPalette();
$ascii->fill($palette->getCharForLuminance(0.25));

$now = new \DateTime();
$now->setTimezone(new \DateTimeZone('Europe/Berlin'));
$s = (int) $now->format('s');
$format = match ($s % 2) {
    0 => 'H:i:s',
    default => 'H  i  s',
};
$m = (int) $now->format('m');
$pixX = ($m * 20 - $s * 2) % 58;
$pixY = ($m * 60 + $s) % 11;
$ascii->fill($palette->getCharForLuminance(0.50), x: 0, y: $pixY, dx: 38, dy: $pixY + 1);
$ascii->fill($palette->getCharForLuminance(0.75), x: 0, y: $pixX, dx: 38, dy: $pixX + 1);

$ascii->color = $palette->getCharForLuminance(1.00);
$ascii->print(($now)->format($format), x: 3, y: 2);

$border = include(__DIR__ . '/borders/box-drawings-shadowed.php');
$ascii->border($border, 0, 0);

$ascii->write('eurosat7', x: -2, y: -1);

include(__DIR__ . '/html/head.html');
$writer = new AsciiWriterEcho();
$writer->write($ascii);
include(__DIR__ . '/html/foot.html');

// $writer = new AsciiWriterFile();
// $writer->write($ascii, filename: 'file.txt');
