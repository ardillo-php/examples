<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x8' => [
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc90f2dff),
        Color::fromRGBA(0xb01d2fff),
        Color::fromRGBA(0x17763bff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc90f2dff),
        Color::fromRGBA(0xb01d2fff),
        Color::fromRGBA(0x177438ff),
        Color::fromRGBA(0x008239ff),
        Color::fromRGBA(0x008139ff),
        Color::fromRGBA(0x008139ff),
        Color::fromRGBA(0x008139ff),
        Color::fromRGBA(0x008139ff),
        Color::fromRGBA(0x008139ff),
        Color::fromRGBA(0x008139ff),
        Color::fromRGBA(0x008139ff),
        Color::fromRGBA(0x008139ff),
        Color::fromRGBA(0x008139ff),
        Color::fromRGBA(0x008139ff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc80e2dff),
        Color::fromRGBA(0xbb2338ff),
        Color::fromRGBA(0x689c78ff),
        Color::fromRGBA(0x5ab183ff),
        Color::fromRGBA(0x5bb082ff),
        Color::fromRGBA(0x5bb082ff),
        Color::fromRGBA(0x5bb082ff),
        Color::fromRGBA(0x5bb082ff),
        Color::fromRGBA(0x5bb082ff),
        Color::fromRGBA(0x5bb082ff),
        Color::fromRGBA(0x5bb082ff),
        Color::fromRGBA(0x5bb082ff),
        Color::fromRGBA(0x5bb082ff),
        Color::fromRGBA(0x5bb082ff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xce2c46ff),
        Color::fromRGBA(0xf7e1e5ff),
        Color::fromRGBA(0xfeffffff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xce2c46ff),
        Color::fromRGBA(0xf7e1e4ff),
        Color::fromRGBA(0xfdffffff),
        Color::fromRGBA(0xfdfdfdff),
        Color::fromRGBA(0xfdfdfdff),
        Color::fromRGBA(0xfdfdfdff),
        Color::fromRGBA(0xfdfdfdff),
        Color::fromRGBA(0xfdfdfdff),
        Color::fromRGBA(0xfdfdfdff),
        Color::fromRGBA(0xfdfdfdff),
        Color::fromRGBA(0xfdfdfdff),
        Color::fromRGBA(0xfdfdfdff),
        Color::fromRGBA(0xfdfdfdff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc80f2dff),
        Color::fromRGBA(0xba1833ff),
        Color::fromRGBA(0x675155ff),
        Color::fromRGBA(0x595a5aff),
        Color::fromRGBA(0x5a5a5aff),
        Color::fromRGBA(0x5a5a5aff),
        Color::fromRGBA(0x5a5a5aff),
        Color::fromRGBA(0x5a5a5aff),
        Color::fromRGBA(0x5a5a5aff),
        Color::fromRGBA(0x5a5a5aff),
        Color::fromRGBA(0x5a5a5aff),
        Color::fromRGBA(0x5a5a5aff),
        Color::fromRGBA(0x5a5a5aff),
        Color::fromRGBA(0x5a5a5aff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc9102eff),
        Color::fromRGBA(0xb00e28ff),
        Color::fromRGBA(0x170105ff),
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
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc9102eff),
        Color::fromRGBA(0xb00e28ff),
        Color::fromRGBA(0x170105ff),
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
    '32x16' => [
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc90f2dff),
        Color::fromRGBA(0xaf1e2fff),
        Color::fromRGBA(0x18753bff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc90f2dff),
        Color::fromRGBA(0xaf1e2fff),
        Color::fromRGBA(0x18753bff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc90f2dff),
        Color::fromRGBA(0xaf1e2fff),
        Color::fromRGBA(0x18753bff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc90f2dff),
        Color::fromRGBA(0xaf1e2fff),
        Color::fromRGBA(0x18753bff),
        Color::fromRGBA(0x00843dff),
        Color::fromRGBA(0x00833cff),
        Color::fromRGBA(0x00833cff),
        Color::fromRGBA(0x00833cff),
        Color::fromRGBA(0x00833cff),
        Color::fromRGBA(0x00833cff),
        Color::fromRGBA(0x00833cff),
        Color::fromRGBA(0x00833cff),
        Color::fromRGBA(0x00833cff),
        Color::fromRGBA(0x00833cff),
        Color::fromRGBA(0x00833cff),
        Color::fromRGBA(0x00833cff),
        Color::fromRGBA(0x00833cff),
        Color::fromRGBA(0x00833cff),
        Color::fromRGBA(0x00833cff),
        Color::fromRGBA(0x00833cff),
        Color::fromRGBA(0x00833cff),
        Color::fromRGBA(0x00833cff),
        Color::fromRGBA(0x00833cff),
        Color::fromRGBA(0x00833cff),
        Color::fromRGBA(0x00833cff),
        Color::fromRGBA(0x00833cff),
        Color::fromRGBA(0x00833cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc90f2dff),
        Color::fromRGBA(0xaf1e30ff),
        Color::fromRGBA(0x19763cff),
        Color::fromRGBA(0x00853eff),
        Color::fromRGBA(0x01843eff),
        Color::fromRGBA(0x01843eff),
        Color::fromRGBA(0x01843eff),
        Color::fromRGBA(0x01843eff),
        Color::fromRGBA(0x01843eff),
        Color::fromRGBA(0x01843eff),
        Color::fromRGBA(0x01843eff),
        Color::fromRGBA(0x01843eff),
        Color::fromRGBA(0x01843eff),
        Color::fromRGBA(0x01843eff),
        Color::fromRGBA(0x01843eff),
        Color::fromRGBA(0x01843eff),
        Color::fromRGBA(0x01843eff),
        Color::fromRGBA(0x01843eff),
        Color::fromRGBA(0x01843eff),
        Color::fromRGBA(0x01843eff),
        Color::fromRGBA(0x01843eff),
        Color::fromRGBA(0x01843eff),
        Color::fromRGBA(0x01843eff),
        Color::fromRGBA(0x01843eff),
        Color::fromRGBA(0x01843eff),
        Color::fromRGBA(0x01843eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc80e2cff),
        Color::fromRGBA(0xc3273fff),
        Color::fromRGBA(0xa9bba9ff),
        Color::fromRGBA(0xa5d5bcff),
        Color::fromRGBA(0xa5d3baff),
        Color::fromRGBA(0xa5d3baff),
        Color::fromRGBA(0xa5d3baff),
        Color::fromRGBA(0xa5d3baff),
        Color::fromRGBA(0xa5d3baff),
        Color::fromRGBA(0xa5d3baff),
        Color::fromRGBA(0xa5d3baff),
        Color::fromRGBA(0xa5d3baff),
        Color::fromRGBA(0xa5d3baff),
        Color::fromRGBA(0xa5d3baff),
        Color::fromRGBA(0xa5d3baff),
        Color::fromRGBA(0xa5d3baff),
        Color::fromRGBA(0xa5d3baff),
        Color::fromRGBA(0xa5d3baff),
        Color::fromRGBA(0xa5d3baff),
        Color::fromRGBA(0xa5d3baff),
        Color::fromRGBA(0xa5d3baff),
        Color::fromRGBA(0xa5d3baff),
        Color::fromRGBA(0xa5d3baff),
        Color::fromRGBA(0xa5d3baff),
        Color::fromRGBA(0xa5d3baff),
        Color::fromRGBA(0xa5d3baff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xce2d47ff),
        Color::fromRGBA(0xf8e1e5ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xce2d47ff),
        Color::fromRGBA(0xf8e1e5ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xce2d47ff),
        Color::fromRGBA(0xf8e1e5ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xce2d47ff),
        Color::fromRGBA(0xf8e1e5ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc80e2dff),
        Color::fromRGBA(0xc3223cff),
        Color::fromRGBA(0xa89195ff),
        Color::fromRGBA(0xa3a4a4ff),
        Color::fromRGBA(0xa3a3a3ff),
        Color::fromRGBA(0xa3a3a3ff),
        Color::fromRGBA(0xa3a3a3ff),
        Color::fromRGBA(0xa3a3a3ff),
        Color::fromRGBA(0xa3a3a3ff),
        Color::fromRGBA(0xa3a3a3ff),
        Color::fromRGBA(0xa3a3a3ff),
        Color::fromRGBA(0xa3a3a3ff),
        Color::fromRGBA(0xa3a3a3ff),
        Color::fromRGBA(0xa3a3a3ff),
        Color::fromRGBA(0xa3a3a3ff),
        Color::fromRGBA(0xa3a3a3ff),
        Color::fromRGBA(0xa3a3a3ff),
        Color::fromRGBA(0xa3a3a3ff),
        Color::fromRGBA(0xa3a3a3ff),
        Color::fromRGBA(0xa3a3a3ff),
        Color::fromRGBA(0xa3a3a3ff),
        Color::fromRGBA(0xa3a3a3ff),
        Color::fromRGBA(0xa3a3a3ff),
        Color::fromRGBA(0xa3a3a3ff),
        Color::fromRGBA(0xa3a3a3ff),
        Color::fromRGBA(0xa3a3a3ff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc9102eff),
        Color::fromRGBA(0xaf0e28ff),
        Color::fromRGBA(0x190306ff),
        Color::fromRGBA(0x000100ff),
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
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc9102eff),
        Color::fromRGBA(0xaf0e28ff),
        Color::fromRGBA(0x180105ff),
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
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc9102eff),
        Color::fromRGBA(0xaf0e28ff),
        Color::fromRGBA(0x180105ff),
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
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc9102eff),
        Color::fromRGBA(0xaf0e28ff),
        Color::fromRGBA(0x180105ff),
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
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc9102eff),
        Color::fromRGBA(0xaf0e28ff),
        Color::fromRGBA(0x180105ff),
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
