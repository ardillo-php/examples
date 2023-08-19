<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x11' => [
        Color::fromRGBA(0x000000fd),
        Color::fromRGBA(0x000000fd),
        Color::fromRGBA(0x000000fd),
        Color::fromRGBA(0x000000fd),
        Color::fromRGBA(0x000000fd),
        Color::fromRGBA(0x020000fd),
        Color::fromRGBA(0x210206fd),
        Color::fromRGBA(0x41050cfd),
        Color::fromRGBA(0x41050cfd),
        Color::fromRGBA(0x210206fd),
        Color::fromRGBA(0x020000fd),
        Color::fromRGBA(0x000000fd),
        Color::fromRGBA(0x000000fd),
        Color::fromRGBA(0x000000fd),
        Color::fromRGBA(0x000000fd),
        Color::fromRGBA(0x000000fd),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x010000ff),
        Color::fromRGBA(0x37040aff),
        Color::fromRGBA(0x580710ff),
        Color::fromRGBA(0x590710ff),
        Color::fromRGBA(0x590710ff),
        Color::fromRGBA(0x580710ff),
        Color::fromRGBA(0x37040aff),
        Color::fromRGBA(0x010000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x1e0205ff),
        Color::fromRGBA(0x560710ff),
        Color::fromRGBA(0x750915ff),
        Color::fromRGBA(0xb70f21ff),
        Color::fromRGBA(0xb70f21ff),
        Color::fromRGBA(0x750915ff),
        Color::fromRGBA(0x560710ff),
        Color::fromRGBA(0x1e0205ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x41050bff),
        Color::fromRGBA(0x41050bff),
        Color::fromRGBA(0x41050bff),
        Color::fromRGBA(0x40050bff),
        Color::fromRGBA(0x5a0710ff),
        Color::fromRGBA(0x690813ff),
        Color::fromRGBA(0x930c1bff),
        Color::fromRGBA(0x9f0d1dff),
        Color::fromRGBA(0x9f0d1dff),
        Color::fromRGBA(0x930c1bff),
        Color::fromRGBA(0x670813ff),
        Color::fromRGBA(0x580710ff),
        Color::fromRGBA(0x40050bff),
        Color::fromRGBA(0x41050bff),
        Color::fromRGBA(0x41050bff),
        Color::fromRGBA(0x41050bff),
        Color::fromRGBA(0xca1025ff),
        Color::fromRGBA(0xca1025ff),
        Color::fromRGBA(0xca1025ff),
        Color::fromRGBA(0xca1025ff),
        Color::fromRGBA(0xca1025ff),
        Color::fromRGBA(0xca1025ff),
        Color::fromRGBA(0xc91025ff),
        Color::fromRGBA(0xc81025ff),
        Color::fromRGBA(0xc81025ff),
        Color::fromRGBA(0xc91025ff),
        Color::fromRGBA(0xc91025ff),
        Color::fromRGBA(0xc91025ff),
        Color::fromRGBA(0xca1025ff),
        Color::fromRGBA(0xca1025ff),
        Color::fromRGBA(0xca1025ff),
        Color::fromRGBA(0xca1025ff),
        Color::fromRGBA(0xce1026ff),
        Color::fromRGBA(0xce1026ff),
        Color::fromRGBA(0xce1026ff),
        Color::fromRGBA(0xce1026ff),
        Color::fromRGBA(0xce1026ff),
        Color::fromRGBA(0xce1026ff),
        Color::fromRGBA(0xce1026ff),
        Color::fromRGBA(0xce1026ff),
        Color::fromRGBA(0xce1026ff),
        Color::fromRGBA(0xce1026ff),
        Color::fromRGBA(0xce1026ff),
        Color::fromRGBA(0xce1026ff),
        Color::fromRGBA(0xce1026ff),
        Color::fromRGBA(0xce1026ff),
        Color::fromRGBA(0xce1026ff),
        Color::fromRGBA(0xce1026ff),
        Color::fromRGBA(0xcb1125ff),
        Color::fromRGBA(0xcb1125ff),
        Color::fromRGBA(0xcb1125ff),
        Color::fromRGBA(0xcb1125ff),
        Color::fromRGBA(0xcb1125ff),
        Color::fromRGBA(0xcb1125ff),
        Color::fromRGBA(0xcb1125ff),
        Color::fromRGBA(0xcb1125ff),
        Color::fromRGBA(0xcb1125ff),
        Color::fromRGBA(0xcb1125ff),
        Color::fromRGBA(0xcb1125ff),
        Color::fromRGBA(0xcb1125ff),
        Color::fromRGBA(0xcb1125ff),
        Color::fromRGBA(0xcb1125ff),
        Color::fromRGBA(0xcb1125ff),
        Color::fromRGBA(0xcb1125ff),
        Color::fromRGBA(0x626c2eff),
        Color::fromRGBA(0x626c2eff),
        Color::fromRGBA(0x626c2eff),
        Color::fromRGBA(0x626c2eff),
        Color::fromRGBA(0x626c2eff),
        Color::fromRGBA(0x626c2eff),
        Color::fromRGBA(0x626c2eff),
        Color::fromRGBA(0x626c2eff),
        Color::fromRGBA(0x626c2eff),
        Color::fromRGBA(0x626c2eff),
        Color::fromRGBA(0x626c2eff),
        Color::fromRGBA(0x626c2eff),
        Color::fromRGBA(0x626c2eff),
        Color::fromRGBA(0x626c2eff),
        Color::fromRGBA(0x626c2eff),
        Color::fromRGBA(0x626c2eff),
        Color::fromRGBA(0x30a035ff),
        Color::fromRGBA(0x30a035ff),
        Color::fromRGBA(0x30a035ff),
        Color::fromRGBA(0x30a035ff),
        Color::fromRGBA(0x30a035ff),
        Color::fromRGBA(0x30a035ff),
        Color::fromRGBA(0x30a035ff),
        Color::fromRGBA(0x30a035ff),
        Color::fromRGBA(0x30a035ff),
        Color::fromRGBA(0x30a035ff),
        Color::fromRGBA(0x30a035ff),
        Color::fromRGBA(0x30a035ff),
        Color::fromRGBA(0x30a035ff),
        Color::fromRGBA(0x30a035ff),
        Color::fromRGBA(0x30a035ff),
        Color::fromRGBA(0x30a035ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x329b34ff),
        Color::fromRGBA(0x329b34ff),
        Color::fromRGBA(0x329b34ff),
        Color::fromRGBA(0x329b34ff),
        Color::fromRGBA(0x329b34ff),
        Color::fromRGBA(0x329b34ff),
        Color::fromRGBA(0x329b34ff),
        Color::fromRGBA(0x329b34ff),
        Color::fromRGBA(0x329b34ff),
        Color::fromRGBA(0x329b34ff),
        Color::fromRGBA(0x329b34ff),
        Color::fromRGBA(0x329b34ff),
        Color::fromRGBA(0x329b34ff),
        Color::fromRGBA(0x329b34ff),
        Color::fromRGBA(0x329b34ff),
        Color::fromRGBA(0x329b34ff)
    ],
    '32x21' => [
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x0c0102fe),
        Color::fromRGBA(0x170104fe),
        Color::fromRGBA(0x170104fe),
        Color::fromRGBA(0x0c0102fe),
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x000000fe),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x010000ff),
        Color::fromRGBA(0x210206ff),
        Color::fromRGBA(0x53060fff),
        Color::fromRGBA(0x720915ff),
        Color::fromRGBA(0x7c0a16ff),
        Color::fromRGBA(0x7c0a16ff),
        Color::fromRGBA(0x720915ff),
        Color::fromRGBA(0x54060fff),
        Color::fromRGBA(0x210206ff),
        Color::fromRGBA(0x010000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x060001ff),
        Color::fromRGBA(0x45050cff),
        Color::fromRGBA(0x810a17ff),
        Color::fromRGBA(0x780916ff),
        Color::fromRGBA(0x570710ff),
        Color::fromRGBA(0x43050cff),
        Color::fromRGBA(0x43050cff),
        Color::fromRGBA(0x570710ff),
        Color::fromRGBA(0x780916ff),
        Color::fromRGBA(0x810a17ff),
        Color::fromRGBA(0x45050cff),
        Color::fromRGBA(0x060001ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x020000ff),
        Color::fromRGBA(0x48050dff),
        Color::fromRGBA(0x840a18ff),
        Color::fromRGBA(0x55070fff),
        Color::fromRGBA(0x2a0307ff),
        Color::fromRGBA(0x44050cff),
        Color::fromRGBA(0x640812ff),
        Color::fromRGBA(0x640812ff),
        Color::fromRGBA(0x44050cff),
        Color::fromRGBA(0x2a0307ff),
        Color::fromRGBA(0x55070fff),
        Color::fromRGBA(0x850b18ff),
        Color::fromRGBA(0x48050dff),
        Color::fromRGBA(0x020000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x280307ff),
        Color::fromRGBA(0x830a18ff),
        Color::fromRGBA(0x53060fff),
        Color::fromRGBA(0x2e0308ff),
        Color::fromRGBA(0x8f0b1aff),
        Color::fromRGBA(0xc71024ff),
        Color::fromRGBA(0xd01126ff),
        Color::fromRGBA(0xd01126ff),
        Color::fromRGBA(0xc71024ff),
        Color::fromRGBA(0x8f0b1aff),
        Color::fromRGBA(0x2e0308ff),
        Color::fromRGBA(0x53060fff),
        Color::fromRGBA(0x830a18ff),
        Color::fromRGBA(0x280307ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x030000ff),
        Color::fromRGBA(0x5f0711ff),
        Color::fromRGBA(0x720915ff),
        Color::fromRGBA(0x280307ff),
        Color::fromRGBA(0x940c1bff),
        Color::fromRGBA(0xd21126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xd21126ff),
        Color::fromRGBA(0x940c1bff),
        Color::fromRGBA(0x280307ff),
        Color::fromRGBA(0x720915ff),
        Color::fromRGBA(0x5f0711ff),
        Color::fromRGBA(0x030000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x150103ff),
        Color::fromRGBA(0x150103ff),
        Color::fromRGBA(0x150103ff),
        Color::fromRGBA(0x150103ff),
        Color::fromRGBA(0x150103ff),
        Color::fromRGBA(0x150103ff),
        Color::fromRGBA(0x150103ff),
        Color::fromRGBA(0x150103ff),
        Color::fromRGBA(0x1b0205ff),
        Color::fromRGBA(0x55070fff),
        Color::fromRGBA(0x41050cff),
        Color::fromRGBA(0x320409ff),
        Color::fromRGBA(0x780916ff),
        Color::fromRGBA(0x7c0a17ff),
        Color::fromRGBA(0x7c0a16ff),
        Color::fromRGBA(0x7c0a16ff),
        Color::fromRGBA(0x7c0a16ff),
        Color::fromRGBA(0x7c0a16ff),
        Color::fromRGBA(0x7c0a17ff),
        Color::fromRGBA(0x780916ff),
        Color::fromRGBA(0x320409ff),
        Color::fromRGBA(0x3f050bff),
        Color::fromRGBA(0x53060fff),
        Color::fromRGBA(0x1b0205ff),
        Color::fromRGBA(0x150103ff),
        Color::fromRGBA(0x150103ff),
        Color::fromRGBA(0x150103ff),
        Color::fromRGBA(0x150103ff),
        Color::fromRGBA(0x150103ff),
        Color::fromRGBA(0x150103ff),
        Color::fromRGBA(0x150103ff),
        Color::fromRGBA(0x150103ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xb20e20ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xb20e20ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xb20e20ff),
        Color::fromRGBA(0xb00e20ff),
        Color::fromRGBA(0xaf0e20ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0xb72227ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x428d32ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329f35ff),
        Color::fromRGBA(0x329e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339d35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339d35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339d35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x339e35ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329c34ff),
        Color::fromRGBA(0x329b34ff)
    ],
];

$img = new Image(16, 11);
$img->append($pixels['16x11'], new Size(16, 11));
$img->append($pixels['32x21'], new Size(32, 21));

return $img;
