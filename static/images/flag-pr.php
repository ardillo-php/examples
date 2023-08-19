<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x11' => [
        Color::fromRGBA(0x4c47b2ff),
        Color::fromRGBA(0xc2183cff),
        Color::fromRGBA(0xfc0002ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x1b5be3ff),
        Color::fromRGBA(0x7f327fff),
        Color::fromRGBA(0xe30d1dff),
        Color::fromRGBA(0xff0a08ff),
        Color::fromRGBA(0xff0a09ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0165fcff),
        Color::fromRGBA(0x315ad6ff),
        Color::fromRGBA(0xa386bdff),
        Color::fromRGBA(0xf3b8beff),
        Color::fromRGBA(0xffc0beff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0669ffff),
        Color::fromRGBA(0x086bffff),
        Color::fromRGBA(0x076cffff),
        Color::fromRGBA(0x519affff),
        Color::fromRGBA(0xc6e0ffff),
        Color::fromRGBA(0xfcfeffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0e6effff),
        Color::fromRGBA(0x5599ffff),
        Color::fromRGBA(0x64a2ffff),
        Color::fromRGBA(0x1371ffff),
        Color::fromRGBA(0x0063ffff),
        Color::fromRGBA(0x1774ffff),
        Color::fromRGBA(0x7993e3ff),
        Color::fromRGBA(0xde798cff),
        Color::fromRGBA(0xfe6c6cff),
        Color::fromRGBA(0xff6b6bff),
        Color::fromRGBA(0xff6b6bff),
        Color::fromRGBA(0xff6b6bff),
        Color::fromRGBA(0xff6b6bff),
        Color::fromRGBA(0xff6b6bff),
        Color::fromRGBA(0xff6b6bff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x1f78ffff),
        Color::fromRGBA(0xc1daffff),
        Color::fromRGBA(0xd7e7ffff),
        Color::fromRGBA(0x3083ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0064ffff),
        Color::fromRGBA(0x025ef9ff),
        Color::fromRGBA(0x5c389aff),
        Color::fromRGBA(0xee040dff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x086affff),
        Color::fromRGBA(0x63a1ffff),
        Color::fromRGBA(0x6ca7ffff),
        Color::fromRGBA(0x1270ffff),
        Color::fromRGBA(0x0063ffff),
        Color::fromRGBA(0x1674ffff),
        Color::fromRGBA(0x7691e3ff),
        Color::fromRGBA(0xdd778bff),
        Color::fromRGBA(0xfe6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0167ffff),
        Color::fromRGBA(0x0467ffff),
        Color::fromRGBA(0x0167ffff),
        Color::fromRGBA(0x096fffff),
        Color::fromRGBA(0x4f99ffff),
        Color::fromRGBA(0xc4dfffff),
        Color::fromRGBA(0xfcfeffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0165fcff),
        Color::fromRGBA(0x2f5bd7ff),
        Color::fromRGBA(0xa186bfff),
        Color::fromRGBA(0xf3b9bfff),
        Color::fromRGBA(0xffc1bfff),
        Color::fromRGBA(0xffbfbfff),
        Color::fromRGBA(0xffbfbfff),
        Color::fromRGBA(0xffbfbfff),
        Color::fromRGBA(0xffbfbfff),
        Color::fromRGBA(0xffbfbfff),
        Color::fromRGBA(0xffbfbfff),
        Color::fromRGBA(0xffbfbfff),
        Color::fromRGBA(0xffbfbfff),
        Color::fromRGBA(0xffbfbfff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x195be4ff),
        Color::fromRGBA(0x7c3381ff),
        Color::fromRGBA(0xe20d1eff),
        Color::fromRGBA(0xff0b09ff),
        Color::fromRGBA(0xff0a09ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0x4a49b6ff),
        Color::fromRGBA(0xc01a3fff),
        Color::fromRGBA(0xfc0103ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff)
    ],
    '32x21' => [
        Color::fromRGBA(0x4c47b2ff),
        Color::fromRGBA(0xbe1940ff),
        Color::fromRGBA(0xfc0002ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x185ce6ff),
        Color::fromRGBA(0x74378aff),
        Color::fromRGBA(0xda0e24ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x2756d7ff),
        Color::fromRGBA(0x8f2c6fff),
        Color::fromRGBA(0xe90815ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0265fcff),
        Color::fromRGBA(0x3b4ec3ff),
        Color::fromRGBA(0xa92255ff),
        Color::fromRGBA(0xf4090fff),
        Color::fromRGBA(0xff0908ff),
        Color::fromRGBA(0xff0808ff),
        Color::fromRGBA(0xff0808ff),
        Color::fromRGBA(0xff0808ff),
        Color::fromRGBA(0xff0808ff),
        Color::fromRGBA(0xff0808ff),
        Color::fromRGBA(0xff0808ff),
        Color::fromRGBA(0xff0808ff),
        Color::fromRGBA(0xff0808ff),
        Color::fromRGBA(0xff0808ff),
        Color::fromRGBA(0xff0808ff),
        Color::fromRGBA(0xff0808ff),
        Color::fromRGBA(0xff0808ff),
        Color::fromRGBA(0xff0808ff),
        Color::fromRGBA(0xff0808ff),
        Color::fromRGBA(0xff0808ff),
        Color::fromRGBA(0xff0808ff),
        Color::fromRGBA(0xff0808ff),
        Color::fromRGBA(0xff0808ff),
        Color::fromRGBA(0xff0808ff),
        Color::fromRGBA(0xff0808ff),
        Color::fromRGBA(0xff0808ff),
        Color::fromRGBA(0xff0808ff),
        Color::fromRGBA(0xff0808ff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0067ffff),
        Color::fromRGBA(0x0961f5ff),
        Color::fromRGBA(0x525ec6ff),
        Color::fromRGBA(0xc196bbff),
        Color::fromRGBA(0xfbb9bbff),
        Color::fromRGBA(0xffbcbbff),
        Color::fromRGBA(0xffbbbbff),
        Color::fromRGBA(0xffbbbbff),
        Color::fromRGBA(0xffbbbbff),
        Color::fromRGBA(0xffbbbbff),
        Color::fromRGBA(0xffbbbbff),
        Color::fromRGBA(0xffbbbbff),
        Color::fromRGBA(0xffbbbbff),
        Color::fromRGBA(0xffbbbbff),
        Color::fromRGBA(0xffbbbbff),
        Color::fromRGBA(0xffbbbbff),
        Color::fromRGBA(0xffbbbbff),
        Color::fromRGBA(0xffbbbbff),
        Color::fromRGBA(0xffbbbbff),
        Color::fromRGBA(0xffbbbbff),
        Color::fromRGBA(0xffbbbbff),
        Color::fromRGBA(0xffbbbbff),
        Color::fromRGBA(0xffbbbbff),
        Color::fromRGBA(0xffbbbbff),
        Color::fromRGBA(0xffbbbbff),
        Color::fromRGBA(0xffbbbbff),
        Color::fromRGBA(0xffbbbbff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0067ffff),
        Color::fromRGBA(0x1375ffff),
        Color::fromRGBA(0x6dabffff),
        Color::fromRGBA(0xd6eaffff),
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
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0166ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0064ffff),
        Color::fromRGBA(0x227affff),
        Color::fromRGBA(0x88b7ffff),
        Color::fromRGBA(0xe6f0ffff),
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
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0064ffff),
        Color::fromRGBA(0x217affff),
        Color::fromRGBA(0x3d8affff),
        Color::fromRGBA(0x0064ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0064ffff),
        Color::fromRGBA(0x0166ffff),
        Color::fromRGBA(0x3585ffff),
        Color::fromRGBA(0xa3c7ffff),
        Color::fromRGBA(0xf2f7feff),
        Color::fromRGBA(0xfffffdff),
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
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0062ffff),
        Color::fromRGBA(0x63a1ffff),
        Color::fromRGBA(0x9fc5ffff),
        Color::fromRGBA(0x0166ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0064ffff),
        Color::fromRGBA(0x076affff),
        Color::fromRGBA(0x4c8df8ff),
        Color::fromRGBA(0xbb87afff),
        Color::fromRGBA(0xfa6e71ff),
        Color::fromRGBA(0xff6b6aff),
        Color::fromRGBA(0xff6c6cff),
        Color::fromRGBA(0xff6c6cff),
        Color::fromRGBA(0xff6c6cff),
        Color::fromRGBA(0xff6c6cff),
        Color::fromRGBA(0xff6c6cff),
        Color::fromRGBA(0xff6c6cff),
        Color::fromRGBA(0xff6c6cff),
        Color::fromRGBA(0xff6c6cff),
        Color::fromRGBA(0xff6c6cff),
        Color::fromRGBA(0xff6c6cff),
        Color::fromRGBA(0xff6c6cff),
        Color::fromRGBA(0xff6c6cff),
        Color::fromRGBA(0xff6c6cff),
        Color::fromRGBA(0xff6c6cff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0b6cffff),
        Color::fromRGBA(0x64a2ffff),
        Color::fromRGBA(0x92bdffff),
        Color::fromRGBA(0xcfe2ffff),
        Color::fromRGBA(0xeaf2ffff),
        Color::fromRGBA(0x99c1ffff),
        Color::fromRGBA(0x7cb0ffff),
        Color::fromRGBA(0x1f78ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0063feff),
        Color::fromRGBA(0x105be9ff),
        Color::fromRGBA(0x663894ff),
        Color::fromRGBA(0xcf0e2aff),
        Color::fromRGBA(0xfb0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0166ffff),
        Color::fromRGBA(0x2b7fffff),
        Color::fromRGBA(0xaeceffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xd5e6ffff),
        Color::fromRGBA(0x4b92ffff),
        Color::fromRGBA(0x0568ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0068ffff),
        Color::fromRGBA(0x3b4ec4ff),
        Color::fromRGBA(0xd71027ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0062ffff),
        Color::fromRGBA(0x60a0ffff),
        Color::fromRGBA(0xf4f8ffff),
        Color::fromRGBA(0xeff5ffff),
        Color::fromRGBA(0xa3c8ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0064feff),
        Color::fromRGBA(0x0f5cebff),
        Color::fromRGBA(0x623a98ff),
        Color::fromRGBA(0xcc0f2eff),
        Color::fromRGBA(0xfa0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0468ffff),
        Color::fromRGBA(0x82b4ffff),
        Color::fromRGBA(0x64a2ffff),
        Color::fromRGBA(0x428dffff),
        Color::fromRGBA(0x99c2ffff),
        Color::fromRGBA(0x1b76ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0064ffff),
        Color::fromRGBA(0x0669ffff),
        Color::fromRGBA(0x488bf8ff),
        Color::fromRGBA(0xb883aeff),
        Color::fromRGBA(0xf9696dff),
        Color::fromRGBA(0xff6665ff),
        Color::fromRGBA(0xff6767ff),
        Color::fromRGBA(0xff6767ff),
        Color::fromRGBA(0xff6767ff),
        Color::fromRGBA(0xff6767ff),
        Color::fromRGBA(0xff6767ff),
        Color::fromRGBA(0xff6767ff),
        Color::fromRGBA(0xff6767ff),
        Color::fromRGBA(0xff6767ff),
        Color::fromRGBA(0xff6767ff),
        Color::fromRGBA(0xff6767ff),
        Color::fromRGBA(0xff6767ff),
        Color::fromRGBA(0xff6767ff),
        Color::fromRGBA(0xff6767ff),
        Color::fromRGBA(0xff6767ff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0569ffff),
        Color::fromRGBA(0x1975ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0063ffff),
        Color::fromRGBA(0x1271ffff),
        Color::fromRGBA(0x0d6effff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0064ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x3283ffff),
        Color::fromRGBA(0x9fc5ffff),
        Color::fromRGBA(0xf0f5feff),
        Color::fromRGBA(0xfffefdff),
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
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0064ffff),
        Color::fromRGBA(0x0064ffff),
        Color::fromRGBA(0x2078ffff),
        Color::fromRGBA(0x84b5ffff),
        Color::fromRGBA(0xe4eeffff),
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
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0067ffff),
        Color::fromRGBA(0x1173ffff),
        Color::fromRGBA(0x68a8ffff),
        Color::fromRGBA(0xd3e8ffff),
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
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0067ffff),
        Color::fromRGBA(0x0862f6ff),
        Color::fromRGBA(0x4e5fc9ff),
        Color::fromRGBA(0xbd97beff),
        Color::fromRGBA(0xfabbbeff),
        Color::fromRGBA(0xffbfbeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0xffbebeff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0165fdff),
        Color::fromRGBA(0x3750c7ff),
        Color::fromRGBA(0xa52359ff),
        Color::fromRGBA(0xf30a11ff),
        Color::fromRGBA(0xff0b09ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0xff0909ff),
        Color::fromRGBA(0x0065ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x2457daff),
        Color::fromRGBA(0x8a2e74ff),
        Color::fromRGBA(0xe70917ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0x0066ffff),
        Color::fromRGBA(0x165de8ff),
        Color::fromRGBA(0x70398eff),
        Color::fromRGBA(0xd70f27ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0x474cbaff),
        Color::fromRGBA(0xba1e47ff),
        Color::fromRGBA(0xfb0405ff),
        Color::fromRGBA(0xff0100ff),
        Color::fromRGBA(0xff0202ff),
        Color::fromRGBA(0xff0202ff),
        Color::fromRGBA(0xff0202ff),
        Color::fromRGBA(0xff0202ff),
        Color::fromRGBA(0xff0202ff),
        Color::fromRGBA(0xff0202ff),
        Color::fromRGBA(0xff0202ff),
        Color::fromRGBA(0xff0202ff),
        Color::fromRGBA(0xff0202ff),
        Color::fromRGBA(0xff0202ff),
        Color::fromRGBA(0xff0202ff),
        Color::fromRGBA(0xff0202ff),
        Color::fromRGBA(0xff0202ff),
        Color::fromRGBA(0xff0202ff),
        Color::fromRGBA(0xff0202ff),
        Color::fromRGBA(0xff0202ff),
        Color::fromRGBA(0xff0202ff),
        Color::fromRGBA(0xff0202ff),
        Color::fromRGBA(0xff0202ff),
        Color::fromRGBA(0xff0202ff),
        Color::fromRGBA(0xff0202ff),
        Color::fromRGBA(0xff0202ff),
        Color::fromRGBA(0xff0202ff),
        Color::fromRGBA(0xff0202ff),
        Color::fromRGBA(0xff0202ff),
        Color::fromRGBA(0xff0202ff),
        Color::fromRGBA(0xff0202ff),
        Color::fromRGBA(0xff0202ff)
    ],
];

$img = new Image(16, 11);
$img->append($pixels['16x11'], new Size(16, 11));
$img->append($pixels['32x21'], new Size(32, 21));

return $img;
