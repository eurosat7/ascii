<?php

declare(strict_types=1);

namespace eurosat7\ascii;

// I am lazy. font is incomplete

// for now you can not paint with utf-8 and htmlentities here.

$font = new AsciiFont(lineheight: 7);

$font->char(' ', [], dx: 3);

$font->char('A', [
    ' AA',
    'A  A',
    'AAAA',
    'A  A',
    'A  A',
]);
$font->char('B', [
    'BBB',
    'B  B',
    'BBB',
    'B  B',
    'BBB',
]);
$font->char('C', [
    ' CCC',
    'C',
    'C',
    'C',
    ' CCC',
]);
$font->char('D', [
    'DDD',
    'D  D',
    'D  D',
    'D  D',
    'DDD',
]);
$font->char('M', [
    'XX XX',
    'X X X',
    'X X X',
    'X   X',
    'X   X',
]);
$font->char('X', [
    'X   X',
    ' X X',
    '  X',
    ' X X',
    'X   X',
]);

$font->char('1', [
    ' 11',
    '1 1',
    '  1',
    '  1',
    '1111',
]);
$font->char('2', [
    '222',
    '   2',
    '  2',
    '22',
    '2222',
]);
$font->char('3', [
    '333',
    '   3',
    ' 33',
    '   3',
    '333',
]);
$font->char('4', [
    '4',
    '4 4',
    '4444',
    '  4',
    '  4',
]);
$font->char('5', [
    '5555',
    '5',
    '555',
    '   5',
    '555',
]);
$font->char('6', [
    ' 666',
    '6',
    '666',
    '6  6',
    ' 66',
]);
$font->char('7', [
    '7777',
    '   7',
    '  7',
    ' 7',
    ' 7',
]);
$font->char('8', [
    ' 88',
    '8  8',
    ' 88',
    '8  8',
    ' 88',
]);
$font->char('9', [
    ' 99',
    '9  9',
    ' 999',
    '   9',
    '999',
]);
$font->char('0', [
    ' 00',
    '0  0',
    '0  0',
    '0  0',
    ' 00',
]);

$font->char('.', [
    4 => '. ',
]);
$font->char(',', [
    4 => ', ',
    ', ',
]);
$font->char('!', [
    '!!',
    '!!',
    '!',
    '',
    '!',
]);
$font->char(':', [
    2 => ':',
    '',
    ':',
]);
$font->char(';', [
    2 => ';',
    '',
    ';',
    ';',
]);
$font->char('-', [
    2 => '---',
]);
$font->char('=', [
    1 => '===',
    3 => '===',
]);
$font->char('_', [
    4 => '_   _',
    '_____',
]);

return $font;
