<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x11' => [
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdf8f9ff),
        Color::fromRGBA(0xf7d9dfff),
        Color::fromRGBA(0xf5d0d7ff),
        Color::fromRGBA(0xfbecefff),
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
        Color::fromRGBA(0xf9e1e6ff),
        Color::fromRGBA(0xe16880ff),
        Color::fromRGBA(0xd42346ff),
        Color::fromRGBA(0xd31b40ff),
        Color::fromRGBA(0xd93e5dff),
        Color::fromRGBA(0xefb0bcff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdf4f6ff),
        Color::fromRGBA(0xe05f78ff),
        Color::fromRGBA(0xcf072fff),
        Color::fromRGBA(0xcf0a31ff),
        Color::fromRGBA(0xcf0a32ff),
        Color::fromRGBA(0xcf082fff),
        Color::fromRGBA(0xd42144ff),
        Color::fromRGBA(0xf3c3cdff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf3c4ceff),
        Color::fromRGBA(0xd1143aff),
        Color::fromRGBA(0xcf072fff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xce042cff),
        Color::fromRGBA(0xe26a82ff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe7869aff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78598ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78598ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78598ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xce052dff),
        Color::fromRGBA(0xda4462ff),
        Color::fromRGBA(0xfcf2f4ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xec9eadff),
        Color::fromRGBA(0xcf0931ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xd1153bff),
        Color::fromRGBA(0xeeabb8ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfae8ebff),
        Color::fromRGBA(0xdb4664ff),
        Color::fromRGBA(0xcf0930ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xcf0a31ff),
        Color::fromRGBA(0xd5284bff),
        Color::fromRGBA(0xeda2b1ff),
        Color::fromRGBA(0xfae7ebff),
        Color::fromRGBA(0xfbeff1ff),
        Color::fromRGBA(0xf5ccd4ff),
        Color::fromRGBA(0xdf5a74ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0a31ff),
        Color::fromRGBA(0xd11137ff),
        Color::fromRGBA(0xd73152ff),
        Color::fromRGBA(0xd93a5aff),
        Color::fromRGBA(0xd31e42ff),
        Color::fromRGBA(0xcf0931ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xd00f36ff),
        Color::fromRGBA(0xd00f36ff),
        Color::fromRGBA(0xd00f36ff),
        Color::fromRGBA(0xd01036ff),
        Color::fromRGBA(0xd00f35ff),
        Color::fromRGBA(0xd00d34ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00f36ff),
        Color::fromRGBA(0xd00f36ff),
        Color::fromRGBA(0xd00f36ff),
        Color::fromRGBA(0xd00f36ff),
        Color::fromRGBA(0xd00f36ff),
        Color::fromRGBA(0xd00f36ff),
        Color::fromRGBA(0xd00f36ff),
        Color::fromRGBA(0xd00f36ff)
    ],
    '32x21' => [
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfbeef0ff),
        Color::fromRGBA(0xf2bfc9ff),
        Color::fromRGBA(0xea97a7ff),
        Color::fromRGBA(0xe88a9cff),
        Color::fromRGBA(0xeb9aaaff),
        Color::fromRGBA(0xf3c4ceff),
        Color::fromRGBA(0xfcf2f4ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdf9faff),
        Color::fromRGBA(0xeeabb8ff),
        Color::fromRGBA(0xda4361ff),
        Color::fromRGBA(0xd1153aff),
        Color::fromRGBA(0xcf0a31ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0a32ff),
        Color::fromRGBA(0xd2173cff),
        Color::fromRGBA(0xdc4b68ff),
        Color::fromRGBA(0xf1b7c3ff),
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
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdf7f8ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xd1153aff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf082fff),
        Color::fromRGBA(0xd21b3fff),
        Color::fromRGBA(0xea97a7ff),
        Color::fromRGBA(0xfefbfbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
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
        Color::fromRGBA(0xec9eadff),
        Color::fromRGBA(0xd11238ff),
        Color::fromRGBA(0xcf0a31ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xcf0931ff),
        Color::fromRGBA(0xd2193eff),
        Color::fromRGBA(0xf0b1beff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf9e1e6ff),
        Color::fromRGBA(0xd73252ff),
        Color::fromRGBA(0xcf0930ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xda4260ff),
        Color::fromRGBA(0xfbecefff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xeda2b1ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xd11238ff),
        Color::fromRGBA(0xf1b8c3ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xe37289ff),
        Color::fromRGBA(0xce042cff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xce052dff),
        Color::fromRGBA(0xe88a9dff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78598ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78699ff),
        Color::fromRGBA(0xe78397ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78397ff),
        Color::fromRGBA(0xe78699ff),
        Color::fromRGBA(0xe78498ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78599ff),
        Color::fromRGBA(0xe78598ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf072fff),
        Color::fromRGBA(0xeb98a8ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xe68094ff),
        Color::fromRGBA(0xce052dff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xcf082fff),
        Color::fromRGBA(0xe16880ff),
        Color::fromRGBA(0xfefcfdff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdf7f9ff),
        Color::fromRGBA(0xdd526eff),
        Color::fromRGBA(0xcf082fff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xcf0a31ff),
        Color::fromRGBA(0xd5294bff),
        Color::fromRGBA(0xf7d8dfff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf4c8d0ff),
        Color::fromRGBA(0xd31d41ff),
        Color::fromRGBA(0xcf0a32ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0a31ff),
        Color::fromRGBA(0xe26c84ff),
        Color::fromRGBA(0xfdf7f8ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfcf0f2ff),
        Color::fromRGBA(0xde5973ff),
        Color::fromRGBA(0xcf0930ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xd11137ff),
        Color::fromRGBA(0xe78598ff),
        Color::fromRGBA(0xfcf4f5ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfbeef0ff),
        Color::fromRGBA(0xe47389ff),
        Color::fromRGBA(0xd00e34ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xcf0a32ff),
        Color::fromRGBA(0xd01036ff),
        Color::fromRGBA(0xe05f78ff),
        Color::fromRGBA(0xf4c6cfff),
        Color::fromRGBA(0xfdf5f6ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfcf2f4ff),
        Color::fromRGBA(0xf2bdc8ff),
        Color::fromRGBA(0xdd526eff),
        Color::fromRGBA(0xd00d34ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0930ff),
        Color::fromRGBA(0xd31c40ff),
        Color::fromRGBA(0xdc4b68ff),
        Color::fromRGBA(0xe37389ff),
        Color::fromRGBA(0xe68094ff),
        Color::fromRGBA(0xe36f86ff),
        Color::fromRGBA(0xdb4563ff),
        Color::fromRGBA(0xd2183dff),
        Color::fromRGBA(0xcf0930ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xcf0a32ff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf082fff),
        Color::fromRGBA(0xcf082fff),
        Color::fromRGBA(0xcf082fff),
        Color::fromRGBA(0xcf0830ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xd00c33ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xcf0b32ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff),
        Color::fromRGBA(0xd00e35ff)
    ],
];

$img = new Image(16, 11);
$img->append($pixels['16x11'], new Size(16, 11));
$img->append($pixels['32x21'], new Size(32, 21));

return $img;
