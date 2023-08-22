<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x11' => [
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xecdfe1ff),
        Color::fromRGBA(0xf2e9eaff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e6ff),
        Color::fromRGBA(0xce2c46ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xece0e2ff),
        Color::fromRGBA(0xc3b8b8ff),
        Color::fromRGBA(0xcec1c1ff),
        Color::fromRGBA(0xf5eeefff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e6ff),
        Color::fromRGBA(0xce2c46ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xefe4e6ff),
        Color::fromRGBA(0xc9bdbdff),
        Color::fromRGBA(0xd3c5c6ff),
        Color::fromRGBA(0xf7f0f1ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e6ff),
        Color::fromRGBA(0xce2c46ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf1e8e9ff),
        Color::fromRGBA(0xf6eff0ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e6ff),
        Color::fromRGBA(0xce2c46ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e6ff),
        Color::fromRGBA(0xce2c46ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e6ff),
        Color::fromRGBA(0xce2c46ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e6ff),
        Color::fromRGBA(0xce2c46ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e6ff),
        Color::fromRGBA(0xce2c46ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e6ff),
        Color::fromRGBA(0xce2c46ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e6ff),
        Color::fromRGBA(0xce2c46ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc70f2dff),
        Color::fromRGBA(0xc70f2dff),
        Color::fromRGBA(0xc70f2dff),
        Color::fromRGBA(0xc70f2dff),
        Color::fromRGBA(0xc70f2dff),
        Color::fromRGBA(0xc70f2dff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e5ff),
        Color::fromRGBA(0xce2d47ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff)
    ],
    '32x21' => [
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfcf7f8ff),
        Color::fromRGBA(0xefdee0ff),
        Color::fromRGBA(0xf5e8eaff),
        Color::fromRGBA(0xfffefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e5ff),
        Color::fromRGBA(0xce2c47ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf6ecedff),
        Color::fromRGBA(0xcfbcbfff),
        Color::fromRGBA(0xe0cbceff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e5ff),
        Color::fromRGBA(0xce2c47ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xfbf6f7ff),
        Color::fromRGBA(0xf5e9ebff),
        Color::fromRGBA(0xdfcdceff),
        Color::fromRGBA(0xbcb4b3ff),
        Color::fromRGBA(0xc9b8b9ff),
        Color::fromRGBA(0xf0e2e4ff),
        Color::fromRGBA(0xf8eeefff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e5ff),
        Color::fromRGBA(0xce2c47ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xeedcdeff),
        Color::fromRGBA(0xcebcbeff),
        Color::fromRGBA(0xbeb6b6ff),
        Color::fromRGBA(0x9e9691ff),
        Color::fromRGBA(0xaba5a3ff),
        Color::fromRGBA(0xc9bebfff),
        Color::fromRGBA(0xdac4c6ff),
        Color::fromRGBA(0xfdfafbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e5ff),
        Color::fromRGBA(0xce2c47ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xf5e9eaff),
        Color::fromRGBA(0xe2cdd0ff),
        Color::fromRGBA(0xcebdbdff),
        Color::fromRGBA(0xb0aaa8ff),
        Color::fromRGBA(0xb9acabff),
        Color::fromRGBA(0xdcc9cbff),
        Color::fromRGBA(0xe9d6d9ff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e5ff),
        Color::fromRGBA(0xce2c47ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xf2e5e7ff),
        Color::fromRGBA(0xcabebfff),
        Color::fromRGBA(0xdbc7c9ff),
        Color::fromRGBA(0xfefbfcff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e5ff),
        Color::fromRGBA(0xce2c47ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf9f1f2ff),
        Color::fromRGBA(0xdec8cbff),
        Color::fromRGBA(0xead7daff),
        Color::fromRGBA(0xfffefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e5ff),
        Color::fromRGBA(0xce2c47ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfffefeff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e5ff),
        Color::fromRGBA(0xce2c47ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e5ff),
        Color::fromRGBA(0xce2c47ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e5ff),
        Color::fromRGBA(0xce2c47ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e5ff),
        Color::fromRGBA(0xce2c47ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e5ff),
        Color::fromRGBA(0xce2c47ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e5ff),
        Color::fromRGBA(0xce2c47ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e5ff),
        Color::fromRGBA(0xce2c47ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e5ff),
        Color::fromRGBA(0xce2c47ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e5ff),
        Color::fromRGBA(0xce2c47ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e5ff),
        Color::fromRGBA(0xce2c47ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e5ff),
        Color::fromRGBA(0xce2c47ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e5ff),
        Color::fromRGBA(0xce2c47ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8e2e5ff),
        Color::fromRGBA(0xce2c47ff),
        Color::fromRGBA(0xc70e2cff),
        Color::fromRGBA(0xc70f2dff),
        Color::fromRGBA(0xc70f2dff),
        Color::fromRGBA(0xc70f2dff),
        Color::fromRGBA(0xc70f2dff),
        Color::fromRGBA(0xc70f2dff),
        Color::fromRGBA(0xc70f2dff),
        Color::fromRGBA(0xc70f2dff),
        Color::fromRGBA(0xc70f2dff),
        Color::fromRGBA(0xc70f2dff),
        Color::fromRGBA(0xc70f2dff),
        Color::fromRGBA(0xc70f2dff),
        Color::fromRGBA(0xc70f2dff),
        Color::fromRGBA(0xc70f2dff),
        Color::fromRGBA(0xc70f2dff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xf8e1e5ff),
        Color::fromRGBA(0xce2d47ff),
        Color::fromRGBA(0xc70f2dff),
        Color::fromRGBA(0xc8112fff),
        Color::fromRGBA(0xc8112fff),
        Color::fromRGBA(0xc8112fff),
        Color::fromRGBA(0xc8112fff),
        Color::fromRGBA(0xc8112fff),
        Color::fromRGBA(0xc8112fff),
        Color::fromRGBA(0xc8112fff),
        Color::fromRGBA(0xc8112fff),
        Color::fromRGBA(0xc8112fff),
        Color::fromRGBA(0xc8112fff),
        Color::fromRGBA(0xc8112fff),
        Color::fromRGBA(0xc8112fff),
        Color::fromRGBA(0xc8112fff),
        Color::fromRGBA(0xc8112fff)
    ],
];

$img = new Image(16, 11);
$img->append($pixels['16x11'], new Size(16, 11));
$img->append($pixels['32x21'], new Size(32, 21));

return $img;