<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x11' => [
        Color::fromRGBA(0x032596ff),
        Color::fromRGBA(0x13339cff),
        Color::fromRGBA(0xc8d0e8ff),
        Color::fromRGBA(0xfdf9faff),
        Color::fromRGBA(0xf06a76ff),
        Color::fromRGBA(0xef2a39ff),
        Color::fromRGBA(0x7a3b7afe),
        Color::fromRGBA(0x002397fd),
        Color::fromRGBA(0x002395fd),
        Color::fromRGBA(0x002395fd),
        Color::fromRGBA(0x002395fd),
        Color::fromRGBA(0x002395fd),
        Color::fromRGBA(0x002395fd),
        Color::fromRGBA(0x002395fd),
        Color::fromRGBA(0x002395fd),
        Color::fromRGBA(0x002395fd),
        Color::fromRGBA(0x002194ff),
        Color::fromRGBA(0x0f309bff),
        Color::fromRGBA(0xcbd2e9ff),
        Color::fromRGBA(0xfffdfcff),
        Color::fromRGBA(0xf26974ff),
        Color::fromRGBA(0xef2635ff),
        Color::fromRGBA(0x793a79ff),
        Color::fromRGBA(0x002397ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002194ff),
        Color::fromRGBA(0x0f309bff),
        Color::fromRGBA(0xcbd2e9ff),
        Color::fromRGBA(0xfffdfcff),
        Color::fromRGBA(0xf26974ff),
        Color::fromRGBA(0xef2735ff),
        Color::fromRGBA(0x793a79ff),
        Color::fromRGBA(0x002397ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x012395ff),
        Color::fromRGBA(0x11329cff),
        Color::fromRGBA(0xcbd3eaff),
        Color::fromRGBA(0xfffdfcff),
        Color::fromRGBA(0xf56b75ff),
        Color::fromRGBA(0xf32936ff),
        Color::fromRGBA(0x7b3b79ff),
        Color::fromRGBA(0x002397ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002194ff),
        Color::fromRGBA(0x002194ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002295ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x18379fff),
        Color::fromRGBA(0x1f3da1ff),
        Color::fromRGBA(0x6d81c2ff),
        Color::fromRGBA(0x8393caff),
        Color::fromRGBA(0x7d5591ff),
        Color::fromRGBA(0x7c3a77ff),
        Color::fromRGBA(0x3f378eff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002194ff),
        Color::fromRGBA(0x0d2e9aff),
        Color::fromRGBA(0x1e3ca1ff),
        Color::fromRGBA(0x1c3ba0ff),
        Color::fromRGBA(0x12329cff),
        Color::fromRGBA(0x002194ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x012495ff),
        Color::fromRGBA(0x012395ff),
        Color::fromRGBA(0x002194ff),
        Color::fromRGBA(0x002093ff),
        Color::fromRGBA(0x002296ff),
        Color::fromRGBA(0x002497ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x0f309bff),
        Color::fromRGBA(0x314ea9ff),
        Color::fromRGBA(0x8999ceff),
        Color::fromRGBA(0xadb8ddff),
        Color::fromRGBA(0x465fb2ff),
        Color::fromRGBA(0x14349dff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002295ff),
        Color::fromRGBA(0x002194ff),
        Color::fromRGBA(0x2a47a6ff),
        Color::fromRGBA(0x3a55adff),
        Color::fromRGBA(0x6b7fc1ff),
        Color::fromRGBA(0xa8b4dbff),
        Color::fromRGBA(0x4861b3ff),
        Color::fromRGBA(0x3450aaff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x022595ff),
        Color::fromRGBA(0x697dc0ff),
        Color::fromRGBA(0xbcc5e3ff),
        Color::fromRGBA(0xc4cce6ff),
        Color::fromRGBA(0x7f90c9ff),
        Color::fromRGBA(0x0b2c99ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x012395ff),
        Color::fromRGBA(0x2e4ba8ff),
        Color::fromRGBA(0x556cb8ff),
        Color::fromRGBA(0x6076bdff),
        Color::fromRGBA(0x3651abff),
        Color::fromRGBA(0x052797ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002194ff),
        Color::fromRGBA(0x1d3ca1ff),
        Color::fromRGBA(0x2c49a7ff),
        Color::fromRGBA(0x2e4ba8ff),
        Color::fromRGBA(0x2341a3ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395fd),
        Color::fromRGBA(0x002395fd),
        Color::fromRGBA(0x002395fd),
        Color::fromRGBA(0x002395fd),
        Color::fromRGBA(0x002395fd),
        Color::fromRGBA(0x002395fd),
        Color::fromRGBA(0x002395fd),
        Color::fromRGBA(0x002395fd),
        Color::fromRGBA(0x002395fd),
        Color::fromRGBA(0x002093fd),
        Color::fromRGBA(0x15349dfd),
        Color::fromRGBA(0x1e3da1fd),
        Color::fromRGBA(0x002093fd),
        Color::fromRGBA(0x002294fd),
        Color::fromRGBA(0x002395fd),
        Color::fromRGBA(0x002395fd)
    ],
    '32x21' => [
        Color::fromRGBA(0x032596ff),
        Color::fromRGBA(0x032596ff),
        Color::fromRGBA(0x032596ff),
        Color::fromRGBA(0x072998ff),
        Color::fromRGBA(0xb1bbdeff),
        Color::fromRGBA(0xfcfcfdff),
        Color::fromRGBA(0xfbfcfdff),
        Color::fromRGBA(0xfbfcfdff),
        Color::fromRGBA(0xf49aa2ff),
        Color::fromRGBA(0xec2939ff),
        Color::fromRGBA(0xec2b3bff),
        Color::fromRGBA(0xee2a39ff),
        Color::fromRGBA(0xd3465fff),
        Color::fromRGBA(0x20379bfe),
        Color::fromRGBA(0x002194fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x042796ff),
        Color::fromRGBA(0xb2bcdfff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf69aa1ff),
        Color::fromRGBA(0xec2636ff),
        Color::fromRGBA(0xed2838ff),
        Color::fromRGBA(0xee2736ff),
        Color::fromRGBA(0xd4445dff),
        Color::fromRGBA(0x20379bff),
        Color::fromRGBA(0x002194ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x042797ff),
        Color::fromRGBA(0xb2bcdfff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf69aa1ff),
        Color::fromRGBA(0xec2636ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xee2736ff),
        Color::fromRGBA(0xd4445dff),
        Color::fromRGBA(0x20379bff),
        Color::fromRGBA(0x002194ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x042797ff),
        Color::fromRGBA(0xb2bcdfff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf69aa1ff),
        Color::fromRGBA(0xec2636ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xee2736ff),
        Color::fromRGBA(0xd4445dff),
        Color::fromRGBA(0x20379bff),
        Color::fromRGBA(0x002194ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x042797ff),
        Color::fromRGBA(0xb2bcdfff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf69aa1ff),
        Color::fromRGBA(0xec2636ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xee2736ff),
        Color::fromRGBA(0xd4445dff),
        Color::fromRGBA(0x20379bff),
        Color::fromRGBA(0x002194ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x042797ff),
        Color::fromRGBA(0xb2bcdfff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf69aa1ff),
        Color::fromRGBA(0xec2636ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xee2736ff),
        Color::fromRGBA(0xd4445dff),
        Color::fromRGBA(0x20379bff),
        Color::fromRGBA(0x002194ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x042797ff),
        Color::fromRGBA(0xb2bcdfff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf69aa1ff),
        Color::fromRGBA(0xec2636ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xee2736ff),
        Color::fromRGBA(0xd4445dff),
        Color::fromRGBA(0x20379bff),
        Color::fromRGBA(0x002194ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x022596ff),
        Color::fromRGBA(0x022596ff),
        Color::fromRGBA(0x022596ff),
        Color::fromRGBA(0x072998ff),
        Color::fromRGBA(0xb6c0e0ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfa9da3ff),
        Color::fromRGBA(0xf12937ff),
        Color::fromRGBA(0xf12b39ff),
        Color::fromRGBA(0xf22a37ff),
        Color::fromRGBA(0xd7475eff),
        Color::fromRGBA(0x20389bff),
        Color::fromRGBA(0x002194ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x2e4ba8ff),
        Color::fromRGBA(0x2e4ba8ff),
        Color::fromRGBA(0x2e4ba8ff),
        Color::fromRGBA(0x304da9ff),
        Color::fromRGBA(0x798bc7ff),
        Color::fromRGBA(0x98a6d4ff),
        Color::fromRGBA(0x98a6d4ff),
        Color::fromRGBA(0x98a6d4ff),
        Color::fromRGBA(0x957dadff),
        Color::fromRGBA(0x914d81ff),
        Color::fromRGBA(0x914e82ff),
        Color::fromRGBA(0x924d81ff),
        Color::fromRGBA(0x81548fff),
        Color::fromRGBA(0x13309aff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002093ff),
        Color::fromRGBA(0x001f93ff),
        Color::fromRGBA(0x001f93ff),
        Color::fromRGBA(0x001f93ff),
        Color::fromRGBA(0x001f93ff),
        Color::fromRGBA(0x001f93ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x032696ff),
        Color::fromRGBA(0x032696ff),
        Color::fromRGBA(0x032696ff),
        Color::fromRGBA(0x032696ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002496ff),
        Color::fromRGBA(0x002698ff),
        Color::fromRGBA(0x002698ff),
        Color::fromRGBA(0x002698ff),
        Color::fromRGBA(0x002597ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x072998ff),
        Color::fromRGBA(0x546cb8ff),
        Color::fromRGBA(0x6b7fc1ff),
        Color::fromRGBA(0x697dc0ff),
        Color::fromRGBA(0x687cc0ff),
        Color::fromRGBA(0x6b7fc1ff),
        Color::fromRGBA(0x677cc0ff),
        Color::fromRGBA(0x1f3da1ff),
        Color::fromRGBA(0x002194ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x042796ff),
        Color::fromRGBA(0x042696ff),
        Color::fromRGBA(0x687dc0ff),
        Color::fromRGBA(0xa9b3daff),
        Color::fromRGBA(0xcfd6ebff),
        Color::fromRGBA(0xebedf6ff),
        Color::fromRGBA(0xaeb9ddff),
        Color::fromRGBA(0x94a3d2ff),
        Color::fromRGBA(0x18389fff),
        Color::fromRGBA(0x052696ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x0c2d9aff),
        Color::fromRGBA(0x7a8cc7ff),
        Color::fromRGBA(0x3f5aafff),
        Color::fromRGBA(0x002093ff),
        Color::fromRGBA(0x002093ff),
        Color::fromRGBA(0x7184c4ff),
        Color::fromRGBA(0xe9ecf6ff),
        Color::fromRGBA(0x97a5d4ff),
        Color::fromRGBA(0x1b3aa0ff),
        Color::fromRGBA(0x14349dff),
        Color::fromRGBA(0x8394cbff),
        Color::fromRGBA(0x2d4aa7ff),
        Color::fromRGBA(0x002194ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x072998ff),
        Color::fromRGBA(0x6177bdff),
        Color::fromRGBA(0x304ca8ff),
        Color::fromRGBA(0x314da9ff),
        Color::fromRGBA(0x4760b2ff),
        Color::fromRGBA(0x6f82c3ff),
        Color::fromRGBA(0xd7ddeeff),
        Color::fromRGBA(0x778ac6ff),
        Color::fromRGBA(0x5d74bcff),
        Color::fromRGBA(0x11329cff),
        Color::fromRGBA(0x687dc0ff),
        Color::fromRGBA(0x2341a3ff),
        Color::fromRGBA(0x002194ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002194ff),
        Color::fromRGBA(0x0d2e9aff),
        Color::fromRGBA(0xa1aed8ff),
        Color::fromRGBA(0xbac4e2ff),
        Color::fromRGBA(0x97a5d3ff),
        Color::fromRGBA(0xc3cbe6ff),
        Color::fromRGBA(0x91a0d1ff),
        Color::fromRGBA(0xc9d0e8ff),
        Color::fromRGBA(0x3853acff),
        Color::fromRGBA(0x001f93ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002194ff),
        Color::fromRGBA(0x6278beff),
        Color::fromRGBA(0xcad1e9ff),
        Color::fromRGBA(0xc3cbe6ff),
        Color::fromRGBA(0xe9ecf6ff),
        Color::fromRGBA(0xf2f4f9ff),
        Color::fromRGBA(0xd3d9edff),
        Color::fromRGBA(0xbec7e4ff),
        Color::fromRGBA(0xa3b0d9ff),
        Color::fromRGBA(0x0d2d9aff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x012495ff),
        Color::fromRGBA(0x324eaaff),
        Color::fromRGBA(0x2341a3ff),
        Color::fromRGBA(0x1d3ca1ff),
        Color::fromRGBA(0xb6c0e0ff),
        Color::fromRGBA(0xeceff7ff),
        Color::fromRGBA(0x435db0ff),
        Color::fromRGBA(0x17369eff),
        Color::fromRGBA(0x3954acff),
        Color::fromRGBA(0x0e2f9bff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x042696ff),
        Color::fromRGBA(0x4a63b4ff),
        Color::fromRGBA(0x2643a4ff),
        Color::fromRGBA(0x425cb0ff),
        Color::fromRGBA(0x798bc7ff),
        Color::fromRGBA(0x10319bff),
        Color::fromRGBA(0x536ab7ff),
        Color::fromRGBA(0x17379eff),
        Color::fromRGBA(0x002194ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x0a2b99ff),
        Color::fromRGBA(0x8797cdff),
        Color::fromRGBA(0x4b64b4ff),
        Color::fromRGBA(0x032495ff),
        Color::fromRGBA(0x082a98ff),
        Color::fromRGBA(0x19399fff),
        Color::fromRGBA(0x94a3d2ff),
        Color::fromRGBA(0x2f4ba8ff),
        Color::fromRGBA(0x002194ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x092b98ff),
        Color::fromRGBA(0x062797ff),
        Color::fromRGBA(0x415bb0ff),
        Color::fromRGBA(0x6b7fc1ff),
        Color::fromRGBA(0x0b2c99ff),
        Color::fromRGBA(0x0a2b99ff),
        Color::fromRGBA(0x032696ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002194ff),
        Color::fromRGBA(0x3e59afff),
        Color::fromRGBA(0x687dc0ff),
        Color::fromRGBA(0x062897ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002294fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe),
        Color::fromRGBA(0x002395fe)
    ],
];

$img = new Image(16, 11);
$img->append($pixels['16x11'], new Size(16, 11));
$img->append($pixels['32x21'], new Size(32, 21));

return $img;