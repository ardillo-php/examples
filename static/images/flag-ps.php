<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x8' => [
        Color::fromRGBA(0x830a18ff),
        Color::fromRGBA(0x0b0002ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x030001ff),
        Color::fromRGBA(0x030303ff),
        Color::fromRGBA(0x030303ff),
        Color::fromRGBA(0x030303ff),
        Color::fromRGBA(0x030303ff),
        Color::fromRGBA(0x030303ff),
        Color::fromRGBA(0x030303ff),
        Color::fromRGBA(0x030303ff),
        Color::fromRGBA(0x030303ff),
        Color::fromRGBA(0x030303ff),
        Color::fromRGBA(0x030303ff),
        Color::fromRGBA(0x030303ff),
        Color::fromRGBA(0x030303ff),
        Color::fromRGBA(0xda1128ff),
        Color::fromRGBA(0xaa0e1fff),
        Color::fromRGBA(0x210206ff),
        Color::fromRGBA(0x000000ff),
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
        Color::fromRGBA(0xca1025ff),
        Color::fromRGBA(0xd81228ff),
        Color::fromRGBA(0xc90d22ff),
        Color::fromRGBA(0x601820ff),
        Color::fromRGBA(0x556361ff),
        Color::fromRGBA(0x585a5aff),
        Color::fromRGBA(0x565555ff),
        Color::fromRGBA(0x565656ff),
        Color::fromRGBA(0x565656ff),
        Color::fromRGBA(0x565656ff),
        Color::fromRGBA(0x565656ff),
        Color::fromRGBA(0x565656ff),
        Color::fromRGBA(0x565656ff),
        Color::fromRGBA(0x565656ff),
        Color::fromRGBA(0x565656ff),
        Color::fromRGBA(0x565656ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcb1125ff),
        Color::fromRGBA(0xcf1227ff),
        Color::fromRGBA(0xd81126ff),
        Color::fromRGBA(0xea6e7bff),
        Color::fromRGBA(0xfffafbff),
        Color::fromRGBA(0xfeffffff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xce1025ff),
        Color::fromRGBA(0xcb1226ff),
        Color::fromRGBA(0xcf1026ff),
        Color::fromRGBA(0xd70822ff),
        Color::fromRGBA(0xea6577ff),
        Color::fromRGBA(0xfff8f9ff),
        Color::fromRGBA(0xfeffffff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xca1226ff),
        Color::fromRGBA(0xd80c25ff),
        Color::fromRGBA(0xc90f23ff),
        Color::fromRGBA(0x605b42ff),
        Color::fromRGBA(0x54b68aff),
        Color::fromRGBA(0x57aa82ff),
        Color::fromRGBA(0x55a57dff),
        Color::fromRGBA(0x56a77eff),
        Color::fromRGBA(0x55a67eff),
        Color::fromRGBA(0x55a67eff),
        Color::fromRGBA(0x55a67eff),
        Color::fromRGBA(0x55a67eff),
        Color::fromRGBA(0x55a67eff),
        Color::fromRGBA(0x55a67eff),
        Color::fromRGBA(0x55a67eff),
        Color::fromRGBA(0x55a67eff),
        Color::fromRGBA(0xda0a24ff),
        Color::fromRGBA(0xa92329ff),
        Color::fromRGBA(0x216939ff),
        Color::fromRGBA(0x00803cff),
        Color::fromRGBA(0x016f2fff),
        Color::fromRGBA(0x007030ff),
        Color::fromRGBA(0x007231ff),
        Color::fromRGBA(0x007131ff),
        Color::fromRGBA(0x007131ff),
        Color::fromRGBA(0x007131ff),
        Color::fromRGBA(0x007131ff),
        Color::fromRGBA(0x007131ff),
        Color::fromRGBA(0x007131ff),
        Color::fromRGBA(0x007131ff),
        Color::fromRGBA(0x007131ff),
        Color::fromRGBA(0x007131ff),
        Color::fromRGBA(0x83362eff),
        Color::fromRGBA(0x0b773cff),
        Color::fromRGBA(0x007f3eff),
        Color::fromRGBA(0x03783dff),
        Color::fromRGBA(0x037b3fff),
        Color::fromRGBA(0x037c3fff),
        Color::fromRGBA(0x037b3fff),
        Color::fromRGBA(0x037b3fff),
        Color::fromRGBA(0x037b3fff),
        Color::fromRGBA(0x037b3fff),
        Color::fromRGBA(0x037b3fff),
        Color::fromRGBA(0x037b3fff),
        Color::fromRGBA(0x037b3fff),
        Color::fromRGBA(0x037b3fff),
        Color::fromRGBA(0x037b3fff),
        Color::fromRGBA(0x037b3fff)
    ],
    '32x16' => [
        Color::fromRGBA(0x800a17ff),
        Color::fromRGBA(0x1a0204ff),
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
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0x9d0c1dff),
        Color::fromRGBA(0x2f0308ff),
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
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xd01126ff),
        Color::fromRGBA(0xb80f22ff),
        Color::fromRGBA(0x53060fff),
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
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xc81025ff),
        Color::fromRGBA(0x7a0a16ff),
        Color::fromRGBA(0x150104ff),
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
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0x9e0d1dff),
        Color::fromRGBA(0x300409ff),
        Color::fromRGBA(0x020303ff),
        Color::fromRGBA(0x010202ff),
        Color::fromRGBA(0x010101ff),
        Color::fromRGBA(0x010101ff),
        Color::fromRGBA(0x010101ff),
        Color::fromRGBA(0x010101ff),
        Color::fromRGBA(0x010101ff),
        Color::fromRGBA(0x010101ff),
        Color::fromRGBA(0x010101ff),
        Color::fromRGBA(0x010101ff),
        Color::fromRGBA(0x010101ff),
        Color::fromRGBA(0x010101ff),
        Color::fromRGBA(0x010101ff),
        Color::fromRGBA(0x010101ff),
        Color::fromRGBA(0x010101ff),
        Color::fromRGBA(0x010101ff),
        Color::fromRGBA(0x010101ff),
        Color::fromRGBA(0x010101ff),
        Color::fromRGBA(0x010101ff),
        Color::fromRGBA(0x010101ff),
        Color::fromRGBA(0x010101ff),
        Color::fromRGBA(0x010101ff),
        Color::fromRGBA(0x010101ff),
        Color::fromRGBA(0x010101ff),
        Color::fromRGBA(0x010101ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xd01126ff),
        Color::fromRGBA(0xb80f22ff),
        Color::fromRGBA(0x954851ff),
        Color::fromRGBA(0xa29d9eff),
        Color::fromRGBA(0xa4a6a6ff),
        Color::fromRGBA(0xa4a4a4ff),
        Color::fromRGBA(0xa4a4a4ff),
        Color::fromRGBA(0xa4a4a4ff),
        Color::fromRGBA(0xa4a4a4ff),
        Color::fromRGBA(0xa4a4a4ff),
        Color::fromRGBA(0xa4a4a4ff),
        Color::fromRGBA(0xa4a4a4ff),
        Color::fromRGBA(0xa4a4a4ff),
        Color::fromRGBA(0xa4a4a4ff),
        Color::fromRGBA(0xa4a4a4ff),
        Color::fromRGBA(0xa4a4a4ff),
        Color::fromRGBA(0xa4a4a4ff),
        Color::fromRGBA(0xa4a4a4ff),
        Color::fromRGBA(0xa4a4a4ff),
        Color::fromRGBA(0xa4a4a4ff),
        Color::fromRGBA(0xa4a4a4ff),
        Color::fromRGBA(0xa4a4a4ff),
        Color::fromRGBA(0xa4a4a4ff),
        Color::fromRGBA(0xa4a4a4ff),
        Color::fromRGBA(0xa4a4a4ff),
        Color::fromRGBA(0xa4a4a4ff),
        Color::fromRGBA(0xa4a4a4ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xcf1025ff),
        Color::fromRGBA(0xd31b2fff),
        Color::fromRGBA(0xe67582ff),
        Color::fromRGBA(0xfce8ebff),
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
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xcd0f24ff),
        Color::fromRGBA(0xd94656ff),
        Color::fromRGBA(0xf5cfd3ff),
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
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xcd0f24ff),
        Color::fromRGBA(0xd94656ff),
        Color::fromRGBA(0xf5cfd3ff),
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
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xcf0f25ff),
        Color::fromRGBA(0xd3192eff),
        Color::fromRGBA(0xe67381ff),
        Color::fromRGBA(0xfce7eaff),
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
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xce1025ff),
        Color::fromRGBA(0xd00f25ff),
        Color::fromRGBA(0xb81b28ff),
        Color::fromRGBA(0x957165ff),
        Color::fromRGBA(0xa2c9b3ff),
        Color::fromRGBA(0xa4d1bbff),
        Color::fromRGBA(0xa4cfb9ff),
        Color::fromRGBA(0xa4cfb9ff),
        Color::fromRGBA(0xa4cfb9ff),
        Color::fromRGBA(0xa4cfb9ff),
        Color::fromRGBA(0xa4cfb9ff),
        Color::fromRGBA(0xa4cfb9ff),
        Color::fromRGBA(0xa4cfb9ff),
        Color::fromRGBA(0xa4cfb9ff),
        Color::fromRGBA(0xa4cfb9ff),
        Color::fromRGBA(0xa4cfb9ff),
        Color::fromRGBA(0xa4cfb9ff),
        Color::fromRGBA(0xa4cfb9ff),
        Color::fromRGBA(0xa4cfb9ff),
        Color::fromRGBA(0xa4cfb9ff),
        Color::fromRGBA(0xa4cfb9ff),
        Color::fromRGBA(0xa4cfb9ff),
        Color::fromRGBA(0xa4cfb9ff),
        Color::fromRGBA(0xa4cfb9ff),
        Color::fromRGBA(0xa4cfb9ff),
        Color::fromRGBA(0xa4cfb9ff),
        Color::fromRGBA(0xa4cfb9ff),
        Color::fromRGBA(0xa4cfb9ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xce1025ff),
        Color::fromRGBA(0xcf1025ff),
        Color::fromRGBA(0x9e292bff),
        Color::fromRGBA(0x306137ff),
        Color::fromRGBA(0x027c3fff),
        Color::fromRGBA(0x017b3eff),
        Color::fromRGBA(0x017a3eff),
        Color::fromRGBA(0x017a3eff),
        Color::fromRGBA(0x017a3eff),
        Color::fromRGBA(0x017a3eff),
        Color::fromRGBA(0x017a3eff),
        Color::fromRGBA(0x017a3eff),
        Color::fromRGBA(0x017a3eff),
        Color::fromRGBA(0x017a3eff),
        Color::fromRGBA(0x017a3eff),
        Color::fromRGBA(0x017a3eff),
        Color::fromRGBA(0x017a3eff),
        Color::fromRGBA(0x017a3eff),
        Color::fromRGBA(0x017a3eff),
        Color::fromRGBA(0x017a3eff),
        Color::fromRGBA(0x017a3eff),
        Color::fromRGBA(0x017a3eff),
        Color::fromRGBA(0x017a3eff),
        Color::fromRGBA(0x017a3eff),
        Color::fromRGBA(0x017a3eff),
        Color::fromRGBA(0x017a3eff),
        Color::fromRGBA(0x017a3eff),
        Color::fromRGBA(0x017a3eff),
        Color::fromRGBA(0x017a3eff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xcf1025ff),
        Color::fromRGBA(0xc81326ff),
        Color::fromRGBA(0x7a3b2fff),
        Color::fromRGBA(0x156f3aff),
        Color::fromRGBA(0x007b3dff),
        Color::fromRGBA(0x007a3cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0xce1025ff),
        Color::fromRGBA(0xd00f25ff),
        Color::fromRGBA(0xb81b28ff),
        Color::fromRGBA(0x534f33ff),
        Color::fromRGBA(0x06773cff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0x9d292bff),
        Color::fromRGBA(0x2f6137ff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x80382eff),
        Color::fromRGBA(0x1a6c3aff),
        Color::fromRGBA(0x007b3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x00793dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff)
    ],
];

$img = new Image(16, 8);
$img->append($pixels['16x8'], new Size(16, 8));
$img->append($pixels['32x16'], new Size(32, 16));

return $img;
