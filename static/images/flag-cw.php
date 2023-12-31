<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x11' => [
        Color::fromRGBA(0x002a7ffd),
        Color::fromRGBA(0x042d80fd),
        Color::fromRGBA(0x012b7ffd),
        Color::fromRGBA(0x002a7ffd),
        Color::fromRGBA(0x002b7ffd),
        Color::fromRGBA(0x002b7ffd),
        Color::fromRGBA(0x002b7ffd),
        Color::fromRGBA(0x002b7ffd),
        Color::fromRGBA(0x002b7ffd),
        Color::fromRGBA(0x002b7ffd),
        Color::fromRGBA(0x002b7ffd),
        Color::fromRGBA(0x002b7ffd),
        Color::fromRGBA(0x002b7ffd),
        Color::fromRGBA(0x002b7ffd),
        Color::fromRGBA(0x002b7ffd),
        Color::fromRGBA(0x002b7ffd),
        Color::fromRGBA(0x052f81ff),
        Color::fromRGBA(0x617bafff),
        Color::fromRGBA(0x315397ff),
        Color::fromRGBA(0x00287dff),
        Color::fromRGBA(0x002a7eff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x022c80ff),
        Color::fromRGBA(0x3d5e9eff),
        Color::fromRGBA(0x224790ff),
        Color::fromRGBA(0x1d438dff),
        Color::fromRGBA(0x063082ff),
        Color::fromRGBA(0x002a7eff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002a7eff),
        Color::fromRGBA(0x00277dff),
        Color::fromRGBA(0x294c93ff),
        Color::fromRGBA(0xafbcd6ff),
        Color::fromRGBA(0x385a9bff),
        Color::fromRGBA(0x00297eff),
        Color::fromRGBA(0x002a7eff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002a7eff),
        Color::fromRGBA(0x113987ff),
        Color::fromRGBA(0x4e6ca6ff),
        Color::fromRGBA(0x183f8bff),
        Color::fromRGBA(0x00297eff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x325169ff),
        Color::fromRGBA(0x325169ff),
        Color::fromRGBA(0x325169ff),
        Color::fromRGBA(0x325169ff),
        Color::fromRGBA(0x325169ff),
        Color::fromRGBA(0x325169ff),
        Color::fromRGBA(0x325169ff),
        Color::fromRGBA(0x325169ff),
        Color::fromRGBA(0x325169ff),
        Color::fromRGBA(0x325169ff),
        Color::fromRGBA(0x325169ff),
        Color::fromRGBA(0x325169ff),
        Color::fromRGBA(0x325169ff),
        Color::fromRGBA(0x325169ff),
        Color::fromRGBA(0x325169ff),
        Color::fromRGBA(0x325169ff),
        Color::fromRGBA(0xe3d71dff),
        Color::fromRGBA(0xe3d71dff),
        Color::fromRGBA(0xe3d71dff),
        Color::fromRGBA(0xe3d71dff),
        Color::fromRGBA(0xe3d71dff),
        Color::fromRGBA(0xe3d71dff),
        Color::fromRGBA(0xe3d71dff),
        Color::fromRGBA(0xe3d71dff),
        Color::fromRGBA(0xe3d71dff),
        Color::fromRGBA(0xe3d71dff),
        Color::fromRGBA(0xe3d71dff),
        Color::fromRGBA(0xe3d71dff),
        Color::fromRGBA(0xe3d71dff),
        Color::fromRGBA(0xe3d71dff),
        Color::fromRGBA(0xe3d71dff),
        Color::fromRGBA(0xe3d71dff),
        Color::fromRGBA(0x466060ff),
        Color::fromRGBA(0x466060ff),
        Color::fromRGBA(0x466060ff),
        Color::fromRGBA(0x466060ff),
        Color::fromRGBA(0x466060ff),
        Color::fromRGBA(0x466060ff),
        Color::fromRGBA(0x466060ff),
        Color::fromRGBA(0x466060ff),
        Color::fromRGBA(0x466060ff),
        Color::fromRGBA(0x466060ff),
        Color::fromRGBA(0x466060ff),
        Color::fromRGBA(0x466060ff),
        Color::fromRGBA(0x466060ff),
        Color::fromRGBA(0x466060ff),
        Color::fromRGBA(0x466060ff),
        Color::fromRGBA(0x466060ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002880ff),
        Color::fromRGBA(0x002b7ffd),
        Color::fromRGBA(0x002b7ffd),
        Color::fromRGBA(0x002b7ffd),
        Color::fromRGBA(0x002b7ffd),
        Color::fromRGBA(0x002b7ffd),
        Color::fromRGBA(0x002b7ffd),
        Color::fromRGBA(0x002b7ffd),
        Color::fromRGBA(0x002b7ffd),
        Color::fromRGBA(0x002b7ffd),
        Color::fromRGBA(0x002b7ffd),
        Color::fromRGBA(0x002b7ffd),
        Color::fromRGBA(0x002b7ffd),
        Color::fromRGBA(0x002b7ffd),
        Color::fromRGBA(0x002b7ffd),
        Color::fromRGBA(0x002b7ffd),
        Color::fromRGBA(0x002b7ffd)
    ],
    '32x21' => [
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002a7ffe),
        Color::fromRGBA(0x002a7efe),
        Color::fromRGBA(0x002a7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002a7eff),
        Color::fromRGBA(0x00297eff),
        Color::fromRGBA(0x083183ff),
        Color::fromRGBA(0x002a7eff),
        Color::fromRGBA(0x002a7eff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002a7eff),
        Color::fromRGBA(0x032d80ff),
        Color::fromRGBA(0x224790ff),
        Color::fromRGBA(0x7189b7ff),
        Color::fromRGBA(0x2a4e94ff),
        Color::fromRGBA(0x052f81ff),
        Color::fromRGBA(0x002a7eff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002a7eff),
        Color::fromRGBA(0x042c80ff),
        Color::fromRGBA(0x6781b3ff),
        Color::fromRGBA(0xedf0f6ff),
        Color::fromRGBA(0x7b91bdff),
        Color::fromRGBA(0x082f81ff),
        Color::fromRGBA(0x002a7eff),
        Color::fromRGBA(0x002a7eff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x00287dff),
        Color::fromRGBA(0x325498ff),
        Color::fromRGBA(0x6c85b5ff),
        Color::fromRGBA(0x3c5d9dff),
        Color::fromRGBA(0x00287dff),
        Color::fromRGBA(0x052f81ff),
        Color::fromRGBA(0x093283ff),
        Color::fromRGBA(0x002a7eff),
        Color::fromRGBA(0x002a7eff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x022d80ff),
        Color::fromRGBA(0x00297dff),
        Color::fromRGBA(0x032d80ff),
        Color::fromRGBA(0x052d80ff),
        Color::fromRGBA(0x3b5c9cff),
        Color::fromRGBA(0x5874abff),
        Color::fromRGBA(0x052d80ff),
        Color::fromRGBA(0x022c80ff),
        Color::fromRGBA(0x002a7eff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002a7eff),
        Color::fromRGBA(0x002a7eff),
        Color::fromRGBA(0x062f81ff),
        Color::fromRGBA(0x5e78adff),
        Color::fromRGBA(0xc8d1e3ff),
        Color::fromRGBA(0xdae0ecff),
        Color::fromRGBA(0x778dbaff),
        Color::fromRGBA(0x113887ff),
        Color::fromRGBA(0x002a7eff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002a7eff),
        Color::fromRGBA(0x00297eff),
        Color::fromRGBA(0x214790ff),
        Color::fromRGBA(0xd0d8e7ff),
        Color::fromRGBA(0xe6eaf2ff),
        Color::fromRGBA(0x4363a1ff),
        Color::fromRGBA(0x00297dff),
        Color::fromRGBA(0x002a7eff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x00297eff),
        Color::fromRGBA(0x1e448eff),
        Color::fromRGBA(0x4f6ca6ff),
        Color::fromRGBA(0x4565a2ff),
        Color::fromRGBA(0x325498ff),
        Color::fromRGBA(0x00297dff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002a7eff),
        Color::fromRGBA(0x012c7fff),
        Color::fromRGBA(0x00297eff),
        Color::fromRGBA(0x00287dff),
        Color::fromRGBA(0x012c7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002a7eff),
        Color::fromRGBA(0x002a7eff),
        Color::fromRGBA(0x002a7eff),
        Color::fromRGBA(0x002a7eff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0x103777ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xc8c328ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xffed10ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0xafb033ff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x052e7cff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002a7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7fff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7eff),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe),
        Color::fromRGBA(0x002b7ffe)
    ],
];

$img = new Image(16, 11);
$img->append($pixels['16x11'], new Size(16, 11));
$img->append($pixels['32x21'], new Size(32, 21));

return $img;
