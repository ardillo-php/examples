<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x8' => [
        Color::fromRGBA(0x4a4f2cff),
        Color::fromRGBA(0xcc1233ff),
        Color::fromRGBA(0xdc0a34ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xd21336ff),
        Color::fromRGBA(0xd21337ff),
        Color::fromRGBA(0xd21337ff),
        Color::fromRGBA(0xd21337ff),
        Color::fromRGBA(0xd21337ff),
        Color::fromRGBA(0xd21337ff),
        Color::fromRGBA(0xd21337ff),
        Color::fromRGBA(0xd21337ff),
        Color::fromRGBA(0xd21337ff),
        Color::fromRGBA(0xd21337ff),
        Color::fromRGBA(0xd21337ff),
        Color::fromRGBA(0xd21337ff),
        Color::fromRGBA(0x007728ff),
        Color::fromRGBA(0x25602aff),
        Color::fromRGBA(0xb11f32ff),
        Color::fromRGBA(0xe00632ff),
        Color::fromRGBA(0xcc0125ff),
        Color::fromRGBA(0xce0026ff),
        Color::fromRGBA(0xcf0127ff),
        Color::fromRGBA(0xcf0127ff),
        Color::fromRGBA(0xcf0127ff),
        Color::fromRGBA(0xcf0127ff),
        Color::fromRGBA(0xcf0127ff),
        Color::fromRGBA(0xcf0127ff),
        Color::fromRGBA(0xcf0127ff),
        Color::fromRGBA(0xcf0127ff),
        Color::fromRGBA(0xcf0127ff),
        Color::fromRGBA(0xcf0127ff),
        Color::fromRGBA(0x027029ff),
        Color::fromRGBA(0x007729ff),
        Color::fromRGBA(0x066e26ff),
        Color::fromRGBA(0x84463eff),
        Color::fromRGBA(0xf36684ff),
        Color::fromRGBA(0xe4647cff),
        Color::fromRGBA(0xdf6077ff),
        Color::fromRGBA(0xe16178ff),
        Color::fromRGBA(0xe16078ff),
        Color::fromRGBA(0xe16078ff),
        Color::fromRGBA(0xe16078ff),
        Color::fromRGBA(0xe16078ff),
        Color::fromRGBA(0xe16078ff),
        Color::fromRGBA(0xe16078ff),
        Color::fromRGBA(0xe16078ff),
        Color::fromRGBA(0xe16078ff),
        Color::fromRGBA(0x007228ff),
        Color::fromRGBA(0x027129ff),
        Color::fromRGBA(0x027229ff),
        Color::fromRGBA(0x007525ff),
        Color::fromRGBA(0x54ac79ff),
        Color::fromRGBA(0xf5fdfaff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfeffffff),
        Color::fromRGBA(0xfeffffff),
        Color::fromRGBA(0xfeffffff),
        Color::fromRGBA(0xfeffffff),
        Color::fromRGBA(0xfeffffff),
        Color::fromRGBA(0xfeffffff),
        Color::fromRGBA(0xfeffffff),
        Color::fromRGBA(0xfeffffff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007028ff),
        Color::fromRGBA(0x017329ff),
        Color::fromRGBA(0x00762aff),
        Color::fromRGBA(0x64ad7dff),
        Color::fromRGBA(0xfafdfbff),
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
        Color::fromRGBA(0x007028ff),
        Color::fromRGBA(0x00782bff),
        Color::fromRGBA(0x006e25ff),
        Color::fromRGBA(0x123d21ff),
        Color::fromRGBA(0x645b61ff),
        Color::fromRGBA(0x5a595aff),
        Color::fromRGBA(0x545555ff),
        Color::fromRGBA(0x565656ff),
        Color::fromRGBA(0x565555ff),
        Color::fromRGBA(0x565555ff),
        Color::fromRGBA(0x565555ff),
        Color::fromRGBA(0x565555ff),
        Color::fromRGBA(0x565555ff),
        Color::fromRGBA(0x565555ff),
        Color::fromRGBA(0x565555ff),
        Color::fromRGBA(0x565555ff),
        Color::fromRGBA(0x00782bff),
        Color::fromRGBA(0x005e21ff),
        Color::fromRGBA(0x001206ff),
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
        Color::fromRGBA(0x00481aff),
        Color::fromRGBA(0x000602ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000201ff),
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
        Color::fromRGBA(0x030303ff)
    ],
    '32x16' => [
        Color::fromRGBA(0x4e4d2dff),
        Color::fromRGBA(0xb71c32ff),
        Color::fromRGBA(0xd50e34ff),
        Color::fromRGBA(0xd20f34ff),
        Color::fromRGBA(0xd11034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0x017129ff),
        Color::fromRGBA(0x315a2bff),
        Color::fromRGBA(0xa12631ff),
        Color::fromRGBA(0xd30f34ff),
        Color::fromRGBA(0xd20f34ff),
        Color::fromRGBA(0xd11034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0x007228ff),
        Color::fromRGBA(0x007328ff),
        Color::fromRGBA(0x16672aff),
        Color::fromRGBA(0x7c372fff),
        Color::fromRGBA(0xcc1233ff),
        Color::fromRGBA(0xd30f34ff),
        Color::fromRGBA(0xd11034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007129ff),
        Color::fromRGBA(0x007228ff),
        Color::fromRGBA(0x066f29ff),
        Color::fromRGBA(0x554a2dff),
        Color::fromRGBA(0xbc1a32ff),
        Color::fromRGBA(0xd40e34ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007129ff),
        Color::fromRGBA(0x007228ff),
        Color::fromRGBA(0x007228ff),
        Color::fromRGBA(0x305b2bff),
        Color::fromRGBA(0xa12731ff),
        Color::fromRGBA(0xd41236ff),
        Color::fromRGBA(0xd31135ff),
        Color::fromRGBA(0xd21135ff),
        Color::fromRGBA(0xd21135ff),
        Color::fromRGBA(0xd21135ff),
        Color::fromRGBA(0xd21135ff),
        Color::fromRGBA(0xd21135ff),
        Color::fromRGBA(0xd21135ff),
        Color::fromRGBA(0xd21135ff),
        Color::fromRGBA(0xd21135ff),
        Color::fromRGBA(0xd21135ff),
        Color::fromRGBA(0xd21135ff),
        Color::fromRGBA(0xd21135ff),
        Color::fromRGBA(0xd21135ff),
        Color::fromRGBA(0xd21135ff),
        Color::fromRGBA(0xd21135ff),
        Color::fromRGBA(0xd21135ff),
        Color::fromRGBA(0xd21135ff),
        Color::fromRGBA(0xd21135ff),
        Color::fromRGBA(0xd21135ff),
        Color::fromRGBA(0xd21135ff),
        Color::fromRGBA(0xd21135ff),
        Color::fromRGBA(0xd21135ff),
        Color::fromRGBA(0xd21135ff),
        Color::fromRGBA(0xd21135ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007129ff),
        Color::fromRGBA(0x007228ff),
        Color::fromRGBA(0x007328ff),
        Color::fromRGBA(0x16682aff),
        Color::fromRGBA(0x887564ff),
        Color::fromRGBA(0xe8a6b0ff),
        Color::fromRGBA(0xf1abb8ff),
        Color::fromRGBA(0xeeaab6ff),
        Color::fromRGBA(0xefaab6ff),
        Color::fromRGBA(0xefaab6ff),
        Color::fromRGBA(0xefaab6ff),
        Color::fromRGBA(0xefaab6ff),
        Color::fromRGBA(0xefaab6ff),
        Color::fromRGBA(0xefaab6ff),
        Color::fromRGBA(0xefaab6ff),
        Color::fromRGBA(0xefaab6ff),
        Color::fromRGBA(0xefaab6ff),
        Color::fromRGBA(0xefaab6ff),
        Color::fromRGBA(0xefaab6ff),
        Color::fromRGBA(0xefaab6ff),
        Color::fromRGBA(0xefaab6ff),
        Color::fromRGBA(0xefaab6ff),
        Color::fromRGBA(0xefaab6ff),
        Color::fromRGBA(0xefaab6ff),
        Color::fromRGBA(0xefaab6ff),
        Color::fromRGBA(0xefaab6ff),
        Color::fromRGBA(0xefaab6ff),
        Color::fromRGBA(0xefaab6ff),
        Color::fromRGBA(0xefaab6ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007129ff),
        Color::fromRGBA(0x007228ff),
        Color::fromRGBA(0x087932ff),
        Color::fromRGBA(0x68af83ff),
        Color::fromRGBA(0xe4f2eaff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007128ff),
        Color::fromRGBA(0x007027ff),
        Color::fromRGBA(0x399159ff),
        Color::fromRGBA(0xcce2d4ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007128ff),
        Color::fromRGBA(0x007027ff),
        Color::fromRGBA(0x399159ff),
        Color::fromRGBA(0xcce2d4ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007128ff),
        Color::fromRGBA(0x007228ff),
        Color::fromRGBA(0x0b7932ff),
        Color::fromRGBA(0x6baf84ff),
        Color::fromRGBA(0xe6f2ebff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007129ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007329ff),
        Color::fromRGBA(0x006624ff),
        Color::fromRGBA(0x417052ff),
        Color::fromRGBA(0x9da09eff),
        Color::fromRGBA(0xa6a5a6ff),
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
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007128ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x00571fff),
        Color::fromRGBA(0x001a09ff),
        Color::fromRGBA(0x030203ff),
        Color::fromRGBA(0x020101ff),
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
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007128ff),
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x006e27ff),
        Color::fromRGBA(0x004318ff),
        Color::fromRGBA(0x000c04ff),
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
        Color::fromRGBA(0x007229ff),
        Color::fromRGBA(0x007329ff),
        Color::fromRGBA(0x006624ff),
        Color::fromRGBA(0x002e10ff),
        Color::fromRGBA(0x000301ff),
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
        Color::fromRGBA(0x007128ff),
        Color::fromRGBA(0x00561fff),
        Color::fromRGBA(0x001a09ff),
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
        Color::fromRGBA(0x004719ff),
        Color::fromRGBA(0x000e05ff),
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
        Color::fromRGBA(0x000000ff)
    ],
];

$img = new Image(16, 8);
$img->append($pixels['16x8'], new Size(16, 8));
$img->append($pixels['32x16'], new Size(32, 16));

return $img;
