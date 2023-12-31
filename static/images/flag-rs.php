<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x11' => [
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe30046ff),
        Color::fromRGBA(0xe40045ff),
        Color::fromRGBA(0xe40045ff),
        Color::fromRGBA(0xe20245ff),
        Color::fromRGBA(0xe30045ff),
        Color::fromRGBA(0xe40045ff),
        Color::fromRGBA(0xe30046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40045ff),
        Color::fromRGBA(0xe30247ff),
        Color::fromRGBA(0xda1b50ff),
        Color::fromRGBA(0xc9334fff),
        Color::fromRGBA(0xd32551ff),
        Color::fromRGBA(0xe00b4aff),
        Color::fromRGBA(0xe40045ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe70045ff),
        Color::fromRGBA(0xe70045ff),
        Color::fromRGBA(0xe80045ff),
        Color::fromRGBA(0xe30848ff),
        Color::fromRGBA(0xc5474bff),
        Color::fromRGBA(0xc15a42ff),
        Color::fromRGBA(0xbf5646ff),
        Color::fromRGBA(0xd6204bff),
        Color::fromRGBA(0xe80045ff),
        Color::fromRGBA(0xe70045ff),
        Color::fromRGBA(0xe70045ff),
        Color::fromRGBA(0xe70045ff),
        Color::fromRGBA(0xe70045ff),
        Color::fromRGBA(0xe70045ff),
        Color::fromRGBA(0xe70045ff),
        Color::fromRGBA(0xe70045ff),
        Color::fromRGBA(0x930b52ff),
        Color::fromRGBA(0x930b52ff),
        Color::fromRGBA(0x910b52ff),
        Color::fromRGBA(0xad0e53ff),
        Color::fromRGBA(0xce494dff),
        Color::fromRGBA(0xc87e4cff),
        Color::fromRGBA(0xca6b4aff),
        Color::fromRGBA(0xc51c53ff),
        Color::fromRGBA(0x950b52ff),
        Color::fromRGBA(0x930b52ff),
        Color::fromRGBA(0x930b52ff),
        Color::fromRGBA(0x930b52ff),
        Color::fromRGBA(0x930b52ff),
        Color::fromRGBA(0x930b52ff),
        Color::fromRGBA(0x930b52ff),
        Color::fromRGBA(0x930b52ff),
        Color::fromRGBA(0x022068ff),
        Color::fromRGBA(0x022068ff),
        Color::fromRGBA(0x001e67ff),
        Color::fromRGBA(0x4d457fff),
        Color::fromRGBA(0xde7d92ff),
        Color::fromRGBA(0xdf94a1ff),
        Color::fromRGBA(0xe17b8bff),
        Color::fromRGBA(0xa07096ff),
        Color::fromRGBA(0x062169ff),
        Color::fromRGBA(0x022068ff),
        Color::fromRGBA(0x022068ff),
        Color::fromRGBA(0x022068ff),
        Color::fromRGBA(0x022068ff),
        Color::fromRGBA(0x022068ff),
        Color::fromRGBA(0x022068ff),
        Color::fromRGBA(0x022068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x001d67ff),
        Color::fromRGBA(0x495588ff),
        Color::fromRGBA(0xd8bac4ff),
        Color::fromRGBA(0xd895a9ff),
        Color::fromRGBA(0xdba4b3ff),
        Color::fromRGBA(0x9a98b1ff),
        Color::fromRGBA(0x052269ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x03226aff),
        Color::fromRGBA(0x03226aff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x4b4b81ff),
        Color::fromRGBA(0xd9bcc5ff),
        Color::fromRGBA(0xdb99adff),
        Color::fromRGBA(0xdbadbaff),
        Color::fromRGBA(0x9c8caaff),
        Color::fromRGBA(0x072269ff),
        Color::fromRGBA(0x02226aff),
        Color::fromRGBA(0x03226aff),
        Color::fromRGBA(0x03226aff),
        Color::fromRGBA(0x03226aff),
        Color::fromRGBA(0x03226aff),
        Color::fromRGBA(0x03226aff),
        Color::fromRGBA(0x03226aff),
        Color::fromRGBA(0xa6b1caff),
        Color::fromRGBA(0xa6b1caff),
        Color::fromRGBA(0xa5b2cbff),
        Color::fromRGBA(0xbaa5bcff),
        Color::fromRGBA(0xd37e80ff),
        Color::fromRGBA(0xd38e9fff),
        Color::fromRGBA(0xd27d83ff),
        Color::fromRGBA(0xcb94a1ff),
        Color::fromRGBA(0xa8b1cbff),
        Color::fromRGBA(0xa6b1caff),
        Color::fromRGBA(0xa6b1caff),
        Color::fromRGBA(0xa6b1caff),
        Color::fromRGBA(0xa6b1caff),
        Color::fromRGBA(0xa6b1caff),
        Color::fromRGBA(0xa6b1caff),
        Color::fromRGBA(0xa6b1caff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfcf3f4ff),
        Color::fromRGBA(0xe49592ff),
        Color::fromRGBA(0xe1b6bcff),
        Color::fromRGBA(0xdf9190ff),
        Color::fromRGBA(0xf4cfceff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdf6f8ff),
        Color::fromRGBA(0xf9e5ebff),
        Color::fromRGBA(0xfbedf1ff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfeffffff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xfefdfeff)
    ],
    '32x21' => [
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe30046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40045ff),
        Color::fromRGBA(0xe30045ff),
        Color::fromRGBA(0xe10643ff),
        Color::fromRGBA(0xe40045ff),
        Color::fromRGBA(0xe40045ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe30046ff),
        Color::fromRGBA(0xe40045ff),
        Color::fromRGBA(0xe40045ff),
        Color::fromRGBA(0xe20549ff),
        Color::fromRGBA(0xd6184cff),
        Color::fromRGBA(0xb73844ff),
        Color::fromRGBA(0xdb134dff),
        Color::fromRGBA(0xe20348ff),
        Color::fromRGBA(0xe40045ff),
        Color::fromRGBA(0xe40045ff),
        Color::fromRGBA(0xe30046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40045ff),
        Color::fromRGBA(0xe20548ff),
        Color::fromRGBA(0xd33159ff),
        Color::fromRGBA(0xc95465ff),
        Color::fromRGBA(0xc93b55ff),
        Color::fromRGBA(0xb5705dff),
        Color::fromRGBA(0xcb3856ff),
        Color::fromRGBA(0xc85566ff),
        Color::fromRGBA(0xd62956ff),
        Color::fromRGBA(0xe30247ff),
        Color::fromRGBA(0xe40045ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40045ff),
        Color::fromRGBA(0xde124eff),
        Color::fromRGBA(0xc54d56ff),
        Color::fromRGBA(0xbe594fff),
        Color::fromRGBA(0xd02946ff),
        Color::fromRGBA(0xc1644aff),
        Color::fromRGBA(0xcf2a45ff),
        Color::fromRGBA(0xbe5a51ff),
        Color::fromRGBA(0xc74958ff),
        Color::fromRGBA(0xe10a4bff),
        Color::fromRGBA(0xe40045ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe40046ff),
        Color::fromRGBA(0xe50045ff),
        Color::fromRGBA(0xe50045ff),
        Color::fromRGBA(0xe50045ff),
        Color::fromRGBA(0xe50045ff),
        Color::fromRGBA(0xe50045ff),
        Color::fromRGBA(0xe50045ff),
        Color::fromRGBA(0xe50045ff),
        Color::fromRGBA(0xe40146ff),
        Color::fromRGBA(0xc52a43ff),
        Color::fromRGBA(0xb26d36ff),
        Color::fromRGBA(0xc16d38ff),
        Color::fromRGBA(0xbb6f32ff),
        Color::fromRGBA(0xbf6f37ff),
        Color::fromRGBA(0xb26739ff),
        Color::fromRGBA(0xcb2044ff),
        Color::fromRGBA(0xe50046ff),
        Color::fromRGBA(0xe50045ff),
        Color::fromRGBA(0xe50045ff),
        Color::fromRGBA(0xe50045ff),
        Color::fromRGBA(0xe50045ff),
        Color::fromRGBA(0xe50045ff),
        Color::fromRGBA(0xe50045ff),
        Color::fromRGBA(0xe50045ff),
        Color::fromRGBA(0xe50045ff),
        Color::fromRGBA(0xe50045ff),
        Color::fromRGBA(0xe50045ff),
        Color::fromRGBA(0xe50045ff),
        Color::fromRGBA(0xe50045ff),
        Color::fromRGBA(0xe50045ff),
        Color::fromRGBA(0xe50045ff),
        Color::fromRGBA(0xe50045ff),
        Color::fromRGBA(0xe50045ff),
        Color::fromRGBA(0xc9034aff),
        Color::fromRGBA(0xc9034aff),
        Color::fromRGBA(0xc9034aff),
        Color::fromRGBA(0xc9034aff),
        Color::fromRGBA(0xc9034aff),
        Color::fromRGBA(0xc9034aff),
        Color::fromRGBA(0xc9034aff),
        Color::fromRGBA(0xda064bff),
        Color::fromRGBA(0xd81147ff),
        Color::fromRGBA(0xbe733bff),
        Color::fromRGBA(0xc68436ff),
        Color::fromRGBA(0xb98337ff),
        Color::fromRGBA(0xc78436ff),
        Color::fromRGBA(0xbe673dff),
        Color::fromRGBA(0xdd0948ff),
        Color::fromRGBA(0xd6064bff),
        Color::fromRGBA(0xc9034aff),
        Color::fromRGBA(0xc9034aff),
        Color::fromRGBA(0xc9034aff),
        Color::fromRGBA(0xc9034aff),
        Color::fromRGBA(0xc9034aff),
        Color::fromRGBA(0xc9034aff),
        Color::fromRGBA(0xc9034aff),
        Color::fromRGBA(0xc9034aff),
        Color::fromRGBA(0xc9034aff),
        Color::fromRGBA(0xc9034aff),
        Color::fromRGBA(0xc9034aff),
        Color::fromRGBA(0xc9034aff),
        Color::fromRGBA(0xc9034aff),
        Color::fromRGBA(0xc9034aff),
        Color::fromRGBA(0xc9034aff),
        Color::fromRGBA(0xc9034aff),
        Color::fromRGBA(0x1d1c64ff),
        Color::fromRGBA(0x1d1c64ff),
        Color::fromRGBA(0x1d1c64ff),
        Color::fromRGBA(0x1d1c64ff),
        Color::fromRGBA(0x1d1c64ff),
        Color::fromRGBA(0x1d1c64ff),
        Color::fromRGBA(0x1d1d65ff),
        Color::fromRGBA(0x932464ff),
        Color::fromRGBA(0xe6527eff),
        Color::fromRGBA(0xd35b50ff),
        Color::fromRGBA(0xd68c85ff),
        Color::fromRGBA(0xdd5e77ff),
        Color::fromRGBA(0xd48e7fff),
        Color::fromRGBA(0xd55453ff),
        Color::fromRGBA(0xe64e7dff),
        Color::fromRGBA(0x7a2162ff),
        Color::fromRGBA(0x1c1d65ff),
        Color::fromRGBA(0x1d1c64ff),
        Color::fromRGBA(0x1d1c64ff),
        Color::fromRGBA(0x1d1c64ff),
        Color::fromRGBA(0x1d1c64ff),
        Color::fromRGBA(0x1d1c64ff),
        Color::fromRGBA(0x1d1c64ff),
        Color::fromRGBA(0x1d1c64ff),
        Color::fromRGBA(0x1d1c64ff),
        Color::fromRGBA(0x1d1c64ff),
        Color::fromRGBA(0x1d1c64ff),
        Color::fromRGBA(0x1d1c64ff),
        Color::fromRGBA(0x1d1c64ff),
        Color::fromRGBA(0x1d1c64ff),
        Color::fromRGBA(0x1d1c64ff),
        Color::fromRGBA(0x1d1c64ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x001f68ff),
        Color::fromRGBA(0x885a89ff),
        Color::fromRGBA(0xf0bac9ff),
        Color::fromRGBA(0xd92f4fff),
        Color::fromRGBA(0xe19398ff),
        Color::fromRGBA(0xedcbd7ff),
        Color::fromRGBA(0xdd7d84ff),
        Color::fromRGBA(0xdb3a5cff),
        Color::fromRGBA(0xefc0ceff),
        Color::fromRGBA(0x6a467dff),
        Color::fromRGBA(0x001f68ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x001e67ff),
        Color::fromRGBA(0x84779cff),
        Color::fromRGBA(0xe6e3e2ff),
        Color::fromRGBA(0xde7e9cff),
        Color::fromRGBA(0xd77c97ff),
        Color::fromRGBA(0xdfd3d6ff),
        Color::fromRGBA(0xd66a8bff),
        Color::fromRGBA(0xe094abff),
        Color::fromRGBA(0xe4e0e0ff),
        Color::fromRGBA(0x67608eff),
        Color::fromRGBA(0x001e67ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x001e67ff),
        Color::fromRGBA(0x84779cff),
        Color::fromRGBA(0xe4e4e2ff),
        Color::fromRGBA(0xd2aeb8ff),
        Color::fromRGBA(0xca6482ff),
        Color::fromRGBA(0xdda2b4ff),
        Color::fromRGBA(0xc8607eff),
        Color::fromRGBA(0xd6c0c6ff),
        Color::fromRGBA(0xe2dedeff),
        Color::fromRGBA(0x67608eff),
        Color::fromRGBA(0x001e67ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x001e67ff),
        Color::fromRGBA(0x816c94ff),
        Color::fromRGBA(0xe2e0deff),
        Color::fromRGBA(0xd9c5caff),
        Color::fromRGBA(0xdea0b2ff),
        Color::fromRGBA(0xedc9d4ff),
        Color::fromRGBA(0xdb9caeff),
        Color::fromRGBA(0xdbcfd2ff),
        Color::fromRGBA(0xdfd8d9ff),
        Color::fromRGBA(0x665787ff),
        Color::fromRGBA(0x001e67ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x001f67ff),
        Color::fromRGBA(0x001f67ff),
        Color::fromRGBA(0x001f67ff),
        Color::fromRGBA(0x001f67ff),
        Color::fromRGBA(0x001f67ff),
        Color::fromRGBA(0x001f67ff),
        Color::fromRGBA(0x001d66ff),
        Color::fromRGBA(0x835c89ff),
        Color::fromRGBA(0xeae3e3ff),
        Color::fromRGBA(0xd6b3bdff),
        Color::fromRGBA(0xd27d96ff),
        Color::fromRGBA(0xe7b3c3ff),
        Color::fromRGBA(0xcf7992ff),
        Color::fromRGBA(0xdbc3caff),
        Color::fromRGBA(0xe7d9dcff),
        Color::fromRGBA(0x66487eff),
        Color::fromRGBA(0x001d66ff),
        Color::fromRGBA(0x001f67ff),
        Color::fromRGBA(0x001f67ff),
        Color::fromRGBA(0x001f67ff),
        Color::fromRGBA(0x001f67ff),
        Color::fromRGBA(0x001f67ff),
        Color::fromRGBA(0x001f67ff),
        Color::fromRGBA(0x001f67ff),
        Color::fromRGBA(0x001f67ff),
        Color::fromRGBA(0x001f67ff),
        Color::fromRGBA(0x001f67ff),
        Color::fromRGBA(0x001f67ff),
        Color::fromRGBA(0x001f67ff),
        Color::fromRGBA(0x001f67ff),
        Color::fromRGBA(0x001f67ff),
        Color::fromRGBA(0x001f67ff),
        Color::fromRGBA(0x233f7dff),
        Color::fromRGBA(0x233f7dff),
        Color::fromRGBA(0x233f7dff),
        Color::fromRGBA(0x233f7dff),
        Color::fromRGBA(0x233f7dff),
        Color::fromRGBA(0x233f7dff),
        Color::fromRGBA(0x223d7cff),
        Color::fromRGBA(0x935988ff),
        Color::fromRGBA(0xe5c8d0ff),
        Color::fromRGBA(0xcfa6b0ff),
        Color::fromRGBA(0xca718bff),
        Color::fromRGBA(0xdc94a9ff),
        Color::fromRGBA(0xc9758dff),
        Color::fromRGBA(0xd2adb5ff),
        Color::fromRGBA(0xe5c1cbff),
        Color::fromRGBA(0x7b4c81ff),
        Color::fromRGBA(0x223e7dff),
        Color::fromRGBA(0x233f7dff),
        Color::fromRGBA(0x233f7dff),
        Color::fromRGBA(0x233f7dff),
        Color::fromRGBA(0x233f7dff),
        Color::fromRGBA(0x233f7dff),
        Color::fromRGBA(0x233f7dff),
        Color::fromRGBA(0x233f7dff),
        Color::fromRGBA(0x233f7dff),
        Color::fromRGBA(0x233f7dff),
        Color::fromRGBA(0x233f7dff),
        Color::fromRGBA(0x233f7dff),
        Color::fromRGBA(0x233f7dff),
        Color::fromRGBA(0x233f7dff),
        Color::fromRGBA(0x233f7dff),
        Color::fromRGBA(0x233f7dff),
        Color::fromRGBA(0xe3e7eeff),
        Color::fromRGBA(0xe3e7eeff),
        Color::fromRGBA(0xe3e7eeff),
        Color::fromRGBA(0xe3e7eeff),
        Color::fromRGBA(0xe3e7eeff),
        Color::fromRGBA(0xe3e7eeff),
        Color::fromRGBA(0xe3e7eeff),
        Color::fromRGBA(0xe3adbfff),
        Color::fromRGBA(0xd0726cff),
        Color::fromRGBA(0xcb615dff),
        Color::fromRGBA(0xd56c8bff),
        Color::fromRGBA(0xd0bfc4ff),
        Color::fromRGBA(0xd56081ff),
        Color::fromRGBA(0xca6459ff),
        Color::fromRGBA(0xd37575ff),
        Color::fromRGBA(0xe5bbccff),
        Color::fromRGBA(0xe3e7eeff),
        Color::fromRGBA(0xe3e7eeff),
        Color::fromRGBA(0xe3e7eeff),
        Color::fromRGBA(0xe3e7eeff),
        Color::fromRGBA(0xe3e7eeff),
        Color::fromRGBA(0xe3e7eeff),
        Color::fromRGBA(0xe3e7eeff),
        Color::fromRGBA(0xe3e7eeff),
        Color::fromRGBA(0xe3e7eeff),
        Color::fromRGBA(0xe3e7eeff),
        Color::fromRGBA(0xe3e7eeff),
        Color::fromRGBA(0xe3e7eeff),
        Color::fromRGBA(0xe3e7eeff),
        Color::fromRGBA(0xe3e7eeff),
        Color::fromRGBA(0xe3e7eeff),
        Color::fromRGBA(0xe3e7eeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfae2e7ff),
        Color::fromRGBA(0xd66558ff),
        Color::fromRGBA(0xd35731ff),
        Color::fromRGBA(0xde9aa5ff),
        Color::fromRGBA(0xe0e6e5ff),
        Color::fromRGBA(0xdc8791ff),
        Color::fromRGBA(0xd2572dff),
        Color::fromRGBA(0xdb716bff),
        Color::fromRGBA(0xfdeff2ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xf4c0cbff),
        Color::fromRGBA(0xd96a6bff),
        Color::fromRGBA(0xe1b7bfff),
        Color::fromRGBA(0xe4dbdeff),
        Color::fromRGBA(0xe0a8b1ff),
        Color::fromRGBA(0xdc6d6eff),
        Color::fromRGBA(0xf8d0daff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfbe3ebff),
        Color::fromRGBA(0xf2c2d1ff),
        Color::fromRGBA(0xefb9c9ff),
        Color::fromRGBA(0xf3c6d4ff),
        Color::fromRGBA(0xfce9f0ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff),
        Color::fromRGBA(0xfdfcfdff)
    ],
];

$img = new Image(16, 11);
$img->append($pixels['16x11'], new Size(16, 11));
$img->append($pixels['32x21'], new Size(32, 21));

return $img;
