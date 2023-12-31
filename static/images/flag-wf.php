<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x11' => [
        Color::fromRGBA(0x032596ff),
        Color::fromRGBA(0x14339cff),
        Color::fromRGBA(0xcbd0e7ff),
        Color::fromRGBA(0xfffaf9ff),
        Color::fromRGBA(0xf26974fe),
        Color::fromRGBA(0xec2838fd),
        Color::fromRGBA(0xee3c4bfd),
        Color::fromRGBA(0xed2939fd),
        Color::fromRGBA(0xed2939fd),
        Color::fromRGBA(0xed2939fd),
        Color::fromRGBA(0xed2939fd),
        Color::fromRGBA(0xed2939fd),
        Color::fromRGBA(0xed2939fd),
        Color::fromRGBA(0xed2939fd),
        Color::fromRGBA(0xed2939fd),
        Color::fromRGBA(0xed2939fd),
        Color::fromRGBA(0x002194ff),
        Color::fromRGBA(0x0f309bff),
        Color::fromRGBA(0xcbd2e9ff),
        Color::fromRGBA(0xfffdfcff),
        Color::fromRGBA(0xf26974ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xee3c4bff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0x002194ff),
        Color::fromRGBA(0x0f309bff),
        Color::fromRGBA(0xcbd2e9ff),
        Color::fromRGBA(0xfffdfcff),
        Color::fromRGBA(0xf26974ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xee3c4aff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xec2636ff),
        Color::fromRGBA(0xec2535ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0x002597ff),
        Color::fromRGBA(0x10339eff),
        Color::fromRGBA(0xcbd3eaff),
        Color::fromRGBA(0xfffdfcff),
        Color::fromRGBA(0xf26b76ff),
        Color::fromRGBA(0xed2b3bff),
        Color::fromRGBA(0xee3d4cff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2c3cff),
        Color::fromRGBA(0xf15965ff),
        Color::fromRGBA(0xf26772ff),
        Color::fromRGBA(0xee3a49ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2838ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0x973c6fff),
        Color::fromRGBA(0x9d4171ff),
        Color::fromRGBA(0xe27b8cff),
        Color::fromRGBA(0xf68a92ff),
        Color::fromRGBA(0xf05461ff),
        Color::fromRGBA(0xee3c4bff),
        Color::fromRGBA(0xee3847ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xf15e6aff),
        Color::fromRGBA(0xf6949cff),
        Color::fromRGBA(0xf8adb3ff),
        Color::fromRGBA(0xf37680ff),
        Color::fromRGBA(0xed3443ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xf12937ff),
        Color::fromRGBA(0xf02937ff),
        Color::fromRGBA(0xed2636ff),
        Color::fromRGBA(0xec2536ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2838ff),
        Color::fromRGBA(0xec2636ff),
        Color::fromRGBA(0xf5939bff),
        Color::fromRGBA(0xf59199ff),
        Color::fromRGBA(0xf15d69ff),
        Color::fromRGBA(0xf9bdc2ff),
        Color::fromRGBA(0xee3b4aff),
        Color::fromRGBA(0xec2738ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xf15e6aff),
        Color::fromRGBA(0xf6949cff),
        Color::fromRGBA(0xf8adb3ff),
        Color::fromRGBA(0xf37680ff),
        Color::fromRGBA(0xed3443ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2c3cff),
        Color::fromRGBA(0xf15965ff),
        Color::fromRGBA(0xf26772ff),
        Color::fromRGBA(0xee3a49ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2838ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xec2636ff),
        Color::fromRGBA(0xec2535ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939fd),
        Color::fromRGBA(0xed2939fd),
        Color::fromRGBA(0xed2939fd),
        Color::fromRGBA(0xed2939fd),
        Color::fromRGBA(0xed2939fd),
        Color::fromRGBA(0xed2939fd),
        Color::fromRGBA(0xed2939fd),
        Color::fromRGBA(0xed2939fd),
        Color::fromRGBA(0xed2939fd),
        Color::fromRGBA(0xed2939fd),
        Color::fromRGBA(0xed2939fd),
        Color::fromRGBA(0xed2939fd),
        Color::fromRGBA(0xed2939fd),
        Color::fromRGBA(0xed2939fd),
        Color::fromRGBA(0xed2939fd),
        Color::fromRGBA(0xed2939fd)
    ],
    '32x21' => [
        Color::fromRGBA(0x032596ff),
        Color::fromRGBA(0x032596ff),
        Color::fromRGBA(0x032595ff),
        Color::fromRGBA(0x082998ff),
        Color::fromRGBA(0xb3bbddff),
        Color::fromRGBA(0xfffcfcff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xf699a1fe),
        Color::fromRGBA(0xec2636fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xec2737fe),
        Color::fromRGBA(0xef4a58fe),
        Color::fromRGBA(0xee3746fe),
        Color::fromRGBA(0xec2838fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x042797ff),
        Color::fromRGBA(0xb2bcdfff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf69aa2ff),
        Color::fromRGBA(0xec2636ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xec2737ff),
        Color::fromRGBA(0xef4a58ff),
        Color::fromRGBA(0xee3746ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x042797ff),
        Color::fromRGBA(0xb2bcdfff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf69aa2ff),
        Color::fromRGBA(0xec2636ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xec2737ff),
        Color::fromRGBA(0xef4a58ff),
        Color::fromRGBA(0xee3746ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x042797ff),
        Color::fromRGBA(0xb2bcdfff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf69aa2ff),
        Color::fromRGBA(0xec2636ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xec2737ff),
        Color::fromRGBA(0xef4a58ff),
        Color::fromRGBA(0xee3746ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x042797ff),
        Color::fromRGBA(0xb2bcdfff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf69aa2ff),
        Color::fromRGBA(0xec2636ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xec2737ff),
        Color::fromRGBA(0xef4a58ff),
        Color::fromRGBA(0xee3746ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002395ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x042797ff),
        Color::fromRGBA(0xb2bcdfff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf69aa2ff),
        Color::fromRGBA(0xec2636ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xec2737ff),
        Color::fromRGBA(0xef4a58ff),
        Color::fromRGBA(0xee3746ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x002294ff),
        Color::fromRGBA(0x042796ff),
        Color::fromRGBA(0xb2bcdfff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf69aa2ff),
        Color::fromRGBA(0xec2636ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xec2737ff),
        Color::fromRGBA(0xef4a58ff),
        Color::fromRGBA(0xee3746ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2a3aff),
        Color::fromRGBA(0xee3544ff),
        Color::fromRGBA(0xee3444ff),
        Color::fromRGBA(0xed3443ff),
        Color::fromRGBA(0xee3544ff),
        Color::fromRGBA(0xed3443ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0x022898ff),
        Color::fromRGBA(0x022898ff),
        Color::fromRGBA(0x022798ff),
        Color::fromRGBA(0x072c9aff),
        Color::fromRGBA(0xb3c0e2ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf69ea5ff),
        Color::fromRGBA(0xed2b3bff),
        Color::fromRGBA(0xed2e3dff),
        Color::fromRGBA(0xed2c3cff),
        Color::fromRGBA(0xf04e5bff),
        Color::fromRGBA(0xee3746ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2a3aff),
        Color::fromRGBA(0xed3040ff),
        Color::fromRGBA(0xf59098ff),
        Color::fromRGBA(0xfbd1d5ff),
        Color::fromRGBA(0xfbd2d5ff),
        Color::fromRGBA(0xfaced1ff),
        Color::fromRGBA(0xf37681ff),
        Color::fromRGBA(0xed2c3bff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xa24e7bff),
        Color::fromRGBA(0xa24e7bff),
        Color::fromRGBA(0xa24e7bff),
        Color::fromRGBA(0xa44f7bff),
        Color::fromRGBA(0xdd8093ff),
        Color::fromRGBA(0xf6959dff),
        Color::fromRGBA(0xf6959dff),
        Color::fromRGBA(0xf6959dff),
        Color::fromRGBA(0xf3757fff),
        Color::fromRGBA(0xf04f5cff),
        Color::fromRGBA(0xf0505dff),
        Color::fromRGBA(0xf04f5dff),
        Color::fromRGBA(0xf05461ff),
        Color::fromRGBA(0xed3040ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xec2737ff),
        Color::fromRGBA(0xee404eff),
        Color::fromRGBA(0xf47d87ff),
        Color::fromRGBA(0xef4856ff),
        Color::fromRGBA(0xf9bdc2ff),
        Color::fromRGBA(0xfefbfcff),
        Color::fromRGBA(0xf7a0a7ff),
        Color::fromRGBA(0xef4855ff),
        Color::fromRGBA(0xf47f89ff),
        Color::fromRGBA(0xed3241ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xf12a38ff),
        Color::fromRGBA(0xf12a38ff),
        Color::fromRGBA(0xf12a38ff),
        Color::fromRGBA(0xf12938ff),
        Color::fromRGBA(0xee2737ff),
        Color::fromRGBA(0xec2636ff),
        Color::fromRGBA(0xec2636ff),
        Color::fromRGBA(0xec2636ff),
        Color::fromRGBA(0xec2738ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xec2737ff),
        Color::fromRGBA(0xef4553ff),
        Color::fromRGBA(0xfce2e4ff),
        Color::fromRGBA(0xf6979fff),
        Color::fromRGBA(0xef4856ff),
        Color::fromRGBA(0xf37680ff),
        Color::fromRGBA(0xef4755ff),
        Color::fromRGBA(0xf8b5bbff),
        Color::fromRGBA(0xfaccd0ff),
        Color::fromRGBA(0xed3241ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xec2737ff),
        Color::fromRGBA(0xef4452ff),
        Color::fromRGBA(0xfde8eaff),
        Color::fromRGBA(0xfef5f6ff),
        Color::fromRGBA(0xf1626eff),
        Color::fromRGBA(0xec1f30ff),
        Color::fromRGBA(0xf4848dff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfaccd0ff),
        Color::fromRGBA(0xed3141ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xec2737ff),
        Color::fromRGBA(0xef4553ff),
        Color::fromRGBA(0xfce2e4ff),
        Color::fromRGBA(0xf6979fff),
        Color::fromRGBA(0xef4856ff),
        Color::fromRGBA(0xf37580ff),
        Color::fromRGBA(0xef4755ff),
        Color::fromRGBA(0xf8b5bbff),
        Color::fromRGBA(0xfaccd0ff),
        Color::fromRGBA(0xed3241ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xec2737ff),
        Color::fromRGBA(0xee404eff),
        Color::fromRGBA(0xf47d87ff),
        Color::fromRGBA(0xef4856ff),
        Color::fromRGBA(0xf9bdc2ff),
        Color::fromRGBA(0xfefbfcff),
        Color::fromRGBA(0xf7a0a7ff),
        Color::fromRGBA(0xef4855ff),
        Color::fromRGBA(0xf47f89ff),
        Color::fromRGBA(0xed3241ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2a3aff),
        Color::fromRGBA(0xed3040ff),
        Color::fromRGBA(0xf59098ff),
        Color::fromRGBA(0xfbd1d5ff),
        Color::fromRGBA(0xfbd2d5ff),
        Color::fromRGBA(0xfaced1ff),
        Color::fromRGBA(0xf37681ff),
        Color::fromRGBA(0xed2c3bff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2a3aff),
        Color::fromRGBA(0xee3544ff),
        Color::fromRGBA(0xee3444ff),
        Color::fromRGBA(0xed3443ff),
        Color::fromRGBA(0xee3544ff),
        Color::fromRGBA(0xed3443ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xec2838ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939ff),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe),
        Color::fromRGBA(0xed2939fe)
    ],
];

$img = new Image(16, 11);
$img->append($pixels['16x11'], new Size(16, 11));
$img->append($pixels['32x21'], new Size(32, 21));

return $img;
