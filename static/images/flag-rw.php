<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x11' => [
        Color::fromRGBA(0x04a1daff),
        Color::fromRGBA(0x04a1daff),
        Color::fromRGBA(0x04a1daff),
        Color::fromRGBA(0x04a1daff),
        Color::fromRGBA(0x04a1daff),
        Color::fromRGBA(0x04a1daff),
        Color::fromRGBA(0x04a1daff),
        Color::fromRGBA(0x04a1daff),
        Color::fromRGBA(0x04a1daff),
        Color::fromRGBA(0x04a1daff),
        Color::fromRGBA(0x04a1daff),
        Color::fromRGBA(0x04a1daff),
        Color::fromRGBA(0x03a1daff),
        Color::fromRGBA(0x03a1daff),
        Color::fromRGBA(0x03a1daff),
        Color::fromRGBA(0x04a1daff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x01a1dcff),
        Color::fromRGBA(0x18a4c6ff),
        Color::fromRGBA(0x1fa4bfff),
        Color::fromRGBA(0x04a1d9ff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x0ca2d1ff),
        Color::fromRGBA(0x75af6cff),
        Color::fromRGBA(0x92b350ff),
        Color::fromRGBA(0x1ea4c0ff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x0aa2d4ff),
        Color::fromRGBA(0x60ad80ff),
        Color::fromRGBA(0x7ab067ff),
        Color::fromRGBA(0x18a4c6ff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x08a1d5ff),
        Color::fromRGBA(0x0ca2d1ff),
        Color::fromRGBA(0x01a0deff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7cb96fff),
        Color::fromRGBA(0x7cb970ff),
        Color::fromRGBA(0x7cb970ff),
        Color::fromRGBA(0x7cb96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xf4ce02ff),
        Color::fromRGBA(0xf4ce02ff),
        Color::fromRGBA(0xf4ce02ff),
        Color::fromRGBA(0xf4ce02ff),
        Color::fromRGBA(0xf4ce02ff),
        Color::fromRGBA(0xf4ce02ff),
        Color::fromRGBA(0xf4ce02ff),
        Color::fromRGBA(0xf4ce02ff),
        Color::fromRGBA(0xf4ce02ff),
        Color::fromRGBA(0xf4ce02ff),
        Color::fromRGBA(0xf4ce02ff),
        Color::fromRGBA(0xf4ce02ff),
        Color::fromRGBA(0xf4ce02ff),
        Color::fromRGBA(0xf4ce02ff),
        Color::fromRGBA(0xf4ce02ff),
        Color::fromRGBA(0xf4ce02ff),
        Color::fromRGBA(0x5c7f2cff),
        Color::fromRGBA(0x5c7f2cff),
        Color::fromRGBA(0x5c7f2cff),
        Color::fromRGBA(0x5c7f2cff),
        Color::fromRGBA(0x5c7f2cff),
        Color::fromRGBA(0x5c7f2cff),
        Color::fromRGBA(0x5c7f2cff),
        Color::fromRGBA(0x5c7f2cff),
        Color::fromRGBA(0x5c7f2cff),
        Color::fromRGBA(0x5c7f2cff),
        Color::fromRGBA(0x5c7f2cff),
        Color::fromRGBA(0x5c7f2cff),
        Color::fromRGBA(0x5c7f2cff),
        Color::fromRGBA(0x5c7f2cff),
        Color::fromRGBA(0x5c7f2cff),
        Color::fromRGBA(0x5c7f2cff),
        Color::fromRGBA(0x1c5e3dff),
        Color::fromRGBA(0x1c5e3dff),
        Color::fromRGBA(0x1c5e3dff),
        Color::fromRGBA(0x1c5e3dff),
        Color::fromRGBA(0x1c5e3dff),
        Color::fromRGBA(0x1c5e3dff),
        Color::fromRGBA(0x1c5e3dff),
        Color::fromRGBA(0x1c5e3dff),
        Color::fromRGBA(0x1c5e3dff),
        Color::fromRGBA(0x1c5e3dff),
        Color::fromRGBA(0x1c5e3dff),
        Color::fromRGBA(0x1c5e3dff),
        Color::fromRGBA(0x1c5e3dff),
        Color::fromRGBA(0x1c5e3dff),
        Color::fromRGBA(0x1c5e3dff),
        Color::fromRGBA(0x1c5e3dff),
        Color::fromRGBA(0x20603dfd),
        Color::fromRGBA(0x20603dfd),
        Color::fromRGBA(0x20603dfd),
        Color::fromRGBA(0x20603dfd),
        Color::fromRGBA(0x20603dfd),
        Color::fromRGBA(0x20603dfd),
        Color::fromRGBA(0x20603dfd),
        Color::fromRGBA(0x20603dfd),
        Color::fromRGBA(0x20603dfd),
        Color::fromRGBA(0x20603dfd),
        Color::fromRGBA(0x20603dfd),
        Color::fromRGBA(0x20603dfd),
        Color::fromRGBA(0x20603dfd),
        Color::fromRGBA(0x20603dfd),
        Color::fromRGBA(0x20603dfd),
        Color::fromRGBA(0x20603dfd)
    ],
    '32x21' => [
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x03a1dbff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x03a1daff),
        Color::fromRGBA(0x0ba2d2ff),
        Color::fromRGBA(0x0ea2d0ff),
        Color::fromRGBA(0x07a1d6ff),
        Color::fromRGBA(0x01a1ddff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a1ddff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x05a1d9ff),
        Color::fromRGBA(0x1da4c1ff),
        Color::fromRGBA(0x3fa9a0ff),
        Color::fromRGBA(0x48aa98ff),
        Color::fromRGBA(0x30a7afff),
        Color::fromRGBA(0x0fa2ceff),
        Color::fromRGBA(0x01a1ddff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a1ddff),
        Color::fromRGBA(0x12a3ccff),
        Color::fromRGBA(0x4aaa96ff),
        Color::fromRGBA(0x96b44cff),
        Color::fromRGBA(0xabb638ff),
        Color::fromRGBA(0x74af6dff),
        Color::fromRGBA(0x2aa6b4ff),
        Color::fromRGBA(0x06a1d8ff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x01a1ddff),
        Color::fromRGBA(0x19a4c5ff),
        Color::fromRGBA(0x61ad80ff),
        Color::fromRGBA(0xc2b922ff),
        Color::fromRGBA(0xdfbd06ff),
        Color::fromRGBA(0x98b44bff),
        Color::fromRGBA(0x38a8a7ff),
        Color::fromRGBA(0x09a2d5ff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a1ddff),
        Color::fromRGBA(0x11a3ccff),
        Color::fromRGBA(0x49aa96ff),
        Color::fromRGBA(0x95b34dff),
        Color::fromRGBA(0xabb638ff),
        Color::fromRGBA(0x74af6dff),
        Color::fromRGBA(0x2aa6b4ff),
        Color::fromRGBA(0x06a1d8ff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x04a1d9ff),
        Color::fromRGBA(0x1da4c1ff),
        Color::fromRGBA(0x3ea8a1ff),
        Color::fromRGBA(0x48aa98ff),
        Color::fromRGBA(0x2fa7afff),
        Color::fromRGBA(0x0fa2ceff),
        Color::fromRGBA(0x01a1ddff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x03a1daff),
        Color::fromRGBA(0x0ba2d3ff),
        Color::fromRGBA(0x0ea2d0ff),
        Color::fromRGBA(0x07a1d6ff),
        Color::fromRGBA(0x01a1ddff),
        Color::fromRGBA(0x00a0deff),
        Color::fromRGBA(0x00a1ddff),
        Color::fromRGBA(0x00a1deff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e1ff),
        Color::fromRGBA(0x00a0e1ff),
        Color::fromRGBA(0x00a0e1ff),
        Color::fromRGBA(0x00a0e1ff),
        Color::fromRGBA(0x00a0e1ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x00a0e0ff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7cb96fff),
        Color::fromRGBA(0x7cb96fff),
        Color::fromRGBA(0x7cb96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0x7db96fff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfdd200ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfad201ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xfdd300ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0xb9b012ff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x24623bff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x1f5f3dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dff),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe),
        Color::fromRGBA(0x20603dfe)
    ],
];

$img = new Image(16, 11);
$img->append($pixels['16x11'], new Size(16, 11));
$img->append($pixels['32x21'], new Size(32, 21));

return $img;
