<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x10' => [
        Color::fromRGBA(0x4997d0fc),
        Color::fromRGBA(0x4997d0fc),
        Color::fromRGBA(0x4997d0fc),
        Color::fromRGBA(0x4896d0fc),
        Color::fromRGBA(0x4a97d0fc),
        Color::fromRGBA(0xbcd9eefe),
        Color::fromRGBA(0xfbfdfeff),
        Color::fromRGBA(0xfbfcfeff),
        Color::fromRGBA(0xfbfcfeff),
        Color::fromRGBA(0xfbfdfeff),
        Color::fromRGBA(0xbcd9eefe),
        Color::fromRGBA(0x4a97d0fc),
        Color::fromRGBA(0x4896d0fc),
        Color::fromRGBA(0x4997d0fc),
        Color::fromRGBA(0x4997d0fc),
        Color::fromRGBA(0x4997d0fc),
        Color::fromRGBA(0x4997cfff),
        Color::fromRGBA(0x4997cfff),
        Color::fromRGBA(0x4997cfff),
        Color::fromRGBA(0x4896cfff),
        Color::fromRGBA(0x4a97d0ff),
        Color::fromRGBA(0xbedaeeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xbedaeeff),
        Color::fromRGBA(0x4a97d0ff),
        Color::fromRGBA(0x4896cfff),
        Color::fromRGBA(0x4997cfff),
        Color::fromRGBA(0x4997cfff),
        Color::fromRGBA(0x4997cfff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4896cfff),
        Color::fromRGBA(0x4a97d0ff),
        Color::fromRGBA(0xbedaeeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xbedaeeff),
        Color::fromRGBA(0x4a97d0ff),
        Color::fromRGBA(0x4896cfff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4896cfff),
        Color::fromRGBA(0x4a97d0ff),
        Color::fromRGBA(0xbedaeeff),
        Color::fromRGBA(0xf1f4eeff),
        Color::fromRGBA(0xedefe3ff),
        Color::fromRGBA(0xeaeee4ff),
        Color::fromRGBA(0xf3f6f1ff),
        Color::fromRGBA(0xbedaeeff),
        Color::fromRGBA(0x4a97d0ff),
        Color::fromRGBA(0x4896cfff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4896cfff),
        Color::fromRGBA(0x4a97d0ff),
        Color::fromRGBA(0xbdd9ecff),
        Color::fromRGBA(0xd3ddc9ff),
        Color::fromRGBA(0xe8e4bbff),
        Color::fromRGBA(0xd5d8abff),
        Color::fromRGBA(0xd1dbc6ff),
        Color::fromRGBA(0xbdd9edff),
        Color::fromRGBA(0x4a97d0ff),
        Color::fromRGBA(0x4896cfff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4896cfff),
        Color::fromRGBA(0x4a97d0ff),
        Color::fromRGBA(0xbedaeeff),
        Color::fromRGBA(0xd4d8c7ff),
        Color::fromRGBA(0xd2d0b6ff),
        Color::fromRGBA(0xc0c4a1ff),
        Color::fromRGBA(0xced5c1ff),
        Color::fromRGBA(0xbedaeeff),
        Color::fromRGBA(0x4a97d0ff),
        Color::fromRGBA(0x4896cfff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4896cfff),
        Color::fromRGBA(0x4a97d0ff),
        Color::fromRGBA(0xbfdaefff),
        Color::fromRGBA(0xf3f3eeff),
        Color::fromRGBA(0xdde2d5ff),
        Color::fromRGBA(0xdadfcfff),
        Color::fromRGBA(0xf3f3edff),
        Color::fromRGBA(0xbfdaefff),
        Color::fromRGBA(0x4a97d0ff),
        Color::fromRGBA(0x4896cfff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4896cfff),
        Color::fromRGBA(0x4a97d0ff),
        Color::fromRGBA(0xbedaeeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xbedaeeff),
        Color::fromRGBA(0x4a97d0ff),
        Color::fromRGBA(0x4896cfff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997cfff),
        Color::fromRGBA(0x4997cfff),
        Color::fromRGBA(0x4997cfff),
        Color::fromRGBA(0x4896cfff),
        Color::fromRGBA(0x4a97d0ff),
        Color::fromRGBA(0xbedaeeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xbedaeeff),
        Color::fromRGBA(0x4a97d0ff),
        Color::fromRGBA(0x4896cfff),
        Color::fromRGBA(0x4997cfff),
        Color::fromRGBA(0x4997cfff),
        Color::fromRGBA(0x4997cfff),
        Color::fromRGBA(0x4997d0fc),
        Color::fromRGBA(0x4997d0fc),
        Color::fromRGBA(0x4997d0fc),
        Color::fromRGBA(0x4896d0fc),
        Color::fromRGBA(0x4a97d0fc),
        Color::fromRGBA(0xbcd9eefe),
        Color::fromRGBA(0xfbfdfeff),
        Color::fromRGBA(0xfbfcfeff),
        Color::fromRGBA(0xfbfcfeff),
        Color::fromRGBA(0xfbfdfeff),
        Color::fromRGBA(0xbcd9eefe),
        Color::fromRGBA(0x4a97d0fc),
        Color::fromRGBA(0x4896d0fc),
        Color::fromRGBA(0x4997d0fc),
        Color::fromRGBA(0x4997d0fc),
        Color::fromRGBA(0x4997d0fc)
    ],
    '32x20' => [
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdfefdff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfafbf9ff),
        Color::fromRGBA(0xfbfcfbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0xfefeffff),
        Color::fromRGBA(0xf9faf7ff),
        Color::fromRGBA(0xcbd6c1ff),
        Color::fromRGBA(0xeef0e8ff),
        Color::fromRGBA(0xdde0cbff),
        Color::fromRGBA(0xc0cfb0ff),
        Color::fromRGBA(0xf1f4efff),
        Color::fromRGBA(0xd0dac7ff),
        Color::fromRGBA(0xf9faf8ff),
        Color::fromRGBA(0xfdfeffff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xe6ece2ff),
        Color::fromRGBA(0xafc0a1ff),
        Color::fromRGBA(0xf1f0dcff),
        Color::fromRGBA(0xeee3a2ff),
        Color::fromRGBA(0xd4d39bff),
        Color::fromRGBA(0xd8e1d1ff),
        Color::fromRGBA(0xb1c1a1ff),
        Color::fromRGBA(0xe0e6daff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xd3dcc9ff),
        Color::fromRGBA(0xb8c7abff),
        Color::fromRGBA(0xfcfbf4ff),
        Color::fromRGBA(0xf1e5a4ff),
        Color::fromRGBA(0xeddf97ff),
        Color::fromRGBA(0xd1dcbdff),
        Color::fromRGBA(0xb4c5a7ff),
        Color::fromRGBA(0xd3dccbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xdae1d2ff),
        Color::fromRGBA(0xb0c0a1ff),
        Color::fromRGBA(0xeae8dfff),
        Color::fromRGBA(0xe7ddb5ff),
        Color::fromRGBA(0xdcd3a6ff),
        Color::fromRGBA(0xbac7a5ff),
        Color::fromRGBA(0xadbf9eff),
        Color::fromRGBA(0xd9e0d1ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0xfefeffff),
        Color::fromRGBA(0xf8faf7ff),
        Color::fromRGBA(0xadae95ff),
        Color::fromRGBA(0xadaa8dff),
        Color::fromRGBA(0xe5e7e1ff),
        Color::fromRGBA(0xd3dbcdff),
        Color::fromRGBA(0x999b77ff),
        Color::fromRGBA(0xadb397ff),
        Color::fromRGBA(0xf5f7f3ff),
        Color::fromRGBA(0xfefeffff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xdddbd2ff),
        Color::fromRGBA(0xa5af85ff),
        Color::fromRGBA(0xd5dccaff),
        Color::fromRGBA(0xc4d0b5ff),
        Color::fromRGBA(0xa3aa7eff),
        Color::fromRGBA(0xdddbd2ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xf7f9f6ff),
        Color::fromRGBA(0xfbfcfbff),
        Color::fromRGBA(0xf8f9f7ff),
        Color::fromRGBA(0xf6f8f5ff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0fd),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0x88bbe0ff),
        Color::fromRGBA(0x4595cfff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0ff),
        Color::fromRGBA(0x4997d0fd)
    ],
];

$img = new Image(16, 10);
$img->append($pixels['16x10'], new Size(16, 10));
$img->append($pixels['32x20'], new Size(32, 20));

return $img;
