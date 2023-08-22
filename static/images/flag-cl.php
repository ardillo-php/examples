<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x11' => [
        Color::fromRGBA(0x043ba6ff),
        Color::fromRGBA(0x043ca7ff),
        Color::fromRGBA(0x033ba6ff),
        Color::fromRGBA(0x043ba6ff),
        Color::fromRGBA(0x063da7ff),
        Color::fromRGBA(0xa5b7ddff),
        Color::fromRGBA(0xfffefcff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0x0038a5ff),
        Color::fromRGBA(0x023aa6ff),
        Color::fromRGBA(0x1f51b1ff),
        Color::fromRGBA(0x0940a9ff),
        Color::fromRGBA(0x013aa6ff),
        Color::fromRGBA(0xa4b8dfff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x0037a5ff),
        Color::fromRGBA(0x2858b4ff),
        Color::fromRGBA(0xb6c6e5ff),
        Color::fromRGBA(0x587dc5ff),
        Color::fromRGBA(0x013aa6ff),
        Color::fromRGBA(0xa4b8dfff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x0037a5ff),
        Color::fromRGBA(0x1448acff),
        Color::fromRGBA(0x6e8eccff),
        Color::fromRGBA(0x3361b8ff),
        Color::fromRGBA(0x0038a5ff),
        Color::fromRGBA(0xa4b8dfff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x0039a7ff),
        Color::fromRGBA(0x003aa8ff),
        Color::fromRGBA(0x0138a7ff),
        Color::fromRGBA(0x013aa8ff),
        Color::fromRGBA(0x013aa8ff),
        Color::fromRGBA(0xa4b9e0ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x6a3262ff),
        Color::fromRGBA(0x6a3161ff),
        Color::fromRGBA(0x6a3161ff),
        Color::fromRGBA(0x6a3161ff),
        Color::fromRGBA(0x6b3262ff),
        Color::fromRGBA(0xbc727eff),
        Color::fromRGBA(0xec968fff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xd72a1cff),
        Color::fromRGBA(0xd72a1cff),
        Color::fromRGBA(0xd72a1cff),
        Color::fromRGBA(0xd72a1cff),
        Color::fromRGBA(0xd72a1cff),
        Color::fromRGBA(0xd5291bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1efd),
        Color::fromRGBA(0xd52b1efd),
        Color::fromRGBA(0xd52b1efd),
        Color::fromRGBA(0xd52b1efd),
        Color::fromRGBA(0xd52b1efd),
        Color::fromRGBA(0xd52b1efd),
        Color::fromRGBA(0xd52b1efd),
        Color::fromRGBA(0xd52b1efd),
        Color::fromRGBA(0xd52b1efd),
        Color::fromRGBA(0xd52b1efd),
        Color::fromRGBA(0xd52b1efd),
        Color::fromRGBA(0xd52b1efd),
        Color::fromRGBA(0xd52b1efd),
        Color::fromRGBA(0xd52b1efd),
        Color::fromRGBA(0xd52b1efd),
        Color::fromRGBA(0xd52b1efd)
    ],
    '32x21' => [
        Color::fromRGBA(0x033ba6ff),
        Color::fromRGBA(0x033ba6ff),
        Color::fromRGBA(0x033ba6ff),
        Color::fromRGBA(0x033ba6ff),
        Color::fromRGBA(0x033ba6ff),
        Color::fromRGBA(0x033ba6ff),
        Color::fromRGBA(0x033ba6ff),
        Color::fromRGBA(0x033ba6ff),
        Color::fromRGBA(0x033ba6ff),
        Color::fromRGBA(0x0338a5ff),
        Color::fromRGBA(0x5c7fc5ff),
        Color::fromRGBA(0xfdfbfbff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0x0038a5ff),
        Color::fromRGBA(0x0038a5ff),
        Color::fromRGBA(0x0038a5ff),
        Color::fromRGBA(0x0038a5ff),
        Color::fromRGBA(0x0038a5ff),
        Color::fromRGBA(0x0038a5ff),
        Color::fromRGBA(0x0038a5ff),
        Color::fromRGBA(0x0038a5ff),
        Color::fromRGBA(0x0038a5ff),
        Color::fromRGBA(0x0035a4ff),
        Color::fromRGBA(0x5a7fc5ff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x0039a6ff),
        Color::fromRGBA(0x0039a6ff),
        Color::fromRGBA(0x0039a6ff),
        Color::fromRGBA(0x0038a5ff),
        Color::fromRGBA(0x023ba7ff),
        Color::fromRGBA(0x0d43aaff),
        Color::fromRGBA(0x0038a5ff),
        Color::fromRGBA(0x0039a6ff),
        Color::fromRGBA(0x0039a6ff),
        Color::fromRGBA(0x0035a4ff),
        Color::fromRGBA(0x5a7fc5ff),
        Color::fromRGBA(0xfdfdfeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x0039a6ff),
        Color::fromRGBA(0x0038a5ff),
        Color::fromRGBA(0x0039a6ff),
        Color::fromRGBA(0x0037a5ff),
        Color::fromRGBA(0x1d4fb0ff),
        Color::fromRGBA(0x7090cdff),
        Color::fromRGBA(0x013aa6ff),
        Color::fromRGBA(0x0039a6ff),
        Color::fromRGBA(0x0039a6ff),
        Color::fromRGBA(0x0035a4ff),
        Color::fromRGBA(0x5a7fc5ff),
        Color::fromRGBA(0xfdfdfeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x0039a6ff),
        Color::fromRGBA(0x0038a5ff),
        Color::fromRGBA(0x093fa9ff),
        Color::fromRGBA(0x5b7fc5ff),
        Color::fromRGBA(0xa5b9dfff),
        Color::fromRGBA(0xdfe6f4ff),
        Color::fromRGBA(0x8aa4d6ff),
        Color::fromRGBA(0x3b66baff),
        Color::fromRGBA(0x0139a6ff),
        Color::fromRGBA(0x0035a4ff),
        Color::fromRGBA(0x5a7fc5ff),
        Color::fromRGBA(0xfdfdfeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x0039a6ff),
        Color::fromRGBA(0x0038a5ff),
        Color::fromRGBA(0x0138a5ff),
        Color::fromRGBA(0x2959b4ff),
        Color::fromRGBA(0xd2dcefff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x98afdbff),
        Color::fromRGBA(0x1044abff),
        Color::fromRGBA(0x0038a5ff),
        Color::fromRGBA(0x0035a4ff),
        Color::fromRGBA(0x5a7fc5ff),
        Color::fromRGBA(0xfdfdfeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x0039a6ff),
        Color::fromRGBA(0x0039a6ff),
        Color::fromRGBA(0x0037a5ff),
        Color::fromRGBA(0x174aaeff),
        Color::fromRGBA(0x94acd9ff),
        Color::fromRGBA(0x85a0d4ff),
        Color::fromRGBA(0x7694cfff),
        Color::fromRGBA(0x0239a6ff),
        Color::fromRGBA(0x0038a5ff),
        Color::fromRGBA(0x0035a4ff),
        Color::fromRGBA(0x5a7fc5ff),
        Color::fromRGBA(0xfdfdfeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x0039a6ff),
        Color::fromRGBA(0x0039a6ff),
        Color::fromRGBA(0x0038a5ff),
        Color::fromRGBA(0x0d43aaff),
        Color::fromRGBA(0x1347acff),
        Color::fromRGBA(0x0038a5ff),
        Color::fromRGBA(0x1a4dafff),
        Color::fromRGBA(0x043ca7ff),
        Color::fromRGBA(0x0038a5ff),
        Color::fromRGBA(0x0035a4ff),
        Color::fromRGBA(0x5a7fc5ff),
        Color::fromRGBA(0xfdfdfeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x0039a6ff),
        Color::fromRGBA(0x0039a6ff),
        Color::fromRGBA(0x0039a6ff),
        Color::fromRGBA(0x0038a5ff),
        Color::fromRGBA(0x0038a5ff),
        Color::fromRGBA(0x0038a5ff),
        Color::fromRGBA(0x0037a5ff),
        Color::fromRGBA(0x0038a5ff),
        Color::fromRGBA(0x0039a6ff),
        Color::fromRGBA(0x0035a4ff),
        Color::fromRGBA(0x5a7fc5ff),
        Color::fromRGBA(0xfdfdfeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x0039a7ff),
        Color::fromRGBA(0x0039a7ff),
        Color::fromRGBA(0x0039a7ff),
        Color::fromRGBA(0x0039a7ff),
        Color::fromRGBA(0x0039a7ff),
        Color::fromRGBA(0x0039a7ff),
        Color::fromRGBA(0x0039a7ff),
        Color::fromRGBA(0x0039a7ff),
        Color::fromRGBA(0x0039a7ff),
        Color::fromRGBA(0x0035a6ff),
        Color::fromRGBA(0x5980c7ff),
        Color::fromRGBA(0xfeffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x6a3262ff),
        Color::fromRGBA(0x6a3262ff),
        Color::fromRGBA(0x6a3262ff),
        Color::fromRGBA(0x6a3262ff),
        Color::fromRGBA(0x6a3262ff),
        Color::fromRGBA(0x6a3262ff),
        Color::fromRGBA(0x6a3262ff),
        Color::fromRGBA(0x6a3262ff),
        Color::fromRGBA(0x6a3262ff),
        Color::fromRGBA(0x6a3061ff),
        Color::fromRGBA(0x975571ff),
        Color::fromRGBA(0xe9948eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xea958eff),
        Color::fromRGBA(0xd72a1cff),
        Color::fromRGBA(0xd72a1cff),
        Color::fromRGBA(0xd72a1cff),
        Color::fromRGBA(0xd72a1cff),
        Color::fromRGBA(0xd72a1cff),
        Color::fromRGBA(0xd72a1cff),
        Color::fromRGBA(0xd72a1cff),
        Color::fromRGBA(0xd72a1cff),
        Color::fromRGBA(0xd72a1cff),
        Color::fromRGBA(0xd72a1cff),
        Color::fromRGBA(0xd6291bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd4281bff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1eff),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe),
        Color::fromRGBA(0xd52b1efe)
    ],
];

$img = new Image(16, 11);
$img->append($pixels['16x11'], new Size(16, 11));
$img->append($pixels['32x21'], new Size(32, 21));

return $img;