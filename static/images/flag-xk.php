<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x11' => [
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2248a4ff),
        Color::fromRGBA(0x2248a4ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2249a4ff),
        Color::fromRGBA(0x2c50a8ff),
        Color::fromRGBA(0x3054aaff),
        Color::fromRGBA(0x3a5caeff),
        Color::fromRGBA(0x3a5caeff),
        Color::fromRGBA(0x3154aaff),
        Color::fromRGBA(0x2c50a8ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2249a4ff),
        Color::fromRGBA(0x395badff),
        Color::fromRGBA(0x4b6ab5ff),
        Color::fromRGBA(0x6782c0ff),
        Color::fromRGBA(0x506eb7ff),
        Color::fromRGBA(0x5876bbff),
        Color::fromRGBA(0x5875bbff),
        Color::fromRGBA(0x4f6eb7ff),
        Color::fromRGBA(0x6782c0ff),
        Color::fromRGBA(0x4a69b4ff),
        Color::fromRGBA(0x395badff),
        Color::fromRGBA(0x2249a4ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2249a4ff),
        Color::fromRGBA(0x3b5daeff),
        Color::fromRGBA(0x4b6ab5ff),
        Color::fromRGBA(0x2c51a8ff),
        Color::fromRGBA(0x264ca6ff),
        Color::fromRGBA(0x5a678aff),
        Color::fromRGBA(0x4a5e92ff),
        Color::fromRGBA(0x274ca5ff),
        Color::fromRGBA(0x2c50a8ff),
        Color::fromRGBA(0x4a6ab4ff),
        Color::fromRGBA(0x3c5daeff),
        Color::fromRGBA(0x2249a4ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2248a4ff),
        Color::fromRGBA(0x2148a5ff),
        Color::fromRGBA(0x3a5599ff),
        Color::fromRGBA(0xad9361ff),
        Color::fromRGBA(0xbf9d58ff),
        Color::fromRGBA(0x5f6987ff),
        Color::fromRGBA(0x2248a5ff),
        Color::fromRGBA(0x2148a4ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x294da2ff),
        Color::fromRGBA(0x6d7180ff),
        Color::fromRGBA(0xab9261ff),
        Color::fromRGBA(0xcfa550ff),
        Color::fromRGBA(0xd2a74eff),
        Color::fromRGBA(0xbc9b59ff),
        Color::fromRGBA(0x656c84ff),
        Color::fromRGBA(0x2e4f9fff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x244aa4ff),
        Color::fromRGBA(0x7b7879ff),
        Color::fromRGBA(0xd3a74eff),
        Color::fromRGBA(0xd0a64fff),
        Color::fromRGBA(0xd0a64fff),
        Color::fromRGBA(0xd2a74eff),
        Color::fromRGBA(0xb8995bff),
        Color::fromRGBA(0x3d5798ff),
        Color::fromRGBA(0x2249a5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa4ff),
        Color::fromRGBA(0x2249a5ff),
        Color::fromRGBA(0x33529dff),
        Color::fromRGBA(0x8e8270ff),
        Color::fromRGBA(0xcea550ff),
        Color::fromRGBA(0xcaa352ff),
        Color::fromRGBA(0xc19e57ff),
        Color::fromRGBA(0x70737eff),
        Color::fromRGBA(0x244aa4ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa4ff),
        Color::fromRGBA(0x2248a5ff),
        Color::fromRGBA(0x38559aff),
        Color::fromRGBA(0x9d8b68ff),
        Color::fromRGBA(0x5c6889ff),
        Color::fromRGBA(0x4b5f91ff),
        Color::fromRGBA(0x284ca2ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x244aa4ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x2a4da1ff),
        Color::fromRGBA(0x485d93ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x2248a5ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa4ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x2249a5ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x244aa4ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff)
    ],
    '32x23' => [
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2248a4ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2248a4ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x264ca6ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2d51a8ff),
        Color::fromRGBA(0x4968b4ff),
        Color::fromRGBA(0x294ea7ff),
        Color::fromRGBA(0x284ea7ff),
        Color::fromRGBA(0x4968b4ff),
        Color::fromRGBA(0x2e52a9ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x264ca5ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x5472b8ff),
        Color::fromRGBA(0x8197cbff),
        Color::fromRGBA(0x3357abff),
        Color::fromRGBA(0x6782c0ff),
        Color::fromRGBA(0xccd5eaff),
        Color::fromRGBA(0x516fb7ff),
        Color::fromRGBA(0x4e6cb6ff),
        Color::fromRGBA(0xcbd4e9ff),
        Color::fromRGBA(0x6b85c2ff),
        Color::fromRGBA(0x3256abff),
        Color::fromRGBA(0x8096caff),
        Color::fromRGBA(0x5674b9ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x4a69b4ff),
        Color::fromRGBA(0x728ac5ff),
        Color::fromRGBA(0x2f53a9ff),
        Color::fromRGBA(0x768ec6ff),
        Color::fromRGBA(0xbfcae4ff),
        Color::fromRGBA(0x3b5daeff),
        Color::fromRGBA(0x4363b1ff),
        Color::fromRGBA(0x778fc7ff),
        Color::fromRGBA(0x3759adff),
        Color::fromRGBA(0x3558acff),
        Color::fromRGBA(0x778ec7ff),
        Color::fromRGBA(0x4565b2ff),
        Color::fromRGBA(0x385badff),
        Color::fromRGBA(0xbdc8e4ff),
        Color::fromRGBA(0x7a91c8ff),
        Color::fromRGBA(0x2f53a9ff),
        Color::fromRGBA(0x7189c4ff),
        Color::fromRGBA(0x4c6bb5ff),
        Color::fromRGBA(0x254aa5ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x7b92c8ff),
        Color::fromRGBA(0xc6d0e7ff),
        Color::fromRGBA(0x3f60b0ff),
        Color::fromRGBA(0x3154aaff),
        Color::fromRGBA(0x3b5daeff),
        Color::fromRGBA(0x294ea7ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2047a4ff),
        Color::fromRGBA(0x294ca2ff),
        Color::fromRGBA(0x264ba4ff),
        Color::fromRGBA(0x2248a4ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x284da6ff),
        Color::fromRGBA(0x3b5daeff),
        Color::fromRGBA(0x3155aaff),
        Color::fromRGBA(0x3d5eafff),
        Color::fromRGBA(0xc4cee7ff),
        Color::fromRGBA(0x7f95caff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x385aadff),
        Color::fromRGBA(0x4666b3ff),
        Color::fromRGBA(0x2a4fa7ff),
        Color::fromRGBA(0x2248a4ff),
        Color::fromRGBA(0x2248a4ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2249a5ff),
        Color::fromRGBA(0x4e608fff),
        Color::fromRGBA(0x9a896aff),
        Color::fromRGBA(0x54638dff),
        Color::fromRGBA(0x2148a5ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2248a4ff),
        Color::fromRGBA(0x2248a4ff),
        Color::fromRGBA(0x2a4fa7ff),
        Color::fromRGBA(0x4566b2ff),
        Color::fromRGBA(0x395badff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2249a4ff),
        Color::fromRGBA(0x2248a4ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa4ff),
        Color::fromRGBA(0x2048a6ff),
        Color::fromRGBA(0x616b86ff),
        Color::fromRGBA(0xcfa550ff),
        Color::fromRGBA(0xb1955eff),
        Color::fromRGBA(0x867e74ff),
        Color::fromRGBA(0x3a559aff),
        Color::fromRGBA(0x2249a5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2349a4ff),
        Color::fromRGBA(0x2248a4ff),
        Color::fromRGBA(0x2249a4ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x2148a6ff),
        Color::fromRGBA(0x3b5699ff),
        Color::fromRGBA(0x9b896aff),
        Color::fromRGBA(0xcfa550ff),
        Color::fromRGBA(0xd1a74fff),
        Color::fromRGBA(0xd2a74eff),
        Color::fromRGBA(0x8c8171ff),
        Color::fromRGBA(0x274ca3ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x244aa4ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa4ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x2249a5ff),
        Color::fromRGBA(0x264ba3ff),
        Color::fromRGBA(0x3c5699ff),
        Color::fromRGBA(0x7d7978ff),
        Color::fromRGBA(0xd0a64fff),
        Color::fromRGBA(0xd0a64fff),
        Color::fromRGBA(0xcfa550ff),
        Color::fromRGBA(0xd0a64fff),
        Color::fromRGBA(0xc7a154ff),
        Color::fromRGBA(0x7f7b77ff),
        Color::fromRGBA(0x2e4f9fff),
        Color::fromRGBA(0x2249a5ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x244aa4ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x2a4da1ff),
        Color::fromRGBA(0x6f727fff),
        Color::fromRGBA(0x887f73ff),
        Color::fromRGBA(0xbc9b59ff),
        Color::fromRGBA(0xcba352ff),
        Color::fromRGBA(0xcfa550ff),
        Color::fromRGBA(0xd0a64fff),
        Color::fromRGBA(0xd0a650ff),
        Color::fromRGBA(0xcfa550ff),
        Color::fromRGBA(0xd1a64fff),
        Color::fromRGBA(0xc49f55ff),
        Color::fromRGBA(0x606a86ff),
        Color::fromRGBA(0x33529dff),
        Color::fromRGBA(0x264ba3ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x274ca3ff),
        Color::fromRGBA(0x7e7a78ff),
        Color::fromRGBA(0xd1a64fff),
        Color::fromRGBA(0xd1a64fff),
        Color::fromRGBA(0xd0a64fff),
        Color::fromRGBA(0xcfa650ff),
        Color::fromRGBA(0xd0a650ff),
        Color::fromRGBA(0xd0a650ff),
        Color::fromRGBA(0xd0a650ff),
        Color::fromRGBA(0xd0a64fff),
        Color::fromRGBA(0xcfa550ff),
        Color::fromRGBA(0xcaa252ff),
        Color::fromRGBA(0xb0955fff),
        Color::fromRGBA(0x606a86ff),
        Color::fromRGBA(0x2249a5ff),
        Color::fromRGBA(0x234aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa4ff),
        Color::fromRGBA(0x2148a6ff),
        Color::fromRGBA(0x485d93ff),
        Color::fromRGBA(0xbc9b59ff),
        Color::fromRGBA(0xd1a64fff),
        Color::fromRGBA(0xcfa550ff),
        Color::fromRGBA(0xd0a650ff),
        Color::fromRGBA(0xd0a650ff),
        Color::fromRGBA(0xd0a650ff),
        Color::fromRGBA(0xd0a650ff),
        Color::fromRGBA(0xd0a650ff),
        Color::fromRGBA(0xd0a64fff),
        Color::fromRGBA(0xd1a64fff),
        Color::fromRGBA(0xc6a154ff),
        Color::fromRGBA(0x50618fff),
        Color::fromRGBA(0x2148a6ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x2249a5ff),
        Color::fromRGBA(0x72747eff),
        Color::fromRGBA(0xd2a74eff),
        Color::fromRGBA(0xd0a64fff),
        Color::fromRGBA(0xcfa550ff),
        Color::fromRGBA(0xd0a650ff),
        Color::fromRGBA(0xd0a650ff),
        Color::fromRGBA(0xd0a650ff),
        Color::fromRGBA(0xcfa650ff),
        Color::fromRGBA(0xd0a64fff),
        Color::fromRGBA(0xd0a64fff),
        Color::fromRGBA(0x8d8270ff),
        Color::fromRGBA(0x264ba3ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa4ff),
        Color::fromRGBA(0x2249a5ff),
        Color::fromRGBA(0x3c5798ff),
        Color::fromRGBA(0x91846fff),
        Color::fromRGBA(0xc49f55ff),
        Color::fromRGBA(0xd0a64fff),
        Color::fromRGBA(0xcfa550ff),
        Color::fromRGBA(0xd0a64fff),
        Color::fromRGBA(0xd1a64fff),
        Color::fromRGBA(0xd0a64fff),
        Color::fromRGBA(0xd1a64fff),
        Color::fromRGBA(0xb5985cff),
        Color::fromRGBA(0x485d93ff),
        Color::fromRGBA(0x2249a5ff),
        Color::fromRGBA(0x244aa4ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa4ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x254aa4ff),
        Color::fromRGBA(0x696e82ff),
        Color::fromRGBA(0xcca451ff),
        Color::fromRGBA(0xd1a64fff),
        Color::fromRGBA(0xd0a64fff),
        Color::fromRGBA(0xb7985cff),
        Color::fromRGBA(0xc39f56ff),
        Color::fromRGBA(0x9c8a69ff),
        Color::fromRGBA(0x4f618fff),
        Color::fromRGBA(0x31519eff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa4ff),
        Color::fromRGBA(0x2249a5ff),
        Color::fromRGBA(0x39559aff),
        Color::fromRGBA(0xbb9a5aff),
        Color::fromRGBA(0xb9995bff),
        Color::fromRGBA(0x75757cff),
        Color::fromRGBA(0x39559aff),
        Color::fromRGBA(0x616a86ff),
        Color::fromRGBA(0x4d6090ff),
        Color::fromRGBA(0x1f47a7ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x244aa4ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x284ca2ff),
        Color::fromRGBA(0x9f8b68ff),
        Color::fromRGBA(0x817b76ff),
        Color::fromRGBA(0x2148a6ff),
        Color::fromRGBA(0x2249a5ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x244aa4ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x294ca2ff),
        Color::fromRGBA(0x7b7879ff),
        Color::fromRGBA(0x58668aff),
        Color::fromRGBA(0x2249a5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x244aa4ff),
        Color::fromRGBA(0x254aa4ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x2349a5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff),
        Color::fromRGBA(0x244aa5ff)
    ],
];

$img = new Image(16, 11);
$img->append($pixels['16x11'], new Size(16, 11));
$img->append($pixels['32x23'], new Size(32, 23));

return $img;
