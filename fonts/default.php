<?php

declare(strict_types=1);

namespace eurosat7\ascii;

// for now you can not paint with utf-8 and htmlentities here.

$font = new AsciiFont(lineheight: 7);
$tools = new AsciiFontTools();

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
$font->char('E', [
    'EEEE',
    'E',
    'EE',
    'E',
    'EEEE',
]);
$font->char('F', [
    'FFFF',
    'F',
    'F',
    'F',
    'F',
]);
$font->char('G', [
    ' GGG',
    'G',
    'G GG',
    'G  G',
    ' GGG',
]);

$font->char('H', [
    'H  H',
    'H  H',
    'HHHH',
    'H  H',
    'H  H',
]);
$font->char('I', [
    'IIII',
    '  I',
    '  I',
    '  I',
    'IIII',
]);
$font->char('J', [
    'JJJJ',
    '   J',
    '   J',
    'J  J',
    ' JJ',
]);
$font->char('K', [
    'K  K',
    'K  K',
    'KKK',
    'K  K',
    'K  K',
]);
$font->char('L', [
    'L',
    'L',
    'L',
    'L',
    'LLLL',
]);
$font->char('M', [
    'MM MM',
    'M M M',
    'M M M',
    'M   M',
    'M   M',
]);
$font->char('N', [
    'NN N',
    'N NN',
    'N  N',
    'N  N',
    'N  N',
]);
$font->char('O', [
    ' OO',
    'O  O',
    'O  O',
    'O  O',
    ' OO',
]);
$font->char('P', [
    'PPP',
    'P  P',
    'PPP',
    'P',
    'P',
]);
$font->char('Q', [
    ' QQ',
    'Q  Q',
    'Q  Q',
    'Q QQ',
    ' QQQ',
]);
$font->char('R', [
    'RRR',
    'R  R',
    'RRR',
    'R  R',
    'R  R',
]);
$font->char('S', [
    ' SSS',
    'S',
    ' SS',
    '   S',
    'SSS',
]);
$font->char('T', [
    'TTTTT',
    '  T',
    '  T',
    '  T',
    '  T',
]);
$font->char('U', [
    'U  U',
    'U  U',
    'U  U',
    'U  U',
    ' UU',
]);
$font->char('V', [
    'V  V',
    'V  V',
    'V  V',
    ' V V',
    '  V',
]);
$font->char('W', [
    'W   W',
    'W   W',
    'W W W',
    'W W W',
    ' W W',
]);
$font->char('X', [
    'X   X',
    ' X X',
    '  X',
    ' X X',
    'X   X',
]);
$font->char('Y', [
    'Y  Y',
    ' Y Y',
    '  Y',
    '  Y',
    '  Y',
]);
$font->char('Z', [
    'ZZZZ',
    '   Z',
    ' ZZ',
    'Z ',
    'ZZZZ',
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
$font->char('?', [
    '??',
    '  ?',
    ' ??',
    '',
    ' ?',
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
$font->char('"', [
    '" "',
]);
$font->char("'", [
    "'",
]);
$font->char('`', [
    '`',
]);
$font->char('~', [
    2=>' ~ ~',
    '~ ~',
]);
$font->char('#', [
    ' # #',
    '#####',
    ' # #',
    '#####',
    ' # #',
]);
$font->char('&', [
    ' & ',
    '&&&',
    ' &  &',
    '&&&&&',
    ' &  &',
]);
$font->char('%', [
    '%  %',
    '   %',
    ' %%',
    '%',
    '%  %',
]);
$font->char('$', [
    ' $$$$',
    '$ $',
    ' $$$',
    '  $ $',
    '$$$$',
]);
$font->char('€', [
    ' €€€€',
    '€',
    '€€€',
    '€',
    ' €€€€',
]);
$font->char('§', [
    ' §§§ ',
    '§ §',
    '§§§§§',
    '  § §',
    ' §§§',
]);
$font->char('|', [
    '|',
    '|',
    '|',
    '|',
    '|',
]);

$font->char('-', [
    2 => '---',
]);
$font->char('+', [
    1 => ' +',
    '+++',
    ' +',
]);
$font->char('*', [
    1 => '***',
    '***',
    '***',
]);
$font->char('=', [
    1 => '===',
    3 => '===',
]);
$font->char('_', [
    4 => '_   _',
    '_____',
]);
$font->char('/', [
    '  /',
    ' /',
    ' /',
    ' /',
    '/',
]);
$font->char('(', [
    ' ((',
    '(',
    '(',
    '(',
    ' ((',
]);
$font->char('<', [
    '  <',
    ' <',
    '<',
    ' <',
    '  <',
]);
$font->char('{', [
    ' {{',
    ' {',
    '{',
    ' {',
    ' {{',
]);
$font->char('[', [
    '[[[',
    '[',
    '[',
    '[',
    '[[[',
]);

$font->char('Ä', [
    ' ÄÄ  ÄÄÄÄ',
    'Ä  Ä Ä',
    'ÄÄÄÄ ÄÄÄ',
    'Ä  Ä Ä',
    'Ä  Ä ÄÄÄÄ',
]);
$font->char('Ö', [
    ' öö  öööö',
    'ö  ö ö',
    'ö  ö ööö',
    'ö  ö ö',
    ' öö  öööö',
]);
$font->char('Ü', [
    'Ü  Ü ÜÜÜÜ',
    'Ü  Ü Ü',
    'Ü  Ü ÜÜÜ',
    'Ü  Ü Ü',
    ' ÜÜ  ÜÜÜÜ',
]);
$font->char('ß', [
    ' ßßß  ßßß',
    'ß    ß',
    ' ßß   ßß',
    '   ß    ß',
    'ßßß  ßßß',
]);

$font->char('>', $tools->colorizeCharData($font->getCharInfo('<')->data, '>'));
$font->char(')', $tools->colorizeCharData($font->getCharInfo('(')->data, ')'));
$font->char('}', $tools->colorizeCharData($font->getCharInfo('{')->data, '}'));
$font->char('[', $tools->colorizeCharData($font->getCharInfo(']')->data, '['));
$font->char('\\', $tools->colorizeCharData($font->getCharInfo('/')->data, '\\'));

$font = $tools->copyUppercaseToLowercase($font);
$font->char('ä', $font->getCharInfo('Ä')->data);
$font->char('ö', $font->getCharInfo('Ö')->data);
$font->char('ü', $font->getCharInfo('Ü')->data);

return $font;
