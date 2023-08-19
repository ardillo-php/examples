<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x11' => [
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfdfdfbff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdfdfcff),
        Color::fromRGBA(0xfefefdff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfdfcfbff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfdfdfbff),
        Color::fromRGBA(0xead9a7ff),
        Color::fromRGBA(0xebd8a0ff),
        Color::fromRGBA(0xf2e9cfff),
        Color::fromRGBA(0xfaf7efff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfbfaf8ff),
        Color::fromRGBA(0xe5d4a0ff),
        Color::fromRGBA(0xf2e4bdff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfaf7efff),
        Color::fromRGBA(0xf2e9ceff),
        Color::fromRGBA(0xebd8a0ff),
        Color::fromRGBA(0xead9a8ff),
        Color::fromRGBA(0xfdfdfbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf1e7caff),
        Color::fromRGBA(0xdbb853ff),
        Color::fromRGBA(0xd7af3dff),
        Color::fromRGBA(0xe5c25dff),
        Color::fromRGBA(0xecd8a0ff),
        Color::fromRGBA(0xefeee9ff),
        Color::fromRGBA(0xdec170ff),
        Color::fromRGBA(0xe1c576ff),
        Color::fromRGBA(0xf1f0edff),
        Color::fromRGBA(0xecd89fff),
        Color::fromRGBA(0xe5c25dff),
        Color::fromRGBA(0xd6af3cff),
        Color::fromRGBA(0xdbb853ff),
        Color::fromRGBA(0xf1e7caff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfbfcfdff),
        Color::fromRGBA(0xf9fbfcff),
        Color::fromRGBA(0xeee9d5ff),
        Color::fromRGBA(0xd9bd6bff),
        Color::fromRGBA(0xd7ad34ff),
        Color::fromRGBA(0xd6b248ff),
        Color::fromRGBA(0x676b7dff),
        Color::fromRGBA(0x424761ff),
        Color::fromRGBA(0x424863ff),
        Color::fromRGBA(0x686b7fff),
        Color::fromRGBA(0xd6b248ff),
        Color::fromRGBA(0xd7ad34ff),
        Color::fromRGBA(0xddc06eff),
        Color::fromRGBA(0xf4ecd8ff),
        Color::fromRGBA(0xf9fbfdff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xe4eef4ff),
        Color::fromRGBA(0xb0d0e1ff),
        Color::fromRGBA(0xadcdddff),
        Color::fromRGBA(0xa8c0a7ff),
        Color::fromRGBA(0xcbbd7aff),
        Color::fromRGBA(0xd5ae40ff),
        Color::fromRGBA(0x795e64ff),
        Color::fromRGBA(0x5d4472ff),
        Color::fromRGBA(0x5e4573ff),
        Color::fromRGBA(0x7a5f64ff),
        Color::fromRGBA(0xd4ae3fff),
        Color::fromRGBA(0xd2c389ff),
        Color::fromRGBA(0xdbe4e2ff),
        Color::fromRGBA(0xfbfcfdff),
        Color::fromRGBA(0xb6d3e3ff),
        Color::fromRGBA(0xf1f6f9ff),
        Color::fromRGBA(0xf7fafcff),
        Color::fromRGBA(0x86b9d5ff),
        Color::fromRGBA(0x9ec6daff),
        Color::fromRGBA(0x98b79dff),
        Color::fromRGBA(0xa8bfa5ff),
        Color::fromRGBA(0xeadcb4ff),
        Color::fromRGBA(0xc28b7bff),
        Color::fromRGBA(0xb86f85ff),
        Color::fromRGBA(0xb86f85ff),
        Color::fromRGBA(0xc28b7bff),
        Color::fromRGBA(0xe6dab3ff),
        Color::fromRGBA(0x8bb5c8ff),
        Color::fromRGBA(0x83b4cfff),
        Color::fromRGBA(0xeff4f7ff),
        Color::fromRGBA(0xa5c9deff),
        Color::fromRGBA(0xeef5f8ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xb3d3e4ff),
        Color::fromRGBA(0xcde2eeff),
        Color::fromRGBA(0xbfd2c0ff),
        Color::fromRGBA(0x72a07aff),
        Color::fromRGBA(0xd1cc9eff),
        Color::fromRGBA(0xcea65bff),
        Color::fromRGBA(0xb57676ff),
        Color::fromRGBA(0xb67776ff),
        Color::fromRGBA(0xcea65aff),
        Color::fromRGBA(0xe1d8b3ff),
        Color::fromRGBA(0x87b1c9ff),
        Color::fromRGBA(0xb6d1e0ff),
        Color::fromRGBA(0xf8fafcff),
        Color::fromRGBA(0xbad5e4ff),
        Color::fromRGBA(0xf2f7f9ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfcfdfdff),
        Color::fromRGBA(0xfefeffff),
        Color::fromRGBA(0xebf1edff),
        Color::fromRGBA(0xa1b181ff),
        Color::fromRGBA(0xc6bf84ff),
        Color::fromRGBA(0xd9bd6dff),
        Color::fromRGBA(0xc69c3bff),
        Color::fromRGBA(0xc69c3bff),
        Color::fromRGBA(0xd9bd6dff),
        Color::fromRGBA(0xc5bf94ff),
        Color::fromRGBA(0xb7c2b2ff),
        Color::fromRGBA(0xfbfdfeff),
        Color::fromRGBA(0xfffffeff),
        Color::fromRGBA(0xfbfcfdff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf1f1e8ff),
        Color::fromRGBA(0xd5e1d2ff),
        Color::fromRGBA(0xece2c2ff),
        Color::fromRGBA(0xdbb851ff),
        Color::fromRGBA(0xddb952ff),
        Color::fromRGBA(0xcbd0b9ff),
        Color::fromRGBA(0x4f99beff),
        Color::fromRGBA(0xd2dfe0ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfdfdfdff),
        Color::fromRGBA(0xfefefdff),
        Color::fromRGBA(0xf5efdcff),
        Color::fromRGBA(0xf7f0ddff),
        Color::fromRGBA(0xdeebf1ff),
        Color::fromRGBA(0x94bfd7ff),
        Color::fromRGBA(0xedf4f8ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfffffffa),
        Color::fromRGBA(0xfffffffa),
        Color::fromRGBA(0xfffffffa),
        Color::fromRGBA(0xfffffffa),
        Color::fromRGBA(0xfffffffa),
        Color::fromRGBA(0xfffffffa),
        Color::fromRGBA(0xfffffffa),
        Color::fromRGBA(0xfffffffa),
        Color::fromRGBA(0xfffffffa),
        Color::fromRGBA(0xfffffffa),
        Color::fromRGBA(0xfefefefa),
        Color::fromRGBA(0xfefefefa),
        Color::fromRGBA(0xfffffffa),
        Color::fromRGBA(0xfffffffa),
        Color::fromRGBA(0xfffffffa),
        Color::fromRGBA(0xfffffffa)
    ],
    '32x21' => [
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
        Color::fromRGBA(0xfdfdfeff),
        Color::fromRGBA(0xfefeffff),
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
        Color::fromRGBA(0xfefeffff),
        Color::fromRGBA(0xfeffffff),
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
        Color::fromRGBA(0xfefeffff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xe9dcb4ff),
        Color::fromRGBA(0xe8d49aff),
        Color::fromRGBA(0xf1e8d0ff),
        Color::fromRGBA(0xf8f6f0ff),
        Color::fromRGBA(0xfdfdfeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdfdfcff),
        Color::fromRGBA(0xeee8d6ff),
        Color::fromRGBA(0xe1cc90ff),
        Color::fromRGBA(0xebddb2ff),
        Color::fromRGBA(0xfcfcfbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdfdfeff),
        Color::fromRGBA(0xf8f6f0ff),
        Color::fromRGBA(0xf1e8d0ff),
        Color::fromRGBA(0xe8d49aff),
        Color::fromRGBA(0xe9dcb5ff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xe9ddbcff),
        Color::fromRGBA(0xd8af3bff),
        Color::fromRGBA(0xdeb641ff),
        Color::fromRGBA(0xe1c060ff),
        Color::fromRGBA(0xdfc886ff),
        Color::fromRGBA(0xe6d8adff),
        Color::fromRGBA(0xf2ebd7ff),
        Color::fromRGBA(0xf9f7f3ff),
        Color::fromRGBA(0xfefeffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf4f2ebff),
        Color::fromRGBA(0xd5c38dff),
        Color::fromRGBA(0xcfa838ff),
        Color::fromRGBA(0xe5be4dff),
        Color::fromRGBA(0xf4efe1ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefeffff),
        Color::fromRGBA(0xf9f7f3ff),
        Color::fromRGBA(0xf2ebd7ff),
        Color::fromRGBA(0xe6d8adff),
        Color::fromRGBA(0xe0c886ff),
        Color::fromRGBA(0xe1c060ff),
        Color::fromRGBA(0xdeb641ff),
        Color::fromRGBA(0xd8af3bff),
        Color::fromRGBA(0xe9debcff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfaf9f6ff),
        Color::fromRGBA(0xdfca8cff),
        Color::fromRGBA(0xd5ad3aff),
        Color::fromRGBA(0xd8ad32ff),
        Color::fromRGBA(0xd3a932ff),
        Color::fromRGBA(0xd6ad36ff),
        Color::fromRGBA(0xe4bc48ff),
        Color::fromRGBA(0xe7c768ff),
        Color::fromRGBA(0xe5d19aff),
        Color::fromRGBA(0xf4eddcff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xece2c4ff),
        Color::fromRGBA(0xedc143ff),
        Color::fromRGBA(0xf0c33eff),
        Color::fromRGBA(0xeadebaff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf3eddcff),
        Color::fromRGBA(0xe5d19aff),
        Color::fromRGBA(0xe7c767ff),
        Color::fromRGBA(0xe4bc48ff),
        Color::fromRGBA(0xd6ad36ff),
        Color::fromRGBA(0xd3a932ff),
        Color::fromRGBA(0xd8ad32ff),
        Color::fromRGBA(0xd5ad3aff),
        Color::fromRGBA(0xdfca8dff),
        Color::fromRGBA(0xfaf9f6ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfafaf8ff),
        Color::fromRGBA(0xe2d09bff),
        Color::fromRGBA(0xd8b246ff),
        Color::fromRGBA(0xd7ad33ff),
        Color::fromRGBA(0xcfa733ff),
        Color::fromRGBA(0xdeb336ff),
        Color::fromRGBA(0xe8bb37ff),
        Color::fromRGBA(0xe1b535ff),
        Color::fromRGBA(0xe2c36aff),
        Color::fromRGBA(0xe2e2e2ff),
        Color::fromRGBA(0xebebe9ff),
        Color::fromRGBA(0xdbc073ff),
        Color::fromRGBA(0xd2ab3cff),
        Color::fromRGBA(0xd1aa3dff),
        Color::fromRGBA(0xdbc37dff),
        Color::fromRGBA(0xededeeff),
        Color::fromRGBA(0xe2e2e2ff),
        Color::fromRGBA(0xe2c369ff),
        Color::fromRGBA(0xe1b535ff),
        Color::fromRGBA(0xe9bb37ff),
        Color::fromRGBA(0xdeb336ff),
        Color::fromRGBA(0xcfa733ff),
        Color::fromRGBA(0xd7ad33ff),
        Color::fromRGBA(0xd8b247ff),
        Color::fromRGBA(0xe2d09bff),
        Color::fromRGBA(0xfafaf8ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xebe1c3ff),
        Color::fromRGBA(0xd8b95fff),
        Color::fromRGBA(0xd1a933ff),
        Color::fromRGBA(0xcea633ff),
        Color::fromRGBA(0xe0b538ff),
        Color::fromRGBA(0xe0b436ff),
        Color::fromRGBA(0xdebf67ff),
        Color::fromRGBA(0x636984ff),
        Color::fromRGBA(0x424d7bff),
        Color::fromRGBA(0x46485cff),
        Color::fromRGBA(0x2f375dff),
        Color::fromRGBA(0x2f365dff),
        Color::fromRGBA(0x474a61ff),
        Color::fromRGBA(0x44507fff),
        Color::fromRGBA(0x636983ff),
        Color::fromRGBA(0xdebf67ff),
        Color::fromRGBA(0xe0b436ff),
        Color::fromRGBA(0xe0b538ff),
        Color::fromRGBA(0xcea633ff),
        Color::fromRGBA(0xd1a833ff),
        Color::fromRGBA(0xd8b95fff),
        Color::fromRGBA(0xeae0c3ff),
        Color::fromRGBA(0xfdfdfcff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf5f7f8ff),
        Color::fromRGBA(0xe5edf1ff),
        Color::fromRGBA(0xfbfbfcff),
        Color::fromRGBA(0xf3f6f7ff),
        Color::fromRGBA(0xe8eff4ff),
        Color::fromRGBA(0xebe9ddff),
        Color::fromRGBA(0xd6c07dff),
        Color::fromRGBA(0xcca73cff),
        Color::fromRGBA(0xd0a833ff),
        Color::fromRGBA(0xdbb036ff),
        Color::fromRGBA(0xe7bc3fff),
        Color::fromRGBA(0x4f4e55ff),
        Color::fromRGBA(0x0c1f65ff),
        Color::fromRGBA(0x102266ff),
        Color::fromRGBA(0x112366ff),
        Color::fromRGBA(0x112366ff),
        Color::fromRGBA(0x102266ff),
        Color::fromRGBA(0x0c1f65ff),
        Color::fromRGBA(0x4f4e55ff),
        Color::fromRGBA(0xe7bc3fff),
        Color::fromRGBA(0xdbb036ff),
        Color::fromRGBA(0xd0a834ff),
        Color::fromRGBA(0xcba63bff),
        Color::fromRGBA(0xddc684ff),
        Color::fromRGBA(0xf4f0e5ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf1f5f7ff),
        Color::fromRGBA(0xeaf0f3ff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xdce7eeff),
        Color::fromRGBA(0x5c9fc4ff),
        Color::fromRGBA(0xe9eff3ff),
        Color::fromRGBA(0xacccdeff),
        Color::fromRGBA(0x7eb1ccff),
        Color::fromRGBA(0xbdd1c0ff),
        Color::fromRGBA(0x99b99bff),
        Color::fromRGBA(0xd2cdaaff),
        Color::fromRGBA(0xd2b152ff),
        Color::fromRGBA(0xd6ac32ff),
        Color::fromRGBA(0xdcb238ff),
        Color::fromRGBA(0x7d6a5eff),
        Color::fromRGBA(0x4c3b6aff),
        Color::fromRGBA(0x4f3e69ff),
        Color::fromRGBA(0x4f3e69ff),
        Color::fromRGBA(0x503e6aff),
        Color::fromRGBA(0x4f3e6aff),
        Color::fromRGBA(0x4d3c6aff),
        Color::fromRGBA(0x7d6b5eff),
        Color::fromRGBA(0xdcb238ff),
        Color::fromRGBA(0xd6ac32ff),
        Color::fromRGBA(0xd1b051ff),
        Color::fromRGBA(0xe9ddbfff),
        Color::fromRGBA(0xeef0f0ff),
        Color::fromRGBA(0xeef2f5ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xb5d1e0ff),
        Color::fromRGBA(0x7cb0ccff),
        Color::fromRGBA(0xfdfdfdff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8fafbff),
        Color::fromRGBA(0x61a5caff),
        Color::fromRGBA(0xbad5e4ff),
        Color::fromRGBA(0x78b2d1ff),
        Color::fromRGBA(0xa2c7d7ff),
        Color::fromRGBA(0x91b594ff),
        Color::fromRGBA(0x63926aff),
        Color::fromRGBA(0xaac2b0ff),
        Color::fromRGBA(0xe7d8b1ff),
        Color::fromRGBA(0xdab64eff),
        Color::fromRGBA(0xd6af39ff),
        Color::fromRGBA(0xc39672ff),
        Color::fromRGBA(0xb56c84ff),
        Color::fromRGBA(0xb66f84ff),
        Color::fromRGBA(0xb76f84ff),
        Color::fromRGBA(0xb76f84ff),
        Color::fromRGBA(0xb66f84ff),
        Color::fromRGBA(0xb56c84ff),
        Color::fromRGBA(0xc39672ff),
        Color::fromRGBA(0xd6af39ff),
        Color::fromRGBA(0xdbb74eff),
        Color::fromRGBA(0xd5cda9ff),
        Color::fromRGBA(0xb7cfddff),
        Color::fromRGBA(0x7eb4d2ff),
        Color::fromRGBA(0xd2e1e9ff),
        Color::fromRGBA(0xfdfdfdff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xb1d1e2ff),
        Color::fromRGBA(0x71adceff),
        Color::fromRGBA(0xfffefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x9cc6dcff),
        Color::fromRGBA(0x63a4c7ff),
        Color::fromRGBA(0x5ba0c6ff),
        Color::fromRGBA(0xe5eef4ff),
        Color::fromRGBA(0xbdd0bfff),
        Color::fromRGBA(0x68946eff),
        Color::fromRGBA(0x7ca181ff),
        Color::fromRGBA(0xdfe6e0ff),
        Color::fromRGBA(0xf3eee0ff),
        Color::fromRGBA(0xe9debbff),
        Color::fromRGBA(0xc29a83ff),
        Color::fromRGBA(0xb3697eff),
        Color::fromRGBA(0xb77086ff),
        Color::fromRGBA(0xb77086ff),
        Color::fromRGBA(0xb77086ff),
        Color::fromRGBA(0xb77086ff),
        Color::fromRGBA(0xb3697eff),
        Color::fromRGBA(0xc29a83ff),
        Color::fromRGBA(0xe9debbff),
        Color::fromRGBA(0xf4eedfff),
        Color::fromRGBA(0x98c2d9ff),
        Color::fromRGBA(0x4b92b8ff),
        Color::fromRGBA(0x5297bdff),
        Color::fromRGBA(0x9cc0d4ff),
        Color::fromRGBA(0xe9eff2ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xb1d1e2ff),
        Color::fromRGBA(0x72adceff),
        Color::fromRGBA(0xfffefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xdae8efff),
        Color::fromRGBA(0x2687bcff),
        Color::fromRGBA(0x6dacceff),
        Color::fromRGBA(0xfdfdfeff),
        Color::fromRGBA(0xe0e8e1ff),
        Color::fromRGBA(0x79a27fff),
        Color::fromRGBA(0x5c8f63ff),
        Color::fromRGBA(0xaac2aeff),
        Color::fromRGBA(0xfbfcfdff),
        Color::fromRGBA(0xf1e9d3ff),
        Color::fromRGBA(0xd5ac52ff),
        Color::fromRGBA(0xbf8773ff),
        Color::fromRGBA(0xb66d85ff),
        Color::fromRGBA(0xb77086ff),
        Color::fromRGBA(0xb77086ff),
        Color::fromRGBA(0xb66d85ff),
        Color::fromRGBA(0xbf8773ff),
        Color::fromRGBA(0xd6ac52ff),
        Color::fromRGBA(0xf0e9d3ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x93b9ceff),
        Color::fromRGBA(0x5e96b4ff),
        Color::fromRGBA(0x629ebeff),
        Color::fromRGBA(0x6eaccdff),
        Color::fromRGBA(0xf9fbfbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xb1d1e2ff),
        Color::fromRGBA(0x71adceff),
        Color::fromRGBA(0xfffefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf6f8f9ff),
        Color::fromRGBA(0x5fa3c7ff),
        Color::fromRGBA(0xa9cbddff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf4f6f5ff),
        Color::fromRGBA(0x91b296ff),
        Color::fromRGBA(0x538d5bff),
        Color::fromRGBA(0x709d78ff),
        Color::fromRGBA(0xd1dcd4ff),
        Color::fromRGBA(0xe2c77bff),
        Color::fromRGBA(0xd8ae34ff),
        Color::fromRGBA(0xc7a35fff),
        Color::fromRGBA(0xb17575ff),
        Color::fromRGBA(0xb66e86ff),
        Color::fromRGBA(0xb66e86ff),
        Color::fromRGBA(0xb17475ff),
        Color::fromRGBA(0xc7a35fff),
        Color::fromRGBA(0xd8ae34ff),
        Color::fromRGBA(0xe0c67aff),
        Color::fromRGBA(0xfbfbfcff),
        Color::fromRGBA(0x84adc4ff),
        Color::fromRGBA(0x72a2bcff),
        Color::fromRGBA(0xa3c5d6ff),
        Color::fromRGBA(0xe3ecf1ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xb6d1e0ff),
        Color::fromRGBA(0x7fb2cdff),
        Color::fromRGBA(0xfdfdfdff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdfdfdff),
        Color::fromRGBA(0xedf1f4ff),
        Color::fromRGBA(0xf4f7f8ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xbccebfff),
        Color::fromRGBA(0x578f5fff),
        Color::fromRGBA(0x548951ff),
        Color::fromRGBA(0x9caa7cff),
        Color::fromRGBA(0xceae53ff),
        Color::fromRGBA(0xd2b666ff),
        Color::fromRGBA(0xd1b666ff),
        Color::fromRGBA(0xba933dff),
        Color::fromRGBA(0xb37b61ff),
        Color::fromRGBA(0xb37b60ff),
        Color::fromRGBA(0xba933cff),
        Color::fromRGBA(0xd1b667ff),
        Color::fromRGBA(0xd2b665ff),
        Color::fromRGBA(0xceae53ff),
        Color::fromRGBA(0xe0dac0ff),
        Color::fromRGBA(0x598da4ff),
        Color::fromRGBA(0x8bb4cbff),
        Color::fromRGBA(0xf5f8faff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf4f6f8ff),
        Color::fromRGBA(0xedf2f5ff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf1f3f1ff),
        Color::fromRGBA(0xa9bda4ff),
        Color::fromRGBA(0xa69b3fff),
        Color::fromRGBA(0xcbb458ff),
        Color::fromRGBA(0xece1c3ff),
        Color::fromRGBA(0xdbca98ff),
        Color::fromRGBA(0xd5ac35ff),
        Color::fromRGBA(0xd0a733ff),
        Color::fromRGBA(0xc5a033ff),
        Color::fromRGBA(0xc59f33ff),
        Color::fromRGBA(0xd0a732ff),
        Color::fromRGBA(0xd5ac35ff),
        Color::fromRGBA(0xdbca99ff),
        Color::fromRGBA(0xece1c2ff),
        Color::fromRGBA(0xccb462ff),
        Color::fromRGBA(0xa79d5aff),
        Color::fromRGBA(0xe6e9e5ff),
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
        Color::fromRGBA(0xfbf9f7ff),
        Color::fromRGBA(0xd1cba2ff),
        Color::fromRGBA(0x8dae7dff),
        Color::fromRGBA(0xedf3f0ff),
        Color::fromRGBA(0xece4ceff),
        Color::fromRGBA(0xd1af4dff),
        Color::fromRGBA(0xd7ad33ff),
        Color::fromRGBA(0xdab036ff),
        Color::fromRGBA(0xdab036ff),
        Color::fromRGBA(0xd7ad33ff),
        Color::fromRGBA(0xd1af4eff),
        Color::fromRGBA(0xeee5cfff),
        Color::fromRGBA(0xbcd6e6ff),
        Color::fromRGBA(0x468398ff),
        Color::fromRGBA(0xbcbda3ff),
        Color::fromRGBA(0xfbf9f6ff),
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
        Color::fromRGBA(0xfefeffff),
        Color::fromRGBA(0xbbd3bfff),
        Color::fromRGBA(0xd2e0d4ff),
        Color::fromRGBA(0xfefeffff),
        Color::fromRGBA(0xe7ddc0ff),
        Color::fromRGBA(0xd7b34eff),
        Color::fromRGBA(0xdeb337ff),
        Color::fromRGBA(0xdeb337ff),
        Color::fromRGBA(0xd7b34eff),
        Color::fromRGBA(0xe9dec1ff),
        Color::fromRGBA(0xc3dcebff),
        Color::fromRGBA(0x228bc4ff),
        Color::fromRGBA(0x0973acff),
        Color::fromRGBA(0xc6dae6ff),
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
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xeee7d2ff),
        Color::fromRGBA(0xe2ca87ff),
        Color::fromRGBA(0xe2ca87ff),
        Color::fromRGBA(0xefe7d2ff),
        Color::fromRGBA(0xfbfcfcff),
        Color::fromRGBA(0x91bdd5ff),
        Color::fromRGBA(0x1378b0ff),
        Color::fromRGBA(0x2781b1ff),
        Color::fromRGBA(0xdfeaf0ff),
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
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfbfbf8ff),
        Color::fromRGBA(0xfbfbf8ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefeffff),
        Color::fromRGBA(0xf3f6f7ff),
        Color::fromRGBA(0xc5d6e0ff),
        Color::fromRGBA(0xbcd3dfff),
        Color::fromRGBA(0xf7f9faff),
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
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffc),
        Color::fromRGBA(0xfffffffb)
    ],
];

$img = new Image(16, 11);
$img->append($pixels['16x11'], new Size(16, 11));
$img->append($pixels['32x21'], new Size(32, 21));

return $img;
