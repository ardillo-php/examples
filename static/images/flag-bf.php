<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x11' => [
        Color::fromRGBA(0xeb2c2dff),
        Color::fromRGBA(0xeb2c2dff),
        Color::fromRGBA(0xeb2c2dff),
        Color::fromRGBA(0xeb2c2dff),
        Color::fromRGBA(0xeb2c2dff),
        Color::fromRGBA(0xeb2c2dff),
        Color::fromRGBA(0xeb2c2dff),
        Color::fromRGBA(0xeb2c2dff),
        Color::fromRGBA(0xeb2c2dff),
        Color::fromRGBA(0xeb2c2dff),
        Color::fromRGBA(0xeb2c2dff),
        Color::fromRGBA(0xeb2c2dff),
        Color::fromRGBA(0xeb2c2dff),
        Color::fromRGBA(0xeb2c2dff),
        Color::fromRGBA(0xeb2c2dff),
        Color::fromRGBA(0xeb2c2dff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2cff),
        Color::fromRGBA(0xee2a2dff),
        Color::fromRGBA(0xee2a2dff),
        Color::fromRGBA(0xef2b2cff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2cff),
        Color::fromRGBA(0xee292dff),
        Color::fromRGBA(0xef2f2cff),
        Color::fromRGBA(0xef2f2cff),
        Color::fromRGBA(0xee292dff),
        Color::fromRGBA(0xef2b2cff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2342bff),
        Color::fromRGBA(0xf46724ff),
        Color::fromRGBA(0xf46724ff),
        Color::fromRGBA(0xf2342bff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77633bff),
        Color::fromRGBA(0x7d7b37ff),
        Color::fromRGBA(0xd9be1eff),
        Color::fromRGBA(0xd9be1eff),
        Color::fromRGBA(0x7d7b37ff),
        Color::fromRGBA(0x77633bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x0ca146ff),
        Color::fromRGBA(0x63b234ff),
        Color::fromRGBA(0x63b234ff),
        Color::fromRGBA(0x0ca146ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x029e48ff),
        Color::fromRGBA(0x039e48ff),
        Color::fromRGBA(0x039e48ff),
        Color::fromRGBA(0x029e48ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49fd),
        Color::fromRGBA(0x009e49fd),
        Color::fromRGBA(0x009e49fd),
        Color::fromRGBA(0x009e49fd),
        Color::fromRGBA(0x009e49fd),
        Color::fromRGBA(0x009e49fd),
        Color::fromRGBA(0x009e49fd),
        Color::fromRGBA(0x009e49fd),
        Color::fromRGBA(0x009e49fd),
        Color::fromRGBA(0x009e49fd),
        Color::fromRGBA(0x009e49fd),
        Color::fromRGBA(0x009e49fd),
        Color::fromRGBA(0x009e49fd),
        Color::fromRGBA(0x009e49fd),
        Color::fromRGBA(0x009e49fd),
        Color::fromRGBA(0x009e49fd)
    ],
    '32x21' => [
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xec2c2dff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2a2cff),
        Color::fromRGBA(0xef2b2cff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2a2dff),
        Color::fromRGBA(0xee2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2a2dff),
        Color::fromRGBA(0xee2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2a2dff),
        Color::fromRGBA(0xee2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xee2a2dff),
        Color::fromRGBA(0xee2a2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2a2dff),
        Color::fromRGBA(0xee2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xee2a2dff),
        Color::fromRGBA(0xef2b2cff),
        Color::fromRGBA(0xef2b2cff),
        Color::fromRGBA(0xee2a2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2a2dff),
        Color::fromRGBA(0xee2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2a2dff),
        Color::fromRGBA(0xef2a2dff),
        Color::fromRGBA(0xee292dff),
        Color::fromRGBA(0xf14828ff),
        Color::fromRGBA(0xf14828ff),
        Color::fromRGBA(0xee292dff),
        Color::fromRGBA(0xef2a2dff),
        Color::fromRGBA(0xef2a2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2a2dff),
        Color::fromRGBA(0xee2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2a2dff),
        Color::fromRGBA(0xef2b2cff),
        Color::fromRGBA(0xee2a2dff),
        Color::fromRGBA(0xee282dff),
        Color::fromRGBA(0xf57e21ff),
        Color::fromRGBA(0xf57e21ff),
        Color::fromRGBA(0xee282dff),
        Color::fromRGBA(0xee2a2dff),
        Color::fromRGBA(0xef2b2cff),
        Color::fromRGBA(0xef2a2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2b2dff),
        Color::fromRGBA(0xef2a2dff),
        Color::fromRGBA(0xee2b2dff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2282cff),
        Color::fromRGBA(0xf3342bff),
        Color::fromRGBA(0xf77122ff),
        Color::fromRGBA(0xf88b1fff),
        Color::fromRGBA(0xfabb19ff),
        Color::fromRGBA(0xfabb19ff),
        Color::fromRGBA(0xf88b1fff),
        Color::fromRGBA(0xf77122ff),
        Color::fromRGBA(0xf3342bff),
        Color::fromRGBA(0xf2282cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0xf2292cff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77653aff),
        Color::fromRGBA(0x7b8536ff),
        Color::fromRGBA(0xbdc322ff),
        Color::fromRGBA(0xfdd215ff),
        Color::fromRGBA(0xfdd215ff),
        Color::fromRGBA(0xbdc322ff),
        Color::fromRGBA(0x7b8536ff),
        Color::fromRGBA(0x77653aff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x77643bff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009d4aff),
        Color::fromRGBA(0x80b72fff),
        Color::fromRGBA(0xeece18ff),
        Color::fromRGBA(0xeece18ff),
        Color::fromRGBA(0x7fb72fff),
        Color::fromRGBA(0x009d4aff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x0ca046ff),
        Color::fromRGBA(0x89b92dff),
        Color::fromRGBA(0x48ac3aff),
        Color::fromRGBA(0x49ac3aff),
        Color::fromRGBA(0x89b92dff),
        Color::fromRGBA(0x0ca046ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x079f47ff),
        Color::fromRGBA(0x12a145ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x12a145ff),
        Color::fromRGBA(0x079f47ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e48ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009e48ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe),
        Color::fromRGBA(0x009e49fe)
    ],
];

$img = new Image(16, 11);
$img->append($pixels['16x11'], new Size(16, 11));
$img->append($pixels['32x21'], new Size(32, 21));

return $img;
