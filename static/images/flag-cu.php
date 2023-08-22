<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x8' => [
        Color::fromRGBA(0x991944ff),
        Color::fromRGBA(0x26257cff),
        Color::fromRGBA(0x002c97ff),
        Color::fromRGBA(0x011e8aff),
        Color::fromRGBA(0x001582ff),
        Color::fromRGBA(0x001986ff),
        Color::fromRGBA(0x001986ff),
        Color::fromRGBA(0x001986ff),
        Color::fromRGBA(0x001986ff),
        Color::fromRGBA(0x001986ff),
        Color::fromRGBA(0x001986ff),
        Color::fromRGBA(0x001986ff),
        Color::fromRGBA(0x001986ff),
        Color::fromRGBA(0x001986ff),
        Color::fromRGBA(0x001986ff),
        Color::fromRGBA(0x001986ff),
        Color::fromRGBA(0xd81326ff),
        Color::fromRGBA(0xcb152dff),
        Color::fromRGBA(0x72205aff),
        Color::fromRGBA(0x5c6cadff),
        Color::fromRGBA(0x688ecaff),
        Color::fromRGBA(0x657ebaff),
        Color::fromRGBA(0x647bb9ff),
        Color::fromRGBA(0x627cbaff),
        Color::fromRGBA(0x627cbaff),
        Color::fromRGBA(0x627cbaff),
        Color::fromRGBA(0x627cbaff),
        Color::fromRGBA(0x627cbaff),
        Color::fromRGBA(0x627cbaff),
        Color::fromRGBA(0x627cbaff),
        Color::fromRGBA(0x627cbaff),
        Color::fromRGBA(0x627cbaff),
        Color::fromRGBA(0xcc152cff),
        Color::fromRGBA(0xcf0e25ff),
        Color::fromRGBA(0xdb0719ff),
        Color::fromRGBA(0xe53340ff),
        Color::fromRGBA(0xfbb2b3ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfffefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xcd0b22ff),
        Color::fromRGBA(0xda4e5fff),
        Color::fromRGBA(0xeaa5afff),
        Color::fromRGBA(0xcb162eff),
        Color::fromRGBA(0xc9031cff),
        Color::fromRGBA(0xca2d45ff),
        Color::fromRGBA(0x624684ff),
        Color::fromRGBA(0x214aa2ff),
        Color::fromRGBA(0x284a9fff),
        Color::fromRGBA(0x264a9fff),
        Color::fromRGBA(0x264aa0ff),
        Color::fromRGBA(0x264aa0ff),
        Color::fromRGBA(0x264aa0ff),
        Color::fromRGBA(0x264aa0ff),
        Color::fromRGBA(0x264aa0ff),
        Color::fromRGBA(0x264aa0ff),
        Color::fromRGBA(0xcc0820ff),
        Color::fromRGBA(0xda4d5fff),
        Color::fromRGBA(0xeaa8b2ff),
        Color::fromRGBA(0xcb142cff),
        Color::fromRGBA(0xc9021cff),
        Color::fromRGBA(0xca2d45ff),
        Color::fromRGBA(0x624685ff),
        Color::fromRGBA(0x214aa2ff),
        Color::fromRGBA(0x284a9fff),
        Color::fromRGBA(0x264a9fff),
        Color::fromRGBA(0x264aa0ff),
        Color::fromRGBA(0x264aa0ff),
        Color::fromRGBA(0x264aa0ff),
        Color::fromRGBA(0x264aa0ff),
        Color::fromRGBA(0x264aa0ff),
        Color::fromRGBA(0x264aa0ff),
        Color::fromRGBA(0xcc152cff),
        Color::fromRGBA(0xd01027ff),
        Color::fromRGBA(0xda0416ff),
        Color::fromRGBA(0xe63643ff),
        Color::fromRGBA(0xfbb2b3ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfffefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xd81326ff),
        Color::fromRGBA(0xcb142cff),
        Color::fromRGBA(0x72215bff),
        Color::fromRGBA(0x5c6cacff),
        Color::fromRGBA(0x688fcaff),
        Color::fromRGBA(0x657dbaff),
        Color::fromRGBA(0x647bb9ff),
        Color::fromRGBA(0x627cbaff),
        Color::fromRGBA(0x627cbaff),
        Color::fromRGBA(0x627cbaff),
        Color::fromRGBA(0x627cbaff),
        Color::fromRGBA(0x627cbaff),
        Color::fromRGBA(0x627cbaff),
        Color::fromRGBA(0x627cbaff),
        Color::fromRGBA(0x627cbaff),
        Color::fromRGBA(0x627cbaff),
        Color::fromRGBA(0x991944ff),
        Color::fromRGBA(0x26257cff),
        Color::fromRGBA(0x002c97ff),
        Color::fromRGBA(0x011e8aff),
        Color::fromRGBA(0x001582ff),
        Color::fromRGBA(0x001986ff),
        Color::fromRGBA(0x001986ff),
        Color::fromRGBA(0x001986ff),
        Color::fromRGBA(0x001986ff),
        Color::fromRGBA(0x001986ff),
        Color::fromRGBA(0x001986ff),
        Color::fromRGBA(0x001986ff),
        Color::fromRGBA(0x001986ff),
        Color::fromRGBA(0x001986ff),
        Color::fromRGBA(0x001986ff),
        Color::fromRGBA(0x001986ff)
    ],
    '32x16' => [
        Color::fromRGBA(0x9a1944ff),
        Color::fromRGBA(0x26257cff),
        Color::fromRGBA(0x002b97ff),
        Color::fromRGBA(0x012a90ff),
        Color::fromRGBA(0x03298dff),
        Color::fromRGBA(0x002a8eff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0xd81326ff),
        Color::fromRGBA(0xcc142cff),
        Color::fromRGBA(0x701e58ff),
        Color::fromRGBA(0x0d2889ff),
        Color::fromRGBA(0x002b96ff),
        Color::fromRGBA(0x01298eff),
        Color::fromRGBA(0x00288cff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0xcc142cff),
        Color::fromRGBA(0xd0132aff),
        Color::fromRGBA(0xdf1223ff),
        Color::fromRGBA(0xbf1532ff),
        Color::fromRGBA(0x522066ff),
        Color::fromRGBA(0x022d92ff),
        Color::fromRGBA(0x003097ff),
        Color::fromRGBA(0x002189ff),
        Color::fromRGBA(0x00228aff),
        Color::fromRGBA(0x00248cff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0xcf132aff),
        Color::fromRGBA(0xce142bff),
        Color::fromRGBA(0xcb142cff),
        Color::fromRGBA(0xd41429ff),
        Color::fromRGBA(0xdb1123ff),
        Color::fromRGBA(0xb12143ff),
        Color::fromRGBA(0xb992afff),
        Color::fromRGBA(0xcbe0f4ff),
        Color::fromRGBA(0xc9d8edff),
        Color::fromRGBA(0xc7cde3ff),
        Color::fromRGBA(0xc8d0e6ff),
        Color::fromRGBA(0xc8d1e7ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xcf142bff),
        Color::fromRGBA(0xce132bff),
        Color::fromRGBA(0xcf132aff),
        Color::fromRGBA(0xcd142bff),
        Color::fromRGBA(0xcc132bff),
        Color::fromRGBA(0xd51025ff),
        Color::fromRGBA(0xd91427ff),
        Color::fromRGBA(0xeb6c77ff),
        Color::fromRGBA(0xfee7e7ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefdfeff),
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
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xce132aff),
        Color::fromRGBA(0xcf142bff),
        Color::fromRGBA(0xce132aff),
        Color::fromRGBA(0xce132aff),
        Color::fromRGBA(0xd01c32ff),
        Color::fromRGBA(0xcd162dff),
        Color::fromRGBA(0xcc122aff),
        Color::fromRGBA(0xc9021cff),
        Color::fromRGBA(0xcd152dff),
        Color::fromRGBA(0xe38491ff),
        Color::fromRGBA(0xfaf1f3ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
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
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xcf142bff),
        Color::fromRGBA(0xce132aff),
        Color::fromRGBA(0xcf182fff),
        Color::fromRGBA(0xcc0921ff),
        Color::fromRGBA(0xe88f9aff),
        Color::fromRGBA(0xd22238ff),
        Color::fromRGBA(0xce1128ff),
        Color::fromRGBA(0xcf182fff),
        Color::fromRGBA(0xce1229ff),
        Color::fromRGBA(0xca011aff),
        Color::fromRGBA(0xd93244ff),
        Color::fromRGBA(0xb37998ff),
        Color::fromRGBA(0x5c7fc0ff),
        Color::fromRGBA(0x5b80c0ff),
        Color::fromRGBA(0x677fbbff),
        Color::fromRGBA(0x657fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0xcf152cff),
        Color::fromRGBA(0xcd0e25ff),
        Color::fromRGBA(0xd6384cff),
        Color::fromRGBA(0xefb0b8ff),
        Color::fromRGBA(0xfcf4f5ff),
        Color::fromRGBA(0xf3c8cdff),
        Color::fromRGBA(0xdc5465ff),
        Color::fromRGBA(0xcd0d25ff),
        Color::fromRGBA(0xcf162dff),
        Color::fromRGBA(0xcf172eff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcb061fff),
        Color::fromRGBA(0x9c0c36ff),
        Color::fromRGBA(0x261971ff),
        Color::fromRGBA(0x001f8bff),
        Color::fromRGBA(0x011e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0xcf142bff),
        Color::fromRGBA(0xcf172dff),
        Color::fromRGBA(0xcb031cff),
        Color::fromRGBA(0xe47e8bff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xefb1b9ff),
        Color::fromRGBA(0xcc0921ff),
        Color::fromRGBA(0xcf152cff),
        Color::fromRGBA(0xcf152bff),
        Color::fromRGBA(0xcf172eff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcb061fff),
        Color::fromRGBA(0x9c0c36ff),
        Color::fromRGBA(0x261971ff),
        Color::fromRGBA(0x001f8bff),
        Color::fromRGBA(0x011e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0x001e88ff),
        Color::fromRGBA(0xcf142bff),
        Color::fromRGBA(0xcf152cff),
        Color::fromRGBA(0xcd0e25ff),
        Color::fromRGBA(0xdf6473ff),
        Color::fromRGBA(0xd84355ff),
        Color::fromRGBA(0xe06978ff),
        Color::fromRGBA(0xd01b32ff),
        Color::fromRGBA(0xcf162cff),
        Color::fromRGBA(0xce1229ff),
        Color::fromRGBA(0xca011aff),
        Color::fromRGBA(0xd93244ff),
        Color::fromRGBA(0xb37998ff),
        Color::fromRGBA(0x5c7fc0ff),
        Color::fromRGBA(0x5b80c0ff),
        Color::fromRGBA(0x677fbbff),
        Color::fromRGBA(0x657fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0x667fbbff),
        Color::fromRGBA(0xcf142bff),
        Color::fromRGBA(0xce132aff),
        Color::fromRGBA(0xcf152cff),
        Color::fromRGBA(0xce0f26ff),
        Color::fromRGBA(0xcc0820ff),
        Color::fromRGBA(0xcc0d25ff),
        Color::fromRGBA(0xcd152dff),
        Color::fromRGBA(0xc9021bff),
        Color::fromRGBA(0xcd152dff),
        Color::fromRGBA(0xe38491ff),
        Color::fromRGBA(0xfaf1f3ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
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
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xce132bff),
        Color::fromRGBA(0xce142bff),
        Color::fromRGBA(0xcf132aff),
        Color::fromRGBA(0xcd152cff),
        Color::fromRGBA(0xcc172fff),
        Color::fromRGBA(0xd51226ff),
        Color::fromRGBA(0xd91427ff),
        Color::fromRGBA(0xeb6c77ff),
        Color::fromRGBA(0xfee7e7ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefdfeff),
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
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xcf132aff),
        Color::fromRGBA(0xce142bff),
        Color::fromRGBA(0xcb142cff),
        Color::fromRGBA(0xd41429ff),
        Color::fromRGBA(0xdb1023ff),
        Color::fromRGBA(0xb12143ff),
        Color::fromRGBA(0xb992afff),
        Color::fromRGBA(0xcbe0f4ff),
        Color::fromRGBA(0xc9d8edff),
        Color::fromRGBA(0xc7cde3ff),
        Color::fromRGBA(0xc8d0e6ff),
        Color::fromRGBA(0xc8d1e7ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xc8d1e6ff),
        Color::fromRGBA(0xcc142cff),
        Color::fromRGBA(0xd0132aff),
        Color::fromRGBA(0xdf1223ff),
        Color::fromRGBA(0xbf1532ff),
        Color::fromRGBA(0x522066ff),
        Color::fromRGBA(0x022d92ff),
        Color::fromRGBA(0x003097ff),
        Color::fromRGBA(0x002189ff),
        Color::fromRGBA(0x00228aff),
        Color::fromRGBA(0x00248cff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0x00248bff),
        Color::fromRGBA(0xd81326ff),
        Color::fromRGBA(0xcb142cff),
        Color::fromRGBA(0x701e58ff),
        Color::fromRGBA(0x0d2889ff),
        Color::fromRGBA(0x002b96ff),
        Color::fromRGBA(0x01298eff),
        Color::fromRGBA(0x00288cff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x012b8fff),
        Color::fromRGBA(0x991944ff),
        Color::fromRGBA(0x26257cff),
        Color::fromRGBA(0x002b97ff),
        Color::fromRGBA(0x012a90ff),
        Color::fromRGBA(0x03298dff),
        Color::fromRGBA(0x002a8eff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff),
        Color::fromRGBA(0x002a8fff)
    ],
];

$img = new Image(16, 8);
$img->append($pixels['16x8'], new Size(16, 8));
$img->append($pixels['32x16'], new Size(32, 16));

return $img;