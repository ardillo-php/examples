<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x8' => [
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x083797ff),
        Color::fromRGBA(0x083797ff),
        Color::fromRGBA(0x083797ff),
        Color::fromRGBA(0x083797ff),
        Color::fromRGBA(0x083797ff),
        Color::fromRGBA(0x093897ff),
        Color::fromRGBA(0x093797ff),
        Color::fromRGBA(0x083797ff),
        Color::fromRGBA(0x083797ff),
        Color::fromRGBA(0x093797ff),
        Color::fromRGBA(0x093897ff),
        Color::fromRGBA(0x083797ff),
        Color::fromRGBA(0x083797ff),
        Color::fromRGBA(0x083797ff),
        Color::fromRGBA(0x083797ff),
        Color::fromRGBA(0x083797ff),
        Color::fromRGBA(0x6381bdff),
        Color::fromRGBA(0x6381bdff),
        Color::fromRGBA(0x6381bdff),
        Color::fromRGBA(0x6381bdff),
        Color::fromRGBA(0x6381bdff),
        Color::fromRGBA(0x5b7abaff),
        Color::fromRGBA(0x607ebcff),
        Color::fromRGBA(0x6482bdff),
        Color::fromRGBA(0x6482bdff),
        Color::fromRGBA(0x607ebcff),
        Color::fromRGBA(0x5b7abaff),
        Color::fromRGBA(0x6381bdff),
        Color::fromRGBA(0x6381bdff),
        Color::fromRGBA(0x6381bdff),
        Color::fromRGBA(0x6381bdff),
        Color::fromRGBA(0x6381bdff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xdce3f0ff),
        Color::fromRGBA(0xf0f3f9ff),
        Color::fromRGBA(0xeff2f8ff),
        Color::fromRGBA(0xeff2f8ff),
        Color::fromRGBA(0xf0f3f9ff),
        Color::fromRGBA(0xdce3f0ff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xdce3f0ff),
        Color::fromRGBA(0xf0f3f9ff),
        Color::fromRGBA(0xeef2f8ff),
        Color::fromRGBA(0xeef2f8ff),
        Color::fromRGBA(0xf0f3f9ff),
        Color::fromRGBA(0xdce3f0ff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0x6381bdff),
        Color::fromRGBA(0x6381bdff),
        Color::fromRGBA(0x6381bdff),
        Color::fromRGBA(0x6381bdff),
        Color::fromRGBA(0x6381bdff),
        Color::fromRGBA(0x5b7abaff),
        Color::fromRGBA(0x607ebcff),
        Color::fromRGBA(0x6482bdff),
        Color::fromRGBA(0x6482bdff),
        Color::fromRGBA(0x607ebcff),
        Color::fromRGBA(0x5b7abaff),
        Color::fromRGBA(0x6381bdff),
        Color::fromRGBA(0x6381bdff),
        Color::fromRGBA(0x6381bdff),
        Color::fromRGBA(0x6381bdff),
        Color::fromRGBA(0x6381bdff),
        Color::fromRGBA(0x083797ff),
        Color::fromRGBA(0x083797ff),
        Color::fromRGBA(0x083797ff),
        Color::fromRGBA(0x083797ff),
        Color::fromRGBA(0x083797ff),
        Color::fromRGBA(0x093897ff),
        Color::fromRGBA(0x093797ff),
        Color::fromRGBA(0x083797ff),
        Color::fromRGBA(0x083797ff),
        Color::fromRGBA(0x093797ff),
        Color::fromRGBA(0x093897ff),
        Color::fromRGBA(0x083797ff),
        Color::fromRGBA(0x083797ff),
        Color::fromRGBA(0x083797ff),
        Color::fromRGBA(0x083797ff),
        Color::fromRGBA(0x083797ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff)
    ],
    '32x16' => [
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0f3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0f3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xa9b9daff),
        Color::fromRGBA(0xa0b2d6ff),
        Color::fromRGBA(0xa8b8daff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xa8b8daff),
        Color::fromRGBA(0xa0b2d6ff),
        Color::fromRGBA(0xa9b9daff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xeff2f8ff),
        Color::fromRGBA(0x8ea3cfff),
        Color::fromRGBA(0xe5eaf4ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xe5eaf4ff),
        Color::fromRGBA(0x8ea3cfff),
        Color::fromRGBA(0xeff2f8ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf9fafcff),
        Color::fromRGBA(0xd8dfeeff),
        Color::fromRGBA(0xf6f7fbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xc5d0e6ff),
        Color::fromRGBA(0xc5d0e6ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf6f7fbff),
        Color::fromRGBA(0xd8dfeeff),
        Color::fromRGBA(0xf9fafcff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf9fafcff),
        Color::fromRGBA(0xd8e0eeff),
        Color::fromRGBA(0xf6f8fbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xc5d0e6ff),
        Color::fromRGBA(0xc5d0e6ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf6f8fbff),
        Color::fromRGBA(0xd8e0eeff),
        Color::fromRGBA(0xf9fafcff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xeff2f8ff),
        Color::fromRGBA(0x8ea3cfff),
        Color::fromRGBA(0xe5eaf4ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xe5eaf4ff),
        Color::fromRGBA(0x8ea3cfff),
        Color::fromRGBA(0xeff2f8ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xa8b8daff),
        Color::fromRGBA(0xa0b2d7ff),
        Color::fromRGBA(0xa7b8daff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xa7b8daff),
        Color::fromRGBA(0xa0b2d7ff),
        Color::fromRGBA(0xa8b8daff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0xaabadbff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0f3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0f3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0e3c99ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0c3a98ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff),
        Color::fromRGBA(0x0d3b99ff)
    ],
];

$img = new Image(16, 8);
$img->append($pixels['16x8'], new Size(16, 8));
$img->append($pixels['32x16'], new Size(32, 16));

return $img;
