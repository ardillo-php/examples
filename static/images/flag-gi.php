<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x8' => [
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdfcfcff),
        Color::fromRGBA(0xf8f5f6ff),
        Color::fromRGBA(0xeaced0ff),
        Color::fromRGBA(0xeaced0ff),
        Color::fromRGBA(0xf8f5f5ff),
        Color::fromRGBA(0xfdfcfcff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfffefeff),
        Color::fromRGBA(0xfdffffff),
        Color::fromRGBA(0xd27479ff),
        Color::fromRGBA(0xac3e44ff),
        Color::fromRGBA(0xad3e44ff),
        Color::fromRGBA(0xd37479ff),
        Color::fromRGBA(0xfdffffff),
        Color::fromRGBA(0xfffefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf6e9eaff),
        Color::fromRGBA(0x9c4043ff),
        Color::fromRGBA(0x992e32ff),
        Color::fromRGBA(0x992e33ff),
        Color::fromRGBA(0x9c4043ff),
        Color::fromRGBA(0xf6eaeaff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfdf9faff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf3dcddff),
        Color::fromRGBA(0xc10b12ff),
        Color::fromRGBA(0xb50007ff),
        Color::fromRGBA(0xb50007ff),
        Color::fromRGBA(0xc10b12ff),
        Color::fromRGBA(0xf3dcddff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdf9faff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf7e2e3ff),
        Color::fromRGBA(0x860f16ff),
        Color::fromRGBA(0x5e0606ff),
        Color::fromRGBA(0x5d0606ff),
        Color::fromRGBA(0x860f16ff),
        Color::fromRGBA(0xf7e2e3ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xe75c64ff),
        Color::fromRGBA(0xe75c64ff),
        Color::fromRGBA(0xe75c64ff),
        Color::fromRGBA(0xe75b63ff),
        Color::fromRGBA(0xe85f67ff),
        Color::fromRGBA(0xdf4c53ff),
        Color::fromRGBA(0xd21b2aff),
        Color::fromRGBA(0xb92f1aff),
        Color::fromRGBA(0xb82f1aff),
        Color::fromRGBA(0xd21b2aff),
        Color::fromRGBA(0xdf4c53ff),
        Color::fromRGBA(0xe85f67ff),
        Color::fromRGBA(0xe75b63ff),
        Color::fromRGBA(0xe75c64ff),
        Color::fromRGBA(0xe75c64ff),
        Color::fromRGBA(0xe75c64ff),
        Color::fromRGBA(0xd70000ff),
        Color::fromRGBA(0xd70000ff),
        Color::fromRGBA(0xd70000ff),
        Color::fromRGBA(0xd70000ff),
        Color::fromRGBA(0xd70000ff),
        Color::fromRGBA(0xd80101ff),
        Color::fromRGBA(0xde0008ff),
        Color::fromRGBA(0xd01e0aff),
        Color::fromRGBA(0xd2190aff),
        Color::fromRGBA(0xde0008ff),
        Color::fromRGBA(0xd80001ff),
        Color::fromRGBA(0xd70000ff),
        Color::fromRGBA(0xd70000ff),
        Color::fromRGBA(0xd70000ff),
        Color::fromRGBA(0xd70000ff),
        Color::fromRGBA(0xd70000ff),
        Color::fromRGBA(0xda030fff),
        Color::fromRGBA(0xda030fff),
        Color::fromRGBA(0xda030fff),
        Color::fromRGBA(0xda030fff),
        Color::fromRGBA(0xda040fff),
        Color::fromRGBA(0xd9040fff),
        Color::fromRGBA(0xdb000cff),
        Color::fromRGBA(0xc4310bff),
        Color::fromRGBA(0xd0170cff),
        Color::fromRGBA(0xdb000cff),
        Color::fromRGBA(0xd9040fff),
        Color::fromRGBA(0xda040fff),
        Color::fromRGBA(0xda030fff),
        Color::fromRGBA(0xda030fff),
        Color::fromRGBA(0xda030fff),
        Color::fromRGBA(0xda030fff)
    ],
    '32x16' => [
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
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
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
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xfaf6f6ff),
        Color::fromRGBA(0xfeffffff),
        Color::fromRGBA(0xe0c1c3ff),
        Color::fromRGBA(0xd4989bff),
        Color::fromRGBA(0xd4989bff),
        Color::fromRGBA(0xe0c1c3ff),
        Color::fromRGBA(0xfeffffff),
        Color::fromRGBA(0xfaf6f6ff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
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
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfffefeff),
        Color::fromRGBA(0xfeffffff),
        Color::fromRGBA(0xbf666bff),
        Color::fromRGBA(0xaf2d35ff),
        Color::fromRGBA(0xbf7578ff),
        Color::fromRGBA(0xa10404ff),
        Color::fromRGBA(0xa10404ff),
        Color::fromRGBA(0xbf7578ff),
        Color::fromRGBA(0xaf2d35ff),
        Color::fromRGBA(0xbf666bff),
        Color::fromRGBA(0xfeffffff),
        Color::fromRGBA(0xfffefeff),
        Color::fromRGBA(0xfefefeff),
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
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xda7d7eff),
        Color::fromRGBA(0xca0000ff),
        Color::fromRGBA(0xe4afb1ff),
        Color::fromRGBA(0x9b0c14ff),
        Color::fromRGBA(0x9b0c14ff),
        Color::fromRGBA(0xe3afb0ff),
        Color::fromRGBA(0xca0000ff),
        Color::fromRGBA(0xda7d7eff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefefeff),
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
        Color::fromRGBA(0xfdfafaff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xc18285ff),
        Color::fromRGBA(0x4e0000ff),
        Color::fromRGBA(0xf6b2b6ff),
        Color::fromRGBA(0x59090dff),
        Color::fromRGBA(0x59090dff),
        Color::fromRGBA(0xf6b2b6ff),
        Color::fromRGBA(0x4e0000ff),
        Color::fromRGBA(0xc18286ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdfafaff),
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
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xd5a2a5ff),
        Color::fromRGBA(0x97232aff),
        Color::fromRGBA(0x4e0005ff),
        Color::fromRGBA(0xd04b52ff),
        Color::fromRGBA(0x790209ff),
        Color::fromRGBA(0x790209ff),
        Color::fromRGBA(0xd04b52ff),
        Color::fromRGBA(0x4e0005ff),
        Color::fromRGBA(0x98232aff),
        Color::fromRGBA(0xd5a2a5ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xfefefeff),
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
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xe5cacaff),
        Color::fromRGBA(0xc20007ff),
        Color::fromRGBA(0xce010dff),
        Color::fromRGBA(0xb00003ff),
        Color::fromRGBA(0xd0010cff),
        Color::fromRGBA(0xcf010cff),
        Color::fromRGBA(0xb00003ff),
        Color::fromRGBA(0xce010dff),
        Color::fromRGBA(0xc20007ff),
        Color::fromRGBA(0xe5cacbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefcfcff),
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
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf0dcddff),
        Color::fromRGBA(0xd9040fff),
        Color::fromRGBA(0xd9000aff),
        Color::fromRGBA(0xd7020eff),
        Color::fromRGBA(0xa80009ff),
        Color::fromRGBA(0xa90009ff),
        Color::fromRGBA(0xd8020eff),
        Color::fromRGBA(0xd9000aff),
        Color::fromRGBA(0xd90410ff),
        Color::fromRGBA(0xf0dcddff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfdf9faff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfcdbddff),
        Color::fromRGBA(0x98040cff),
        Color::fromRGBA(0x1a0000ff),
        Color::fromRGBA(0xc5010cff),
        Color::fromRGBA(0x180001ff),
        Color::fromRGBA(0x190001ff),
        Color::fromRGBA(0xc5010cff),
        Color::fromRGBA(0x1a0000ff),
        Color::fromRGBA(0x98040cff),
        Color::fromRGBA(0xfcdbddff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdf9faff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xe8bcbeff),
        Color::fromRGBA(0x890002ff),
        Color::fromRGBA(0x360001ff),
        Color::fromRGBA(0xa90106ff),
        Color::fromRGBA(0x3b1201ff),
        Color::fromRGBA(0x361101ff),
        Color::fromRGBA(0xa90106ff),
        Color::fromRGBA(0x360001ff),
        Color::fromRGBA(0x890002ff),
        Color::fromRGBA(0xe8bcbeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf4b5b9ff),
        Color::fromRGBA(0xf4b5b9ff),
        Color::fromRGBA(0xf4b5b9ff),
        Color::fromRGBA(0xf4b5b9ff),
        Color::fromRGBA(0xf4b5b9ff),
        Color::fromRGBA(0xf4b5b9ff),
        Color::fromRGBA(0xf4b5b9ff),
        Color::fromRGBA(0xf4b5b9ff),
        Color::fromRGBA(0xf4b5b9ff),
        Color::fromRGBA(0xf3b4b7ff),
        Color::fromRGBA(0xf6bbbfff),
        Color::fromRGBA(0xd67278ff),
        Color::fromRGBA(0xd55058ff),
        Color::fromRGBA(0xd4454cff),
        Color::fromRGBA(0xc71c2cff),
        Color::fromRGBA(0xac3a22ff),
        Color::fromRGBA(0xa83d21ff),
        Color::fromRGBA(0xc71c2cff),
        Color::fromRGBA(0xd4454cff),
        Color::fromRGBA(0xd55058ff),
        Color::fromRGBA(0xd67278ff),
        Color::fromRGBA(0xf6bcbfff),
        Color::fromRGBA(0xf3b4b7ff),
        Color::fromRGBA(0xf4b5b9ff),
        Color::fromRGBA(0xf4b5b9ff),
        Color::fromRGBA(0xf4b5b9ff),
        Color::fromRGBA(0xf4b5b9ff),
        Color::fromRGBA(0xf4b5b9ff),
        Color::fromRGBA(0xf4b5b9ff),
        Color::fromRGBA(0xf4b5b9ff),
        Color::fromRGBA(0xf4b5b9ff),
        Color::fromRGBA(0xf4b5b9ff),
        Color::fromRGBA(0xd80000ff),
        Color::fromRGBA(0xd80000ff),
        Color::fromRGBA(0xd80000ff),
        Color::fromRGBA(0xd80000ff),
        Color::fromRGBA(0xd80000ff),
        Color::fromRGBA(0xd80000ff),
        Color::fromRGBA(0xd80000ff),
        Color::fromRGBA(0xd80000ff),
        Color::fromRGBA(0xd80000ff),
        Color::fromRGBA(0xd80000ff),
        Color::fromRGBA(0xd70000ff),
        Color::fromRGBA(0xdd030bff),
        Color::fromRGBA(0xdd0511ff),
        Color::fromRGBA(0xdb0310ff),
        Color::fromRGBA(0xdb0b11ff),
        Color::fromRGBA(0xb1460dff),
        Color::fromRGBA(0xb4450dff),
        Color::fromRGBA(0xdc0811ff),
        Color::fromRGBA(0xdb0310ff),
        Color::fromRGBA(0xdd0511ff),
        Color::fromRGBA(0xdd030bff),
        Color::fromRGBA(0xd70000ff),
        Color::fromRGBA(0xd80000ff),
        Color::fromRGBA(0xd80000ff),
        Color::fromRGBA(0xd80000ff),
        Color::fromRGBA(0xd80000ff),
        Color::fromRGBA(0xd80000ff),
        Color::fromRGBA(0xd80000ff),
        Color::fromRGBA(0xd80000ff),
        Color::fromRGBA(0xd80000ff),
        Color::fromRGBA(0xd80000ff),
        Color::fromRGBA(0xd80000ff),
        Color::fromRGBA(0xda020eff),
        Color::fromRGBA(0xda020eff),
        Color::fromRGBA(0xda020eff),
        Color::fromRGBA(0xda020eff),
        Color::fromRGBA(0xda020eff),
        Color::fromRGBA(0xda020eff),
        Color::fromRGBA(0xda020eff),
        Color::fromRGBA(0xda020eff),
        Color::fromRGBA(0xda020eff),
        Color::fromRGBA(0xda020eff),
        Color::fromRGBA(0xda020eff),
        Color::fromRGBA(0xd9000cff),
        Color::fromRGBA(0xd9000aff),
        Color::fromRGBA(0xd8010aff),
        Color::fromRGBA(0xdc000aff),
        Color::fromRGBA(0xc42709ff),
        Color::fromRGBA(0xc5230aff),
        Color::fromRGBA(0xdc000aff),
        Color::fromRGBA(0xd8010aff),
        Color::fromRGBA(0xd9000aff),
        Color::fromRGBA(0xd9000cff),
        Color::fromRGBA(0xda020eff),
        Color::fromRGBA(0xda020eff),
        Color::fromRGBA(0xda020eff),
        Color::fromRGBA(0xda020eff),
        Color::fromRGBA(0xda020eff),
        Color::fromRGBA(0xda020eff),
        Color::fromRGBA(0xda020eff),
        Color::fromRGBA(0xda020eff),
        Color::fromRGBA(0xda020eff),
        Color::fromRGBA(0xda020eff),
        Color::fromRGBA(0xda020eff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xd9010cff),
        Color::fromRGBA(0xdd000cff),
        Color::fromRGBA(0xc9250bff),
        Color::fromRGBA(0xca200bff),
        Color::fromRGBA(0xdd000cff),
        Color::fromRGBA(0xd9010cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xd9010bff),
        Color::fromRGBA(0xdc000cff),
        Color::fromRGBA(0xcc130bff),
        Color::fromRGBA(0xad6709ff),
        Color::fromRGBA(0xcb1f0bff),
        Color::fromRGBA(0xdc000cff),
        Color::fromRGBA(0xd9010bff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xd9000bff),
        Color::fromRGBA(0xdb000cff),
        Color::fromRGBA(0xd20d0bff),
        Color::fromRGBA(0xb6450aff),
        Color::fromRGBA(0xcb130bff),
        Color::fromRGBA(0xdd000cff),
        Color::fromRGBA(0xd9000bff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff),
        Color::fromRGBA(0xda000cff)
    ],
];

$img = new Image(16, 8);
$img->append($pixels['16x8'], new Size(16, 8));
$img->append($pixels['32x16'], new Size(32, 16));

return $img;