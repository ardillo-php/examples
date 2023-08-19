<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x10' => [
        Color::fromRGBA(0x59240fff),
        Color::fromRGBA(0x8e0026ff),
        Color::fromRGBA(0xd90a37ff),
        Color::fromRGBA(0xde1436ff),
        Color::fromRGBA(0xce1033ff),
        Color::fromRGBA(0xd00f33ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd11033ff),
        Color::fromRGBA(0xd11034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0x766606ff),
        Color::fromRGBA(0x766108ff),
        Color::fromRGBA(0x671d14ff),
        Color::fromRGBA(0xa0002aff),
        Color::fromRGBA(0xdc0d37ff),
        Color::fromRGBA(0xda1335ff),
        Color::fromRGBA(0xce0f33ff),
        Color::fromRGBA(0xd00f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0xd10f33ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x282102ff),
        Color::fromRGBA(0x6d6405ff),
        Color::fromRGBA(0x6c5807ff),
        Color::fromRGBA(0x661316ff),
        Color::fromRGBA(0xaa002dff),
        Color::fromRGBA(0xdf1037ff),
        Color::fromRGBA(0xda1335ff),
        Color::fromRGBA(0xd51234ff),
        Color::fromRGBA(0xd61234ff),
        Color::fromRGBA(0xd51234ff),
        Color::fromRGBA(0xd51234ff),
        Color::fromRGBA(0xd51234ff),
        Color::fromRGBA(0xd51234ff),
        Color::fromRGBA(0xd51234ff),
        Color::fromRGBA(0xd51234ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x3f3304ff),
        Color::fromRGBA(0x554306ff),
        Color::fromRGBA(0x443704ff),
        Color::fromRGBA(0x7d7106ff),
        Color::fromRGBA(0x6c5109ff),
        Color::fromRGBA(0x6b0c19ff),
        Color::fromRGBA(0xad002fff),
        Color::fromRGBA(0xc10433ff),
        Color::fromRGBA(0xbe0332ff),
        Color::fromRGBA(0xbe0332ff),
        Color::fromRGBA(0xbf0332ff),
        Color::fromRGBA(0xbf0332ff),
        Color::fromRGBA(0xbf0332ff),
        Color::fromRGBA(0xbf0332ff),
        Color::fromRGBA(0xbf0332ff),
        Color::fromRGBA(0x302703ff),
        Color::fromRGBA(0x6f5a07ff),
        Color::fromRGBA(0x705b07ff),
        Color::fromRGBA(0x4a3c05ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x403604ff),
        Color::fromRGBA(0x847907ff),
        Color::fromRGBA(0x765309ff),
        Color::fromRGBA(0x6b3a0aff),
        Color::fromRGBA(0x6d3e0aff),
        Color::fromRGBA(0x6d3e0aff),
        Color::fromRGBA(0x6d3e0aff),
        Color::fromRGBA(0x6d3e0aff),
        Color::fromRGBA(0x6d3e0aff),
        Color::fromRGBA(0x6d3e0aff),
        Color::fromRGBA(0x6d3e0aff),
        Color::fromRGBA(0x0f0c01ff),
        Color::fromRGBA(0x514205ff),
        Color::fromRGBA(0xa3840bff),
        Color::fromRGBA(0x423504ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x433404ff),
        Color::fromRGBA(0x966d06ff),
        Color::fromRGBA(0x645e0bff),
        Color::fromRGBA(0x43530dff),
        Color::fromRGBA(0x49550dff),
        Color::fromRGBA(0x48550dff),
        Color::fromRGBA(0x48550dff),
        Color::fromRGBA(0x48550dff),
        Color::fromRGBA(0x48550dff),
        Color::fromRGBA(0x48550dff),
        Color::fromRGBA(0x48550dff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x0f0c01ff),
        Color::fromRGBA(0x4e4206ff),
        Color::fromRGBA(0x413404ff),
        Color::fromRGBA(0x8d6805ff),
        Color::fromRGBA(0x625709ff),
        Color::fromRGBA(0x0a4c21ff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x008841ff),
        Color::fromRGBA(0x008541ff),
        Color::fromRGBA(0x008641ff),
        Color::fromRGBA(0x008641ff),
        Color::fromRGBA(0x008641ff),
        Color::fromRGBA(0x008641ff),
        Color::fromRGBA(0x008641ff),
        Color::fromRGBA(0x008641ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x322903ff),
        Color::fromRGBA(0x7b5904ff),
        Color::fromRGBA(0x6c5907ff),
        Color::fromRGBA(0x114a1cff),
        Color::fromRGBA(0x00763bff),
        Color::fromRGBA(0x029e47ff),
        Color::fromRGBA(0x039b44ff),
        Color::fromRGBA(0x029743ff),
        Color::fromRGBA(0x029843ff),
        Color::fromRGBA(0x029843ff),
        Color::fromRGBA(0x029843ff),
        Color::fromRGBA(0x029843ff),
        Color::fromRGBA(0x029843ff),
        Color::fromRGBA(0x029843ff),
        Color::fromRGBA(0x029843ff),
        Color::fromRGBA(0x7f6106ff),
        Color::fromRGBA(0x765f07ff),
        Color::fromRGBA(0x1d4c19ff),
        Color::fromRGBA(0x006f37ff),
        Color::fromRGBA(0x019c47ff),
        Color::fromRGBA(0x029b44ff),
        Color::fromRGBA(0x009241ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x284312ff),
        Color::fromRGBA(0x006331ff),
        Color::fromRGBA(0x009947ff),
        Color::fromRGBA(0x039e45ff),
        Color::fromRGBA(0x009241ff),
        Color::fromRGBA(0x009342ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff)
    ],
    '32x19' => [
        Color::fromRGBA(0x1e000aff),
        Color::fromRGBA(0x960925ff),
        Color::fromRGBA(0xe01337ff),
        Color::fromRGBA(0xdd1136ff),
        Color::fromRGBA(0xcf0f33ff),
        Color::fromRGBA(0xcf0f33ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd11033ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0x655906ff),
        Color::fromRGBA(0x060400ff),
        Color::fromRGBA(0x30000eff),
        Color::fromRGBA(0xa20c28ff),
        Color::fromRGBA(0xdf1336ff),
        Color::fromRGBA(0xdb1136ff),
        Color::fromRGBA(0xcf0f33ff),
        Color::fromRGBA(0xcf0f33ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd11034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xc8a50eff),
        Color::fromRGBA(0xdab810ff),
        Color::fromRGBA(0x615b05ff),
        Color::fromRGBA(0x000100ff),
        Color::fromRGBA(0x31000fff),
        Color::fromRGBA(0xa50c29ff),
        Color::fromRGBA(0xe01337ff),
        Color::fromRGBA(0xdb1136ff),
        Color::fromRGBA(0xcf0f33ff),
        Color::fromRGBA(0xcf0f33ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd11034ff),
        Color::fromRGBA(0xd11034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x493c05ff),
        Color::fromRGBA(0xc7a80fff),
        Color::fromRGBA(0xd6b510ff),
        Color::fromRGBA(0x5c5604ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x360010ff),
        Color::fromRGBA(0xaa0d2aff),
        Color::fromRGBA(0xe11337ff),
        Color::fromRGBA(0xda1036ff),
        Color::fromRGBA(0xcf0f33ff),
        Color::fromRGBA(0xd00f33ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd11033ff),
        Color::fromRGBA(0xd11034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0x010100ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x534506ff),
        Color::fromRGBA(0xcead0fff),
        Color::fromRGBA(0xd5b40fff),
        Color::fromRGBA(0x565104ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x3a0011ff),
        Color::fromRGBA(0xad0d2aff),
        Color::fromRGBA(0xe11337ff),
        Color::fromRGBA(0xd91035ff),
        Color::fromRGBA(0xce0f33ff),
        Color::fromRGBA(0xd00f33ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd11033ff),
        Color::fromRGBA(0xd11034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x030200ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x504305ff),
        Color::fromRGBA(0xcfae0fff),
        Color::fromRGBA(0xd1b10fff),
        Color::fromRGBA(0x514d03ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x3f0012ff),
        Color::fromRGBA(0xb10e2bff),
        Color::fromRGBA(0xe21337ff),
        Color::fromRGBA(0xd91035ff),
        Color::fromRGBA(0xce0f33ff),
        Color::fromRGBA(0xcf0f33ff),
        Color::fromRGBA(0xcf0f33ff),
        Color::fromRGBA(0xcf0f33ff),
        Color::fromRGBA(0xcf0f33ff),
        Color::fromRGBA(0xcf0f33ff),
        Color::fromRGBA(0xcf0f33ff),
        Color::fromRGBA(0xcf0f33ff),
        Color::fromRGBA(0xcf0f33ff),
        Color::fromRGBA(0xcf0f33ff),
        Color::fromRGBA(0xcf0f33ff),
        Color::fromRGBA(0xcf0f33ff),
        Color::fromRGBA(0xcf0f33ff),
        Color::fromRGBA(0xcf0f33ff),
        Color::fromRGBA(0xcf0f33ff),
        Color::fromRGBA(0xcf0f33ff),
        Color::fromRGBA(0xcf0f33ff),
        Color::fromRGBA(0xcf0f33ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x020200ff),
        Color::fromRGBA(0x604f06ff),
        Color::fromRGBA(0x6b5a07ff),
        Color::fromRGBA(0x010000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x5a4b06ff),
        Color::fromRGBA(0xd1af10ff),
        Color::fromRGBA(0xcdae0fff),
        Color::fromRGBA(0x4b4803ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x430013ff),
        Color::fromRGBA(0xb50f2cff),
        Color::fromRGBA(0xe21337ff),
        Color::fromRGBA(0xdd1136ff),
        Color::fromRGBA(0xdc1136ff),
        Color::fromRGBA(0xdc1136ff),
        Color::fromRGBA(0xdc1136ff),
        Color::fromRGBA(0xdc1136ff),
        Color::fromRGBA(0xdc1136ff),
        Color::fromRGBA(0xdc1136ff),
        Color::fromRGBA(0xdc1136ff),
        Color::fromRGBA(0xdc1136ff),
        Color::fromRGBA(0xdc1136ff),
        Color::fromRGBA(0xdc1136ff),
        Color::fromRGBA(0xdc1136ff),
        Color::fromRGBA(0xdc1136ff),
        Color::fromRGBA(0xdc1136ff),
        Color::fromRGBA(0xdc1136ff),
        Color::fromRGBA(0xdc1136ff),
        Color::fromRGBA(0xdc1136ff),
        Color::fromRGBA(0x010100ff),
        Color::fromRGBA(0x090700ff),
        Color::fromRGBA(0xb9970dff),
        Color::fromRGBA(0x9b810bff),
        Color::fromRGBA(0x997f0bff),
        Color::fromRGBA(0xe0ba10ff),
        Color::fromRGBA(0x261f02ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x5f4f07ff),
        Color::fromRGBA(0xd4b210ff),
        Color::fromRGBA(0xcaab0eff),
        Color::fromRGBA(0x464403ff),
        Color::fromRGBA(0x010000ff),
        Color::fromRGBA(0x4a0014ff),
        Color::fromRGBA(0x9d0827ff),
        Color::fromRGBA(0x9f0728ff),
        Color::fromRGBA(0x9e0728ff),
        Color::fromRGBA(0x9f0728ff),
        Color::fromRGBA(0x9f0728ff),
        Color::fromRGBA(0x9f0728ff),
        Color::fromRGBA(0x9f0728ff),
        Color::fromRGBA(0x9f0728ff),
        Color::fromRGBA(0x9f0728ff),
        Color::fromRGBA(0x9f0728ff),
        Color::fromRGBA(0x9f0728ff),
        Color::fromRGBA(0x9f0728ff),
        Color::fromRGBA(0x9f0728ff),
        Color::fromRGBA(0x9f0728ff),
        Color::fromRGBA(0x9f0728ff),
        Color::fromRGBA(0x9f0728ff),
        Color::fromRGBA(0x9f0728ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x574706ff),
        Color::fromRGBA(0x90750aff),
        Color::fromRGBA(0x372c03ff),
        Color::fromRGBA(0x372c03ff),
        Color::fromRGBA(0x826a09ff),
        Color::fromRGBA(0xa7880bff),
        Color::fromRGBA(0x020200ff),
        Color::fromRGBA(0x040300ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x675607ff),
        Color::fromRGBA(0xd6b410ff),
        Color::fromRGBA(0xb3990dff),
        Color::fromRGBA(0x353501ff),
        Color::fromRGBA(0x0f1100ff),
        Color::fromRGBA(0x111200ff),
        Color::fromRGBA(0x101100ff),
        Color::fromRGBA(0x101100ff),
        Color::fromRGBA(0x101100ff),
        Color::fromRGBA(0x101100ff),
        Color::fromRGBA(0x101100ff),
        Color::fromRGBA(0x101100ff),
        Color::fromRGBA(0x101100ff),
        Color::fromRGBA(0x101100ff),
        Color::fromRGBA(0x101100ff),
        Color::fromRGBA(0x101100ff),
        Color::fromRGBA(0x101100ff),
        Color::fromRGBA(0x101100ff),
        Color::fromRGBA(0x101100ff),
        Color::fromRGBA(0x101100ff),
        Color::fromRGBA(0x101100ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x4c3e05ff),
        Color::fromRGBA(0x90750aff),
        Color::fromRGBA(0x342a03ff),
        Color::fromRGBA(0x3f3404ff),
        Color::fromRGBA(0x685407ff),
        Color::fromRGBA(0xbb980dff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x030200ff),
        Color::fromRGBA(0x060500ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x010000ff),
        Color::fromRGBA(0xcbab0fff),
        Color::fromRGBA(0xffe215ff),
        Color::fromRGBA(0xd9b110ff),
        Color::fromRGBA(0xdbb210ff),
        Color::fromRGBA(0xdbb210ff),
        Color::fromRGBA(0xdbb210ff),
        Color::fromRGBA(0xdbb210ff),
        Color::fromRGBA(0xdbb210ff),
        Color::fromRGBA(0xdbb210ff),
        Color::fromRGBA(0xdbb210ff),
        Color::fromRGBA(0xdbb210ff),
        Color::fromRGBA(0xdbb210ff),
        Color::fromRGBA(0xdbb210ff),
        Color::fromRGBA(0xdbb210ff),
        Color::fromRGBA(0xdbb210ff),
        Color::fromRGBA(0xdbb210ff),
        Color::fromRGBA(0xdbb210ff),
        Color::fromRGBA(0xdbb210ff),
        Color::fromRGBA(0xdbb210ff),
        Color::fromRGBA(0x010100ff),
        Color::fromRGBA(0x040300ff),
        Color::fromRGBA(0x826a09ff),
        Color::fromRGBA(0x726208ff),
        Color::fromRGBA(0x504105ff),
        Color::fromRGBA(0xe2b910ff),
        Color::fromRGBA(0x897009ff),
        Color::fromRGBA(0x020200ff),
        Color::fromRGBA(0x040300ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x675607ff),
        Color::fromRGBA(0xd3b510ff),
        Color::fromRGBA(0xb5980cff),
        Color::fromRGBA(0x432d00ff),
        Color::fromRGBA(0x160d00ff),
        Color::fromRGBA(0x160f00ff),
        Color::fromRGBA(0x150d00ff),
        Color::fromRGBA(0x150d00ff),
        Color::fromRGBA(0x150d00ff),
        Color::fromRGBA(0x150d00ff),
        Color::fromRGBA(0x150d00ff),
        Color::fromRGBA(0x150d00ff),
        Color::fromRGBA(0x150d00ff),
        Color::fromRGBA(0x150d00ff),
        Color::fromRGBA(0x150d00ff),
        Color::fromRGBA(0x150d00ff),
        Color::fromRGBA(0x150d00ff),
        Color::fromRGBA(0x150d00ff),
        Color::fromRGBA(0x150d00ff),
        Color::fromRGBA(0x150d00ff),
        Color::fromRGBA(0x150d00ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x362d03ff),
        Color::fromRGBA(0xe9c110ff),
        Color::fromRGBA(0xc8a60eff),
        Color::fromRGBA(0x130f01ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x5e4f07ff),
        Color::fromRGBA(0xd1b410ff),
        Color::fromRGBA(0xcaab0eff),
        Color::fromRGBA(0x533c02ff),
        Color::fromRGBA(0x000001ff),
        Color::fromRGBA(0x00331aff),
        Color::fromRGBA(0x006f33ff),
        Color::fromRGBA(0x007034ff),
        Color::fromRGBA(0x006f34ff),
        Color::fromRGBA(0x007034ff),
        Color::fromRGBA(0x007034ff),
        Color::fromRGBA(0x007034ff),
        Color::fromRGBA(0x007034ff),
        Color::fromRGBA(0x007034ff),
        Color::fromRGBA(0x007034ff),
        Color::fromRGBA(0x007034ff),
        Color::fromRGBA(0x007034ff),
        Color::fromRGBA(0x007034ff),
        Color::fromRGBA(0x007034ff),
        Color::fromRGBA(0x007034ff),
        Color::fromRGBA(0x007034ff),
        Color::fromRGBA(0x007034ff),
        Color::fromRGBA(0x007034ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x010000ff),
        Color::fromRGBA(0x020100ff),
        Color::fromRGBA(0x0e0c01ff),
        Color::fromRGBA(0x534506ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x594b06ff),
        Color::fromRGBA(0xceb110ff),
        Color::fromRGBA(0xcdae0fff),
        Color::fromRGBA(0x574002ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x002e19ff),
        Color::fromRGBA(0x018139ff),
        Color::fromRGBA(0x02a147ff),
        Color::fromRGBA(0x019d46ff),
        Color::fromRGBA(0x019c46ff),
        Color::fromRGBA(0x019c46ff),
        Color::fromRGBA(0x019c46ff),
        Color::fromRGBA(0x019c46ff),
        Color::fromRGBA(0x019c46ff),
        Color::fromRGBA(0x019c46ff),
        Color::fromRGBA(0x019c46ff),
        Color::fromRGBA(0x019c46ff),
        Color::fromRGBA(0x019c46ff),
        Color::fromRGBA(0x019c46ff),
        Color::fromRGBA(0x019c46ff),
        Color::fromRGBA(0x019c46ff),
        Color::fromRGBA(0x019c46ff),
        Color::fromRGBA(0x019c46ff),
        Color::fromRGBA(0x019c46ff),
        Color::fromRGBA(0x019c46ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x020200ff),
        Color::fromRGBA(0x010100ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x534606ff),
        Color::fromRGBA(0xccaf10ff),
        Color::fromRGBA(0xd0b10fff),
        Color::fromRGBA(0x5d4503ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x002a17ff),
        Color::fromRGBA(0x017e38ff),
        Color::fromRGBA(0x02a047ff),
        Color::fromRGBA(0x009a45ff),
        Color::fromRGBA(0x009241ff),
        Color::fromRGBA(0x009342ff),
        Color::fromRGBA(0x009342ff),
        Color::fromRGBA(0x009342ff),
        Color::fromRGBA(0x009342ff),
        Color::fromRGBA(0x009342ff),
        Color::fromRGBA(0x009342ff),
        Color::fromRGBA(0x009342ff),
        Color::fromRGBA(0x009342ff),
        Color::fromRGBA(0x009342ff),
        Color::fromRGBA(0x009342ff),
        Color::fromRGBA(0x009342ff),
        Color::fromRGBA(0x009342ff),
        Color::fromRGBA(0x009342ff),
        Color::fromRGBA(0x009342ff),
        Color::fromRGBA(0x009342ff),
        Color::fromRGBA(0x009342ff),
        Color::fromRGBA(0x009342ff),
        Color::fromRGBA(0x010100ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x504305ff),
        Color::fromRGBA(0xcbae0fff),
        Color::fromRGBA(0xd4b40fff),
        Color::fromRGBA(0x624a03ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x002716ff),
        Color::fromRGBA(0x007b37ff),
        Color::fromRGBA(0x02a047ff),
        Color::fromRGBA(0x009a45ff),
        Color::fromRGBA(0x009241ff),
        Color::fromRGBA(0x009342ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x009443ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x493d05ff),
        Color::fromRGBA(0xc5a90fff),
        Color::fromRGBA(0xd5b610ff),
        Color::fromRGBA(0x674f04ff),
        Color::fromRGBA(0x010000ff),
        Color::fromRGBA(0x002415ff),
        Color::fromRGBA(0x007836ff),
        Color::fromRGBA(0x03a047ff),
        Color::fromRGBA(0x009b45ff),
        Color::fromRGBA(0x009242ff),
        Color::fromRGBA(0x009342ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x009443ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0xc6a60eff),
        Color::fromRGBA(0xdab810ff),
        Color::fromRGBA(0x6d5304ff),
        Color::fromRGBA(0x030000ff),
        Color::fromRGBA(0x002013ff),
        Color::fromRGBA(0x007535ff),
        Color::fromRGBA(0x039f46ff),
        Color::fromRGBA(0x009b45ff),
        Color::fromRGBA(0x009242ff),
        Color::fromRGBA(0x009342ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009443ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x6b5405ff),
        Color::fromRGBA(0x060400ff),
        Color::fromRGBA(0x001f13ff),
        Color::fromRGBA(0x007334ff),
        Color::fromRGBA(0x039f46ff),
        Color::fromRGBA(0x009c46ff),
        Color::fromRGBA(0x009342ff),
        Color::fromRGBA(0x009342ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x00130eff),
        Color::fromRGBA(0x006a30ff),
        Color::fromRGBA(0x03a046ff),
        Color::fromRGBA(0x009d46ff),
        Color::fromRGBA(0x009342ff),
        Color::fromRGBA(0x009342ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009442ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff),
        Color::fromRGBA(0x009543ff)
    ],
];

$img = new Image(16, 10);
$img->append($pixels['16x10'], new Size(16, 10));
$img->append($pixels['32x19'], new Size(32, 19));

return $img;
