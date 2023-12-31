<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x8' => [
        Color::fromRGBA(0xd21535ff),
        Color::fromRGBA(0xa73733ff),
        Color::fromRGBA(0x726130ff),
        Color::fromRGBA(0x43842dff),
        Color::fromRGBA(0x229e2cff),
        Color::fromRGBA(0x12ac2bff),
        Color::fromRGBA(0x0eb02aff),
        Color::fromRGBA(0x0faf2aff),
        Color::fromRGBA(0x10ad2aff),
        Color::fromRGBA(0x11ad2aff),
        Color::fromRGBA(0x12ac2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0xeb0337ff),
        Color::fromRGBA(0xeb0237ff),
        Color::fromRGBA(0xe80d36ff),
        Color::fromRGBA(0xdc2833ff),
        Color::fromRGBA(0xbf3d32ff),
        Color::fromRGBA(0x944a31ff),
        Color::fromRGBA(0x656a2fff),
        Color::fromRGBA(0x3c8b2dff),
        Color::fromRGBA(0x20a12bff),
        Color::fromRGBA(0x12ac2bff),
        Color::fromRGBA(0x0eaf2aff),
        Color::fromRGBA(0x0faf2aff),
        Color::fromRGBA(0x11ad2aff),
        Color::fromRGBA(0x11ad2aff),
        Color::fromRGBA(0x12ac2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0xe90337ff),
        Color::fromRGBA(0xeb0f36ff),
        Color::fromRGBA(0xf14930ff),
        Color::fromRGBA(0xf3562fff),
        Color::fromRGBA(0xf5542fff),
        Color::fromRGBA(0xf44031ff),
        Color::fromRGBA(0xea0936ff),
        Color::fromRGBA(0xdb0f36ff),
        Color::fromRGBA(0xbe2534ff),
        Color::fromRGBA(0x954632ff),
        Color::fromRGBA(0x666a2fff),
        Color::fromRGBA(0x3d8b2dff),
        Color::fromRGBA(0x20a12bff),
        Color::fromRGBA(0x12ac2bff),
        Color::fromRGBA(0x0eaf2aff),
        Color::fromRGBA(0x0fae2aff),
        Color::fromRGBA(0xe90137ff),
        Color::fromRGBA(0xee2d33ff),
        Color::fromRGBA(0xf14731ff),
        Color::fromRGBA(0xf3592fff),
        Color::fromRGBA(0xf03e31ff),
        Color::fromRGBA(0xf35a2fff),
        Color::fromRGBA(0xec1e34ff),
        Color::fromRGBA(0xea0137ff),
        Color::fromRGBA(0xec0137ff),
        Color::fromRGBA(0xed0137ff),
        Color::fromRGBA(0xe90436ff),
        Color::fromRGBA(0xdc0e35ff),
        Color::fromRGBA(0xc02432ff),
        Color::fromRGBA(0x97442fff),
        Color::fromRGBA(0x656b30ff),
        Color::fromRGBA(0x359037ff),
        Color::fromRGBA(0xe90137ff),
        Color::fromRGBA(0xee3232ff),
        Color::fromRGBA(0xf35a2fff),
        Color::fromRGBA(0xf3602eff),
        Color::fromRGBA(0xf04331ff),
        Color::fromRGBA(0xf4632eff),
        Color::fromRGBA(0xed1f34ff),
        Color::fromRGBA(0xea0136ff),
        Color::fromRGBA(0xec0234ff),
        Color::fromRGBA(0xec0134ff),
        Color::fromRGBA(0xe90437ff),
        Color::fromRGBA(0xdf0c42ff),
        Color::fromRGBA(0xca1c58ff),
        Color::fromRGBA(0xab3578ff),
        Color::fromRGBA(0x82559cff),
        Color::fromRGBA(0x5876b8ff),
        Color::fromRGBA(0xe90337ff),
        Color::fromRGBA(0xeb0d36ff),
        Color::fromRGBA(0xf24e30ff),
        Color::fromRGBA(0xf45e2eff),
        Color::fromRGBA(0xf55e2cff),
        Color::fromRGBA(0xf3422eff),
        Color::fromRGBA(0xe90637ff),
        Color::fromRGBA(0xde0c42ff),
        Color::fromRGBA(0xc81e58ff),
        Color::fromRGBA(0xa73878ff),
        Color::fromRGBA(0x83549bff),
        Color::fromRGBA(0x626ebbff),
        Color::fromRGBA(0x4c7fd1ff),
        Color::fromRGBA(0x4188dcff),
        Color::fromRGBA(0x3e8bdfff),
        Color::fromRGBA(0x3f8adfff),
        Color::fromRGBA(0xea0336ff),
        Color::fromRGBA(0xeb0235ff),
        Color::fromRGBA(0xe80738ff),
        Color::fromRGBA(0xe02a41ff),
        Color::fromRGBA(0xc83257ff),
        Color::fromRGBA(0xa63878ff),
        Color::fromRGBA(0x82549cff),
        Color::fromRGBA(0x626ebbff),
        Color::fromRGBA(0x4c80d1ff),
        Color::fromRGBA(0x4188dcff),
        Color::fromRGBA(0x3e8bdfff),
        Color::fromRGBA(0x3e8adeff),
        Color::fromRGBA(0x4089ddff),
        Color::fromRGBA(0x4089ddff),
        Color::fromRGBA(0x4188dcff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0xd71248ff),
        Color::fromRGBA(0xb62c6aff),
        Color::fromRGBA(0x8c4d93ff),
        Color::fromRGBA(0x6768b7ff),
        Color::fromRGBA(0x4d7dd0ff),
        Color::fromRGBA(0x4188dcff),
        Color::fromRGBA(0x3d8be0ff),
        Color::fromRGBA(0x3e8adfff),
        Color::fromRGBA(0x4089ddff),
        Color::fromRGBA(0x4089ddff),
        Color::fromRGBA(0x4188dcff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff)
    ],
    '32x16' => [
        Color::fromRGBA(0xd31535ff),
        Color::fromRGBA(0xa73733ff),
        Color::fromRGBA(0x726130ff),
        Color::fromRGBA(0x43862dff),
        Color::fromRGBA(0x22a02bff),
        Color::fromRGBA(0x12ac2bff),
        Color::fromRGBA(0x0eb02aff),
        Color::fromRGBA(0x0faf2aff),
        Color::fromRGBA(0x10ad2aff),
        Color::fromRGBA(0x11ad2aff),
        Color::fromRGBA(0x12ac2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0xeb0337ff),
        Color::fromRGBA(0xeb0237ff),
        Color::fromRGBA(0xe80536ff),
        Color::fromRGBA(0xd91036ff),
        Color::fromRGBA(0xbd2634ff),
        Color::fromRGBA(0x944732ff),
        Color::fromRGBA(0x656b2fff),
        Color::fromRGBA(0x3c8b2dff),
        Color::fromRGBA(0x20a12bff),
        Color::fromRGBA(0x12ac2bff),
        Color::fromRGBA(0x0eaf2aff),
        Color::fromRGBA(0x0faf2aff),
        Color::fromRGBA(0x11ad2aff),
        Color::fromRGBA(0x11ad2aff),
        Color::fromRGBA(0x12ac2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xe90437ff),
        Color::fromRGBA(0xea0337ff),
        Color::fromRGBA(0xea0337ff),
        Color::fromRGBA(0xec0137ff),
        Color::fromRGBA(0xed0037ff),
        Color::fromRGBA(0xe90237ff),
        Color::fromRGBA(0xdb0d36ff),
        Color::fromRGBA(0xbe2434ff),
        Color::fromRGBA(0x954432ff),
        Color::fromRGBA(0x666a2fff),
        Color::fromRGBA(0x3d8b2dff),
        Color::fromRGBA(0x20a12bff),
        Color::fromRGBA(0x12ac2bff),
        Color::fromRGBA(0x0eaf2aff),
        Color::fromRGBA(0x0faf2aff),
        Color::fromRGBA(0x11ad2aff),
        Color::fromRGBA(0x11ad2aff),
        Color::fromRGBA(0x12ac2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xe90337ff),
        Color::fromRGBA(0xe90237ff),
        Color::fromRGBA(0xea0c36ff),
        Color::fromRGBA(0xee2b33ff),
        Color::fromRGBA(0xee2833ff),
        Color::fromRGBA(0xef2134ff),
        Color::fromRGBA(0xf12534ff),
        Color::fromRGBA(0xe90436ff),
        Color::fromRGBA(0xdb0e36ff),
        Color::fromRGBA(0xbe2534ff),
        Color::fromRGBA(0x954632ff),
        Color::fromRGBA(0x666a2fff),
        Color::fromRGBA(0x3d8b2dff),
        Color::fromRGBA(0x20a12bff),
        Color::fromRGBA(0x12ac2bff),
        Color::fromRGBA(0x0eaf2aff),
        Color::fromRGBA(0x0faf2aff),
        Color::fromRGBA(0x11ad2aff),
        Color::fromRGBA(0x11ad2aff),
        Color::fromRGBA(0x12ac2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xe90337ff),
        Color::fromRGBA(0xee2933ff),
        Color::fromRGBA(0xf4612eff),
        Color::fromRGBA(0xf7812cff),
        Color::fromRGBA(0xf35f2fff),
        Color::fromRGBA(0xf4682eff),
        Color::fromRGBA(0xf8862bff),
        Color::fromRGBA(0xf04031ff),
        Color::fromRGBA(0xec1135ff),
        Color::fromRGBA(0xec0037ff),
        Color::fromRGBA(0xed0137ff),
        Color::fromRGBA(0xe90436ff),
        Color::fromRGBA(0xdb0f36ff),
        Color::fromRGBA(0xbe2534ff),
        Color::fromRGBA(0x954632ff),
        Color::fromRGBA(0x666a2fff),
        Color::fromRGBA(0x3d8b2dff),
        Color::fromRGBA(0x20a12bff),
        Color::fromRGBA(0x12ac2bff),
        Color::fromRGBA(0x0eaf2aff),
        Color::fromRGBA(0x0faf2aff),
        Color::fromRGBA(0x11ad2aff),
        Color::fromRGBA(0x11ad2aff),
        Color::fromRGBA(0x12ac2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xe90237ff),
        Color::fromRGBA(0xec1935ff),
        Color::fromRGBA(0xf7802cff),
        Color::fromRGBA(0xf25030ff),
        Color::fromRGBA(0xed2633ff),
        Color::fromRGBA(0xf4652eff),
        Color::fromRGBA(0xf14731ff),
        Color::fromRGBA(0xef3332ff),
        Color::fromRGBA(0xf67a2cff),
        Color::fromRGBA(0xf35d2fff),
        Color::fromRGBA(0xea0836ff),
        Color::fromRGBA(0xe90337ff),
        Color::fromRGBA(0xea0337ff),
        Color::fromRGBA(0xea0337ff),
        Color::fromRGBA(0xec0137ff),
        Color::fromRGBA(0xed0137ff),
        Color::fromRGBA(0xe90436ff),
        Color::fromRGBA(0xdb0f36ff),
        Color::fromRGBA(0xbe2534ff),
        Color::fromRGBA(0x954632ff),
        Color::fromRGBA(0x666a2fff),
        Color::fromRGBA(0x3d8b2dff),
        Color::fromRGBA(0x20a12bff),
        Color::fromRGBA(0x12ac2bff),
        Color::fromRGBA(0x0eaf2aff),
        Color::fromRGBA(0x0faf2aff),
        Color::fromRGBA(0x11ad2aff),
        Color::fromRGBA(0x11ad2aff),
        Color::fromRGBA(0x12ac2bff),
        Color::fromRGBA(0x12ad2bff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xe90137ff),
        Color::fromRGBA(0xf03f31ff),
        Color::fromRGBA(0xf8882bff),
        Color::fromRGBA(0xeb1435ff),
        Color::fromRGBA(0xf14c30ff),
        Color::fromRGBA(0xf7852bff),
        Color::fromRGBA(0xf77f2cff),
        Color::fromRGBA(0xea0d36ff),
        Color::fromRGBA(0xf14e30ff),
        Color::fromRGBA(0xfa9e29ff),
        Color::fromRGBA(0xec1735ff),
        Color::fromRGBA(0xe90237ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xe90437ff),
        Color::fromRGBA(0xea0337ff),
        Color::fromRGBA(0xea0337ff),
        Color::fromRGBA(0xec0137ff),
        Color::fromRGBA(0xed0137ff),
        Color::fromRGBA(0xe90436ff),
        Color::fromRGBA(0xdb0f36ff),
        Color::fromRGBA(0xbe2534ff),
        Color::fromRGBA(0x954632ff),
        Color::fromRGBA(0x666a2fff),
        Color::fromRGBA(0x3d8b2dff),
        Color::fromRGBA(0x20a12bff),
        Color::fromRGBA(0x12ac2bff),
        Color::fromRGBA(0x0eaf2aff),
        Color::fromRGBA(0x0fae2aff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0337ff),
        Color::fromRGBA(0xe90237ff),
        Color::fromRGBA(0xf3582fff),
        Color::fromRGBA(0xf56f2dff),
        Color::fromRGBA(0xe90237ff),
        Color::fromRGBA(0xf03d32ff),
        Color::fromRGBA(0xf88b2bff),
        Color::fromRGBA(0xf2542fff),
        Color::fromRGBA(0xea0636ff),
        Color::fromRGBA(0xed2733ff),
        Color::fromRGBA(0xf9962aff),
        Color::fromRGBA(0xed2733ff),
        Color::fromRGBA(0xe90237ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xe90437ff),
        Color::fromRGBA(0xea0337ff),
        Color::fromRGBA(0xea0337ff),
        Color::fromRGBA(0xec0137ff),
        Color::fromRGBA(0xed0137ff),
        Color::fromRGBA(0xe90436ff),
        Color::fromRGBA(0xdc0e35ff),
        Color::fromRGBA(0xc02432ff),
        Color::fromRGBA(0x98442fff),
        Color::fromRGBA(0x656b30ff),
        Color::fromRGBA(0x369037ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xe90337ff),
        Color::fromRGBA(0xe90337ff),
        Color::fromRGBA(0xf4622eff),
        Color::fromRGBA(0xf8892bff),
        Color::fromRGBA(0xeb0d36ff),
        Color::fromRGBA(0xf14631ff),
        Color::fromRGBA(0xf77d2cff),
        Color::fromRGBA(0xf3572fff),
        Color::fromRGBA(0xea0a36ff),
        Color::fromRGBA(0xef3332ff),
        Color::fromRGBA(0xfa9e29ff),
        Color::fromRGBA(0xef3332ff),
        Color::fromRGBA(0xe90137ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xe90437ff),
        Color::fromRGBA(0xea0336ff),
        Color::fromRGBA(0xea0336ff),
        Color::fromRGBA(0xec0234ff),
        Color::fromRGBA(0xec0134ff),
        Color::fromRGBA(0xe90437ff),
        Color::fromRGBA(0xdf0c42ff),
        Color::fromRGBA(0xca1c58ff),
        Color::fromRGBA(0xab3578ff),
        Color::fromRGBA(0x82559cff),
        Color::fromRGBA(0x5876b8ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xe90337ff),
        Color::fromRGBA(0xe90337ff),
        Color::fromRGBA(0xf14a30ff),
        Color::fromRGBA(0xf9982aff),
        Color::fromRGBA(0xee2e33ff),
        Color::fromRGBA(0xf56b2dff),
        Color::fromRGBA(0xf88b2bff),
        Color::fromRGBA(0xf5702dff),
        Color::fromRGBA(0xec1735ff),
        Color::fromRGBA(0xf4622eff),
        Color::fromRGBA(0xfa9a29ff),
        Color::fromRGBA(0xed2034ff),
        Color::fromRGBA(0xe90237ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xe90437ff),
        Color::fromRGBA(0xea0336ff),
        Color::fromRGBA(0xea0336ff),
        Color::fromRGBA(0xec0234ff),
        Color::fromRGBA(0xec0134ff),
        Color::fromRGBA(0xe90437ff),
        Color::fromRGBA(0xde0c42ff),
        Color::fromRGBA(0xc81e58ff),
        Color::fromRGBA(0xa73878ff),
        Color::fromRGBA(0x83549bff),
        Color::fromRGBA(0x626ebbff),
        Color::fromRGBA(0x4c80d1ff),
        Color::fromRGBA(0x4188dcff),
        Color::fromRGBA(0x3e8bdfff),
        Color::fromRGBA(0x3f8adfff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xe90337ff),
        Color::fromRGBA(0xeb1135ff),
        Color::fromRGBA(0xf67b2cff),
        Color::fromRGBA(0xf88d2aff),
        Color::fromRGBA(0xed2134ff),
        Color::fromRGBA(0xf35a2fff),
        Color::fromRGBA(0xf4612eff),
        Color::fromRGBA(0xf25330ff),
        Color::fromRGBA(0xfcab28ff),
        Color::fromRGBA(0xf04131ff),
        Color::fromRGBA(0xe90337ff),
        Color::fromRGBA(0xe90337ff),
        Color::fromRGBA(0xea0336ff),
        Color::fromRGBA(0xea0336ff),
        Color::fromRGBA(0xec0234ff),
        Color::fromRGBA(0xec0134ff),
        Color::fromRGBA(0xe90437ff),
        Color::fromRGBA(0xde0c42ff),
        Color::fromRGBA(0xc81e58ff),
        Color::fromRGBA(0xa73878ff),
        Color::fromRGBA(0x83549bff),
        Color::fromRGBA(0x626ebbff),
        Color::fromRGBA(0x4c80d1ff),
        Color::fromRGBA(0x4188dcff),
        Color::fromRGBA(0x3e8bdfff),
        Color::fromRGBA(0x3e8adfff),
        Color::fromRGBA(0x4089ddff),
        Color::fromRGBA(0x4089ddff),
        Color::fromRGBA(0x4188dcff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xe90337ff),
        Color::fromRGBA(0xe90337ff),
        Color::fromRGBA(0xeb1335ff),
        Color::fromRGBA(0xf3592fff),
        Color::fromRGBA(0xf4672eff),
        Color::fromRGBA(0xf7852bff),
        Color::fromRGBA(0xf56e2dff),
        Color::fromRGBA(0xf4662eff),
        Color::fromRGBA(0xf03f31ff),
        Color::fromRGBA(0xeb0835ff),
        Color::fromRGBA(0xec0135ff),
        Color::fromRGBA(0xec0134ff),
        Color::fromRGBA(0xe90437ff),
        Color::fromRGBA(0xde0c42ff),
        Color::fromRGBA(0xc81e58ff),
        Color::fromRGBA(0xa73878ff),
        Color::fromRGBA(0x83549bff),
        Color::fromRGBA(0x626ebbff),
        Color::fromRGBA(0x4c80d1ff),
        Color::fromRGBA(0x4188dcff),
        Color::fromRGBA(0x3e8bdfff),
        Color::fromRGBA(0x3e8adfff),
        Color::fromRGBA(0x4089ddff),
        Color::fromRGBA(0x4089ddff),
        Color::fromRGBA(0x4188dcff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xea0337ff),
        Color::fromRGBA(0xe90237ff),
        Color::fromRGBA(0xe90137ff),
        Color::fromRGBA(0xec1635ff),
        Color::fromRGBA(0xf3522fff),
        Color::fromRGBA(0xf02b31ff),
        Color::fromRGBA(0xec0134ff),
        Color::fromRGBA(0xe90137ff),
        Color::fromRGBA(0xde0c42ff),
        Color::fromRGBA(0xc81e58ff),
        Color::fromRGBA(0xa73878ff),
        Color::fromRGBA(0x83549bff),
        Color::fromRGBA(0x626ebbff),
        Color::fromRGBA(0x4c80d1ff),
        Color::fromRGBA(0x4188dcff),
        Color::fromRGBA(0x3e8bdfff),
        Color::fromRGBA(0x3e8adfff),
        Color::fromRGBA(0x4089ddff),
        Color::fromRGBA(0x4089ddff),
        Color::fromRGBA(0x4188dcff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0xea0437ff),
        Color::fromRGBA(0xe90437ff),
        Color::fromRGBA(0xea0336ff),
        Color::fromRGBA(0xea0336ff),
        Color::fromRGBA(0xec0234ff),
        Color::fromRGBA(0xec0134ff),
        Color::fromRGBA(0xe90337ff),
        Color::fromRGBA(0xde0a42ff),
        Color::fromRGBA(0xc71d58ff),
        Color::fromRGBA(0xa73878ff),
        Color::fromRGBA(0x83549bff),
        Color::fromRGBA(0x626ebbff),
        Color::fromRGBA(0x4c80d1ff),
        Color::fromRGBA(0x4188dcff),
        Color::fromRGBA(0x3e8bdfff),
        Color::fromRGBA(0x3e8adfff),
        Color::fromRGBA(0x4089ddff),
        Color::fromRGBA(0x4089ddff),
        Color::fromRGBA(0x4188dcff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0xea0336ff),
        Color::fromRGBA(0xeb0235ff),
        Color::fromRGBA(0xe80538ff),
        Color::fromRGBA(0xdd0d43ff),
        Color::fromRGBA(0xc71f59ff),
        Color::fromRGBA(0xa63878ff),
        Color::fromRGBA(0x82559cff),
        Color::fromRGBA(0x626ebcff),
        Color::fromRGBA(0x4c80d1ff),
        Color::fromRGBA(0x4188dcff),
        Color::fromRGBA(0x3e8bdfff),
        Color::fromRGBA(0x3e8adfff),
        Color::fromRGBA(0x4089ddff),
        Color::fromRGBA(0x4089ddff),
        Color::fromRGBA(0x4188dcff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0xd81248ff),
        Color::fromRGBA(0xb62c69ff),
        Color::fromRGBA(0x8c4d93ff),
        Color::fromRGBA(0x676ab7ff),
        Color::fromRGBA(0x4d7ed0ff),
        Color::fromRGBA(0x4188dcff),
        Color::fromRGBA(0x3d8be0ff),
        Color::fromRGBA(0x3e8adfff),
        Color::fromRGBA(0x4089ddff),
        Color::fromRGBA(0x4089ddff),
        Color::fromRGBA(0x4188dcff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff),
        Color::fromRGBA(0x4189ddff)
    ],
];

$img = new Image(16, 8);
$img->append($pixels['16x8'], new Size(16, 8));
$img->append($pixels['32x16'], new Size(32, 16));

return $img;
