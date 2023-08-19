<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x11' => [
        Color::fromRGBA(0x009543fd),
        Color::fromRGBA(0x009543fd),
        Color::fromRGBA(0x009543fd),
        Color::fromRGBA(0x009543fd),
        Color::fromRGBA(0x009543fd),
        Color::fromRGBA(0x009543fd),
        Color::fromRGBA(0x009543fd),
        Color::fromRGBA(0x009543fd),
        Color::fromRGBA(0x009442fd),
        Color::fromRGBA(0x1e9d43fd),
        Color::fromRGBA(0xbecc48fe),
        Color::fromRGBA(0xf9dd49ff),
        Color::fromRGBA(0xf6dc49ff),
        Color::fromRGBA(0xf7dd4aff),
        Color::fromRGBA(0xf6d848ff),
        Color::fromRGBA(0xe88535ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x179b43ff),
        Color::fromRGBA(0xa8c647ff),
        Color::fromRGBA(0xfbde49ff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfadb49ff),
        Color::fromRGBA(0xec8936ff),
        Color::fromRGBA(0xdd2c21ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x159a43ff),
        Color::fromRGBA(0xa6c547ff),
        Color::fromRGBA(0xfcde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfadc49ff),
        Color::fromRGBA(0xed8c37ff),
        Color::fromRGBA(0xdd2b20ff),
        Color::fromRGBA(0xdb221eff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x139a43ff),
        Color::fromRGBA(0xa2c447ff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfadc49ff),
        Color::fromRGBA(0xed8f37ff),
        Color::fromRGBA(0xdd2c20ff),
        Color::fromRGBA(0xdb221eff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x129943ff),
        Color::fromRGBA(0x9ec247ff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfadd49ff),
        Color::fromRGBA(0xee9238ff),
        Color::fromRGBA(0xdd2d21ff),
        Color::fromRGBA(0xdb221eff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x109943ff),
        Color::fromRGBA(0x99c147ff),
        Color::fromRGBA(0xfadd49ff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfadd49ff),
        Color::fromRGBA(0xee9539ff),
        Color::fromRGBA(0xdd2e21ff),
        Color::fromRGBA(0xdb221eff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x0e9843ff),
        Color::fromRGBA(0x95c047ff),
        Color::fromRGBA(0xfadd49ff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xef983aff),
        Color::fromRGBA(0xde3021ff),
        Color::fromRGBA(0xdb221eff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x0d9843ff),
        Color::fromRGBA(0x91bf47ff),
        Color::fromRGBA(0xf9dd49ff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xef9c3aff),
        Color::fromRGBA(0xde3122ff),
        Color::fromRGBA(0xdb221eff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x0b9743ff),
        Color::fromRGBA(0x8dbe46ff),
        Color::fromRGBA(0xf8dd49ff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xf09f3bff),
        Color::fromRGBA(0xde3322ff),
        Color::fromRGBA(0xdb221eff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0x0c9843ff),
        Color::fromRGBA(0x88bc46ff),
        Color::fromRGBA(0xf8dd49ff),
        Color::fromRGBA(0xfcde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xf0a03bff),
        Color::fromRGBA(0xde3422ff),
        Color::fromRGBA(0xdb221eff),
        Color::fromRGBA(0xdc231eff),
        Color::fromRGBA(0xdc231eff),
        Color::fromRGBA(0xdc231eff),
        Color::fromRGBA(0xdc231eff),
        Color::fromRGBA(0xdc231eff),
        Color::fromRGBA(0xdc231eff),
        Color::fromRGBA(0xdc231eff),
        Color::fromRGBA(0x81ba46ff),
        Color::fromRGBA(0xf0da49ff),
        Color::fromRGBA(0xf7dd49ff),
        Color::fromRGBA(0xf6dc49ff),
        Color::fromRGBA(0xf7de4aff),
        Color::fromRGBA(0xf1b23fff),
        Color::fromRGBA(0xdf3c24ff),
        Color::fromRGBA(0xdb251fff),
        Color::fromRGBA(0xdb271fff),
        Color::fromRGBA(0xdb271fff),
        Color::fromRGBA(0xdb271fff),
        Color::fromRGBA(0xdb271fff),
        Color::fromRGBA(0xdb271fff),
        Color::fromRGBA(0xdb271fff),
        Color::fromRGBA(0xdb271fff),
        Color::fromRGBA(0xdb271fff)
    ],
    '32x21' => [
        Color::fromRGBA(0x009543fe),
        Color::fromRGBA(0x009543fe),
        Color::fromRGBA(0x009543fe),
        Color::fromRGBA(0x009543fe),
        Color::fromRGBA(0x009543fe),
        Color::fromRGBA(0x009543fe),
        Color::fromRGBA(0x009543fe),
        Color::fromRGBA(0x009543fe),
        Color::fromRGBA(0x009543fe),
        Color::fromRGBA(0x009543fe),
        Color::fromRGBA(0x009543fe),
        Color::fromRGBA(0x009543fe),
        Color::fromRGBA(0x009543fe),
        Color::fromRGBA(0x009543fe),
        Color::fromRGBA(0x009543fe),
        Color::fromRGBA(0x009543fe),
        Color::fromRGBA(0x009543fe),
        Color::fromRGBA(0x009543fe),
        Color::fromRGBA(0x009442fe),
        Color::fromRGBA(0x009442fe),
        Color::fromRGBA(0x50ac45fe),
        Color::fromRGBA(0xe6d849ff),
        Color::fromRGBA(0xf9dd49ff),
        Color::fromRGBA(0xf7dd49ff),
        Color::fromRGBA(0xf7dd49ff),
        Color::fromRGBA(0xf7dd49ff),
        Color::fromRGBA(0xf7dd49ff),
        Color::fromRGBA(0xf7dd49ff),
        Color::fromRGBA(0xf7dd49ff),
        Color::fromRGBA(0xf8de4aff),
        Color::fromRGBA(0xf6d648ff),
        Color::fromRGBA(0xe88134ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x48a944ff),
        Color::fromRGBA(0xdbd449ff),
        Color::fromRGBA(0xfcde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde49ff),
        Color::fromRGBA(0xfbdf4aff),
        Color::fromRGBA(0xfad948ff),
        Color::fromRGBA(0xeb8034ff),
        Color::fromRGBA(0xdd2a20ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x4baa45ff),
        Color::fromRGBA(0xdfd549ff),
        Color::fromRGBA(0xfdde4aff),
        Color::fromRGBA(0xfadd4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfadd49ff),
        Color::fromRGBA(0xfbdf4aff),
        Color::fromRGBA(0xfad848ff),
        Color::fromRGBA(0xea7e33ff),
        Color::fromRGBA(0xdc271fff),
        Color::fromRGBA(0xdb231eff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x4eab45ff),
        Color::fromRGBA(0xe0d649ff),
        Color::fromRGBA(0xfdde4aff),
        Color::fromRGBA(0xfadd4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfadd49ff),
        Color::fromRGBA(0xfbdf4aff),
        Color::fromRGBA(0xf9d748ff),
        Color::fromRGBA(0xea7b33ff),
        Color::fromRGBA(0xdc271fff),
        Color::fromRGBA(0xdb231eff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x50ac45ff),
        Color::fromRGBA(0xe2d649ff),
        Color::fromRGBA(0xfdde4aff),
        Color::fromRGBA(0xfadd4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfadd49ff),
        Color::fromRGBA(0xfbdf4aff),
        Color::fromRGBA(0xf9d748ff),
        Color::fromRGBA(0xea7932ff),
        Color::fromRGBA(0xdc261fff),
        Color::fromRGBA(0xdb231eff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x53ad45ff),
        Color::fromRGBA(0xe4d749ff),
        Color::fromRGBA(0xfdde4aff),
        Color::fromRGBA(0xfadd4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfadd49ff),
        Color::fromRGBA(0xfbdf4aff),
        Color::fromRGBA(0xf9d648ff),
        Color::fromRGBA(0xe97732ff),
        Color::fromRGBA(0xdc261fff),
        Color::fromRGBA(0xdb231eff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x56ad45ff),
        Color::fromRGBA(0xe5d749ff),
        Color::fromRGBA(0xfdde4aff),
        Color::fromRGBA(0xfadd4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfadd49ff),
        Color::fromRGBA(0xfbdf4aff),
        Color::fromRGBA(0xf9d548ff),
        Color::fromRGBA(0xe97531ff),
        Color::fromRGBA(0xdc251fff),
        Color::fromRGBA(0xdb231eff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x019442ff),
        Color::fromRGBA(0x59ae45ff),
        Color::fromRGBA(0xe7d849ff),
        Color::fromRGBA(0xfdde4aff),
        Color::fromRGBA(0xfadd4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfadd49ff),
        Color::fromRGBA(0xfbdf4aff),
        Color::fromRGBA(0xf9d447ff),
        Color::fromRGBA(0xe97231ff),
        Color::fromRGBA(0xdc251fff),
        Color::fromRGBA(0xdb231eff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x019442ff),
        Color::fromRGBA(0x5caf45ff),
        Color::fromRGBA(0xe8d849ff),
        Color::fromRGBA(0xfdde4aff),
        Color::fromRGBA(0xfadd4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfadd49ff),
        Color::fromRGBA(0xfbdf4aff),
        Color::fromRGBA(0xf9d347ff),
        Color::fromRGBA(0xe87030ff),
        Color::fromRGBA(0xdc251fff),
        Color::fromRGBA(0xdb231eff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x029542ff),
        Color::fromRGBA(0x5eb045ff),
        Color::fromRGBA(0xe9d849ff),
        Color::fromRGBA(0xfdde4aff),
        Color::fromRGBA(0xfadd4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfadd49ff),
        Color::fromRGBA(0xfbdf4aff),
        Color::fromRGBA(0xf9d347ff),
        Color::fromRGBA(0xe86e30ff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdb231eff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x029543ff),
        Color::fromRGBA(0x61b145ff),
        Color::fromRGBA(0xebd949ff),
        Color::fromRGBA(0xfdde4aff),
        Color::fromRGBA(0xfadd4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfadd49ff),
        Color::fromRGBA(0xfbdf4aff),
        Color::fromRGBA(0xf9d247ff),
        Color::fromRGBA(0xe86c2fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdb231eff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x029543ff),
        Color::fromRGBA(0x64b245ff),
        Color::fromRGBA(0xecd949ff),
        Color::fromRGBA(0xfcde4aff),
        Color::fromRGBA(0xfadd4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfadd49ff),
        Color::fromRGBA(0xfbdf4aff),
        Color::fromRGBA(0xf8d147ff),
        Color::fromRGBA(0xe76a2fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdb231eff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x039543ff),
        Color::fromRGBA(0x67b345ff),
        Color::fromRGBA(0xedda49ff),
        Color::fromRGBA(0xfcde4aff),
        Color::fromRGBA(0xfadd4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfadd49ff),
        Color::fromRGBA(0xfbdf4aff),
        Color::fromRGBA(0xf8d046ff),
        Color::fromRGBA(0xe7672eff),
        Color::fromRGBA(0xdb231eff),
        Color::fromRGBA(0xdb231eff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x039543ff),
        Color::fromRGBA(0x6ab446ff),
        Color::fromRGBA(0xeeda49ff),
        Color::fromRGBA(0xfcde4aff),
        Color::fromRGBA(0xfadd4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfadd49ff),
        Color::fromRGBA(0xfbdf4aff),
        Color::fromRGBA(0xf8cf46ff),
        Color::fromRGBA(0xe6652eff),
        Color::fromRGBA(0xdb231eff),
        Color::fromRGBA(0xdb231eff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x049543ff),
        Color::fromRGBA(0x6db446ff),
        Color::fromRGBA(0xefda49ff),
        Color::fromRGBA(0xfcde4aff),
        Color::fromRGBA(0xfadd4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfadd49ff),
        Color::fromRGBA(0xfbdf4aff),
        Color::fromRGBA(0xf8ce46ff),
        Color::fromRGBA(0xe6632dff),
        Color::fromRGBA(0xdb231eff),
        Color::fromRGBA(0xdb231eff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x059543ff),
        Color::fromRGBA(0x70b546ff),
        Color::fromRGBA(0xf0db49ff),
        Color::fromRGBA(0xfcde4aff),
        Color::fromRGBA(0xfadd4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfadd49ff),
        Color::fromRGBA(0xfbdf4aff),
        Color::fromRGBA(0xf8cc46ff),
        Color::fromRGBA(0xe6612dff),
        Color::fromRGBA(0xdb231eff),
        Color::fromRGBA(0xdb231eff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x059643ff),
        Color::fromRGBA(0x73b646ff),
        Color::fromRGBA(0xf1db49ff),
        Color::fromRGBA(0xfcde4aff),
        Color::fromRGBA(0xfadd4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfadd49ff),
        Color::fromRGBA(0xfbdf4aff),
        Color::fromRGBA(0xf7cb45ff),
        Color::fromRGBA(0xe55f2cff),
        Color::fromRGBA(0xdb221eff),
        Color::fromRGBA(0xdb231eff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x069643ff),
        Color::fromRGBA(0x76b746ff),
        Color::fromRGBA(0xf2db49ff),
        Color::fromRGBA(0xfcde4aff),
        Color::fromRGBA(0xfadd4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfadd49ff),
        Color::fromRGBA(0xfbdf4aff),
        Color::fromRGBA(0xf7ca45ff),
        Color::fromRGBA(0xe55d2cff),
        Color::fromRGBA(0xdb221eff),
        Color::fromRGBA(0xdb231eff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x079643ff),
        Color::fromRGBA(0x79b846ff),
        Color::fromRGBA(0xf3db49ff),
        Color::fromRGBA(0xfcde4aff),
        Color::fromRGBA(0xfadd4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfadd49ff),
        Color::fromRGBA(0xfbe04aff),
        Color::fromRGBA(0xf7c945ff),
        Color::fromRGBA(0xe55b2bff),
        Color::fromRGBA(0xdb221eff),
        Color::fromRGBA(0xdb231eff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0xdc241fff),
        Color::fromRGBA(0x0b9743ff),
        Color::fromRGBA(0x7cb946ff),
        Color::fromRGBA(0xf4dc49ff),
        Color::fromRGBA(0xfcde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbde4aff),
        Color::fromRGBA(0xfbdf4aff),
        Color::fromRGBA(0xf7c644ff),
        Color::fromRGBA(0xe4582bff),
        Color::fromRGBA(0xdb221eff),
        Color::fromRGBA(0xdb231eff),
        Color::fromRGBA(0xdc231eff),
        Color::fromRGBA(0xdc231eff),
        Color::fromRGBA(0xdc231eff),
        Color::fromRGBA(0xdc231eff),
        Color::fromRGBA(0xdc231eff),
        Color::fromRGBA(0xdc231eff),
        Color::fromRGBA(0xdc231eff),
        Color::fromRGBA(0xdc231eff),
        Color::fromRGBA(0xdc231eff),
        Color::fromRGBA(0xdc231eff),
        Color::fromRGBA(0xdc231eff),
        Color::fromRGBA(0xdc231eff),
        Color::fromRGBA(0xdc231eff),
        Color::fromRGBA(0xdc231eff),
        Color::fromRGBA(0xdc231eff),
        Color::fromRGBA(0xdc231eff),
        Color::fromRGBA(0xdc231eff),
        Color::fromRGBA(0x7cb946ff),
        Color::fromRGBA(0xefda49ff),
        Color::fromRGBA(0xf9dd49ff),
        Color::fromRGBA(0xf7dd49ff),
        Color::fromRGBA(0xf7dd49ff),
        Color::fromRGBA(0xf7dd49ff),
        Color::fromRGBA(0xf7dd49ff),
        Color::fromRGBA(0xf7dd49ff),
        Color::fromRGBA(0xf7dd49ff),
        Color::fromRGBA(0xf8de4aff),
        Color::fromRGBA(0xf6cf46ff),
        Color::fromRGBA(0xe5612dff),
        Color::fromRGBA(0xdb241fff),
        Color::fromRGBA(0xdb261fff),
        Color::fromRGBA(0xdb261fff),
        Color::fromRGBA(0xdb261fff),
        Color::fromRGBA(0xdb261fff),
        Color::fromRGBA(0xdb261fff),
        Color::fromRGBA(0xdb261fff),
        Color::fromRGBA(0xdb261fff),
        Color::fromRGBA(0xdb261fff),
        Color::fromRGBA(0xdb261fff),
        Color::fromRGBA(0xdb261fff),
        Color::fromRGBA(0xdb261fff),
        Color::fromRGBA(0xdb261fff),
        Color::fromRGBA(0xdb261fff),
        Color::fromRGBA(0xdb261fff),
        Color::fromRGBA(0xdb261fff),
        Color::fromRGBA(0xdb261fff),
        Color::fromRGBA(0xdb261fff),
        Color::fromRGBA(0xdb261fff),
        Color::fromRGBA(0xdb261fff)
    ],
];

$img = new Image(16, 11);
$img->append($pixels['16x11'], new Size(16, 11));
$img->append($pixels['32x21'], new Size(32, 21));

return $img;
