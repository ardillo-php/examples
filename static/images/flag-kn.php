<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x11' => [
        Color::fromRGBA(0x009e49fd),
        Color::fromRGBA(0x009e49fd),
        Color::fromRGBA(0x009e49fd),
        Color::fromRGBA(0x009e49fd),
        Color::fromRGBA(0x009e49fd),
        Color::fromRGBA(0x009e49fd),
        Color::fromRGBA(0x009e49fd),
        Color::fromRGBA(0x009e48fd),
        Color::fromRGBA(0x009d49fd),
        Color::fromRGBA(0x009d49fd),
        Color::fromRGBA(0x2da940fd),
        Color::fromRGBA(0x97ab22fd),
        Color::fromRGBA(0x605008ff),
        Color::fromRGBA(0x040300ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e48ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x07a048ff),
        Color::fromRGBA(0x54af38ff),
        Color::fromRGBA(0x8d9019ff),
        Color::fromRGBA(0x3a3003ff),
        Color::fromRGBA(0x020200ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x050500ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e48ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x21a643ff),
        Color::fromRGBA(0x7fab29ff),
        Color::fromRGBA(0x75680fff),
        Color::fromRGBA(0x625d4eff),
        Color::fromRGBA(0x4f4f52ff),
        Color::fromRGBA(0x070707ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x262103ff),
        Color::fromRGBA(0x8f6c0dff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e48ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x059f48ff),
        Color::fromRGBA(0x4dae39ff),
        Color::fromRGBA(0x8f961bff),
        Color::fromRGBA(0x433604ff),
        Color::fromRGBA(0x131211ff),
        Color::fromRGBA(0xa5a5a7ff),
        Color::fromRGBA(0xb2b2b4ff),
        Color::fromRGBA(0x1a1a15ff),
        Color::fromRGBA(0x544506ff),
        Color::fromRGBA(0xc57916ff),
        Color::fromRGBA(0xdc4522ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e48ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x1ba544ff),
        Color::fromRGBA(0x7aad2cff),
        Color::fromRGBA(0x796d0eff),
        Color::fromRGBA(0x1b1401ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x030303ff),
        Color::fromRGBA(0x303133ff),
        Color::fromRGBA(0x55523aff),
        Color::fromRGBA(0x957113ff),
        Color::fromRGBA(0xda671cff),
        Color::fromRGBA(0xd42125ff),
        Color::fromRGBA(0xcd0e26ff),
        Color::fromRGBA(0x009e48ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x039e48ff),
        Color::fromRGBA(0x45ad3bff),
        Color::fromRGBA(0x8d991bff),
        Color::fromRGBA(0x4a3c04ff),
        Color::fromRGBA(0x050300ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x040400ff),
        Color::fromRGBA(0x4c3f06ff),
        Color::fromRGBA(0xbe7a14ff),
        Color::fromRGBA(0xdb4421ff),
        Color::fromRGBA(0xcf1226ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xce1125ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x16a445ff),
        Color::fromRGBA(0x73ae2eff),
        Color::fromRGBA(0x837914ff),
        Color::fromRGBA(0x5c543dff),
        Color::fromRGBA(0x343537ff),
        Color::fromRGBA(0x030304ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x191601ff),
        Color::fromRGBA(0x86660cff),
        Color::fromRGBA(0xd86c1cff),
        Color::fromRGBA(0xd52524ff),
        Color::fromRGBA(0xcd0e26ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x45ad3bff),
        Color::fromRGBA(0x8d9f1fff),
        Color::fromRGBA(0x534506ff),
        Color::fromRGBA(0x1b1915ff),
        Color::fromRGBA(0xb2b2b4ff),
        Color::fromRGBA(0xa5a5a7ff),
        Color::fromRGBA(0x0e0e0cff),
        Color::fromRGBA(0x423804ff),
        Color::fromRGBA(0xb87a14ff),
        Color::fromRGBA(0xdc4b21ff),
        Color::fromRGBA(0xcf1325ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xce1125ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x817510ff),
        Color::fromRGBA(0x271f02ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x080809ff),
        Color::fromRGBA(0x4c4c4fff),
        Color::fromRGBA(0x5b5949ff),
        Color::fromRGBA(0x856914ff),
        Color::fromRGBA(0xd5701aff),
        Color::fromRGBA(0xd62924ff),
        Color::fromRGBA(0xcd0e26ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x060400ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x010100ff),
        Color::fromRGBA(0x3e3407ff),
        Color::fromRGBA(0xb27813ff),
        Color::fromRGBA(0xdc4f1fff),
        Color::fromRGBA(0xd01525ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x040300ff),
        Color::fromRGBA(0x615008ff),
        Color::fromRGBA(0xd38218fd),
        Color::fromRGBA(0xd93323fd),
        Color::fromRGBA(0xcd0e26fd),
        Color::fromRGBA(0xcd1026fd),
        Color::fromRGBA(0xce1125fd),
        Color::fromRGBA(0xce1126fd),
        Color::fromRGBA(0xce1126fd),
        Color::fromRGBA(0xce1126fd),
        Color::fromRGBA(0xce1126fd),
        Color::fromRGBA(0xce1126fd),
        Color::fromRGBA(0xce1126fd),
        Color::fromRGBA(0xce1126fd)
    ],
    '32x21' => [
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
        Color::fromRGBA(0x009e48fe),
        Color::fromRGBA(0x009d49fe),
        Color::fromRGBA(0x009d49fe),
        Color::fromRGBA(0x35a83efe),
        Color::fromRGBA(0xbfc723fe),
        Color::fromRGBA(0xe3bd13ff),
        Color::fromRGBA(0x6c5a09ff),
        Color::fromRGBA(0x080700ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
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
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x0ca046ff),
        Color::fromRGBA(0x6ab434ff),
        Color::fromRGBA(0xd7c91cff),
        Color::fromRGBA(0xb9990fff),
        Color::fromRGBA(0x3f3405ff),
        Color::fromRGBA(0x030200ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
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
        Color::fromRGBA(0x33a83eff),
        Color::fromRGBA(0xaec326ff),
        Color::fromRGBA(0xdebb14ff),
        Color::fromRGBA(0x796309ff),
        Color::fromRGBA(0x120f01ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
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
        Color::fromRGBA(0x0fa046ff),
        Color::fromRGBA(0x71b632ff),
        Color::fromRGBA(0xdcc91bff),
        Color::fromRGBA(0xb79611ff),
        Color::fromRGBA(0x372d02ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x110e01ff),
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
        Color::fromRGBA(0x38a93dff),
        Color::fromRGBA(0xb4c425ff),
        Color::fromRGBA(0xdcb914ff),
        Color::fromRGBA(0x705c08ff),
        Color::fromRGBA(0x4c4a3fff),
        Color::fromRGBA(0x353537ff),
        Color::fromRGBA(0x191919ff),
        Color::fromRGBA(0x484848ff),
        Color::fromRGBA(0x060606ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x030200ff),
        Color::fromRGBA(0x4a3e06ff),
        Color::fromRGBA(0xbc9e10ff),
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
        Color::fromRGBA(0x12a145ff),
        Color::fromRGBA(0x79b731ff),
        Color::fromRGBA(0xdec81aff),
        Color::fromRGBA(0xae8f0eff),
        Color::fromRGBA(0x332a04ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x3c3c3dff),
        Color::fromRGBA(0xd3d3d3ff),
        Color::fromRGBA(0xccccccff),
        Color::fromRGBA(0x717171ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x1c1702ff),
        Color::fromRGBA(0x8b750bff),
        Color::fromRGBA(0xeabc15ff),
        Color::fromRGBA(0xef911bff),
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
        Color::fromRGBA(0x019d48ff),
        Color::fromRGBA(0x3eaa3cff),
        Color::fromRGBA(0xbac523ff),
        Color::fromRGBA(0xd9b513ff),
        Color::fromRGBA(0x6b5708ff),
        Color::fromRGBA(0x0d0a01ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x191919ff),
        Color::fromRGBA(0x8c8c8cff),
        Color::fromRGBA(0xfafafaff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x969696ff),
        Color::fromRGBA(0x151515ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x050400ff),
        Color::fromRGBA(0x4f4206ff),
        Color::fromRGBA(0xc9a811ff),
        Color::fromRGBA(0xf4af19ff),
        Color::fromRGBA(0xde5220ff),
        Color::fromRGBA(0xcf1625ff),
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
        Color::fromRGBA(0x15a244ff),
        Color::fromRGBA(0x80b92fff),
        Color::fromRGBA(0xe0c719ff),
        Color::fromRGBA(0xa88a0dff),
        Color::fromRGBA(0x2e2603ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x282828ff),
        Color::fromRGBA(0x606060ff),
        Color::fromRGBA(0xb8b8b8ff),
        Color::fromRGBA(0xc6c6c6ff),
        Color::fromRGBA(0x787878ff),
        Color::fromRGBA(0x39393bff),
        Color::fromRGBA(0x211c04ff),
        Color::fromRGBA(0x927b0cff),
        Color::fromRGBA(0xedbd15ff),
        Color::fromRGBA(0xeb821dff),
        Color::fromRGBA(0xd32924ff),
        Color::fromRGBA(0xcd0e26ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e48ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x029e48ff),
        Color::fromRGBA(0x44ac3bff),
        Color::fromRGBA(0xc0c622ff),
        Color::fromRGBA(0xd6b212ff),
        Color::fromRGBA(0x645208ff),
        Color::fromRGBA(0x0a0800ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x505050ff),
        Color::fromRGBA(0x515153ff),
        Color::fromRGBA(0x020100ff),
        Color::fromRGBA(0x554707ff),
        Color::fromRGBA(0xceac11ff),
        Color::fromRGBA(0xf4ab19ff),
        Color::fromRGBA(0xdd4d21ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e48ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x19a244ff),
        Color::fromRGBA(0x87bb2eff),
        Color::fromRGBA(0xe1c718ff),
        Color::fromRGBA(0xa1840dff),
        Color::fromRGBA(0x292203ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x0a0b0cff),
        Color::fromRGBA(0x2f290eff),
        Color::fromRGBA(0x98800cff),
        Color::fromRGBA(0xefbd16ff),
        Color::fromRGBA(0xea7d1dff),
        Color::fromRGBA(0xd32624ff),
        Color::fromRGBA(0xcd0e26ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e48ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x039e48ff),
        Color::fromRGBA(0x4aad3aff),
        Color::fromRGBA(0xc5c721ff),
        Color::fromRGBA(0xd2ae12ff),
        Color::fromRGBA(0x5d4c07ff),
        Color::fromRGBA(0x080600ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x080700ff),
        Color::fromRGBA(0x5c4d07ff),
        Color::fromRGBA(0xd2af11ff),
        Color::fromRGBA(0xf4a819ff),
        Color::fromRGBA(0xdc4921ff),
        Color::fromRGBA(0xce1225ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e48ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x1da343ff),
        Color::fromRGBA(0x8ebc2dff),
        Color::fromRGBA(0xe2c618ff),
        Color::fromRGBA(0x9d810fff),
        Color::fromRGBA(0x221c01ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x292203ff),
        Color::fromRGBA(0xa0870dff),
        Color::fromRGBA(0xf0bd16ff),
        Color::fromRGBA(0xe8771dff),
        Color::fromRGBA(0xd22324ff),
        Color::fromRGBA(0xcd0e26ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x059e48ff),
        Color::fromRGBA(0x51ae39ff),
        Color::fromRGBA(0xcac820ff),
        Color::fromRGBA(0xceaa11ff),
        Color::fromRGBA(0x584808ff),
        Color::fromRGBA(0x54534fff),
        Color::fromRGBA(0x2c2c2dff),
        Color::fromRGBA(0x282828ff),
        Color::fromRGBA(0x444444ff),
        Color::fromRGBA(0x010101ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x0a0800ff),
        Color::fromRGBA(0x635308ff),
        Color::fromRGBA(0xd7b212ff),
        Color::fromRGBA(0xf3a41aff),
        Color::fromRGBA(0xda4421ff),
        Color::fromRGBA(0xce1125ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xce1125ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x21a442ff),
        Color::fromRGBA(0x95be2bff),
        Color::fromRGBA(0xe2c417ff),
        Color::fromRGBA(0x94790cff),
        Color::fromRGBA(0x201a02ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x5b5b5cff),
        Color::fromRGBA(0xd8d8d8ff),
        Color::fromRGBA(0xd2d2d2ff),
        Color::fromRGBA(0x505050ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x2e2604ff),
        Color::fromRGBA(0xa68c0eff),
        Color::fromRGBA(0xf2bc16ff),
        Color::fromRGBA(0xe7721eff),
        Color::fromRGBA(0xd12024ff),
        Color::fromRGBA(0xcd0e26ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x089f47ff),
        Color::fromRGBA(0x56b037ff),
        Color::fromRGBA(0xcfc81fff),
        Color::fromRGBA(0xc9a611ff),
        Color::fromRGBA(0x504106ff),
        Color::fromRGBA(0x040400ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x282828ff),
        Color::fromRGBA(0xa8a8a8ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfbfbfbff),
        Color::fromRGBA(0x7f7f7fff),
        Color::fromRGBA(0x0e0e0fff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x0d0a01ff),
        Color::fromRGBA(0x6a5909ff),
        Color::fromRGBA(0xdbb513ff),
        Color::fromRGBA(0xf29f1aff),
        Color::fromRGBA(0xd93f22ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xce1125ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xa8c227ff),
        Color::fromRGBA(0xe1c216ff),
        Color::fromRGBA(0x8d730bff),
        Color::fromRGBA(0x1c1702ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x020202ff),
        Color::fromRGBA(0x323232ff),
        Color::fromRGBA(0x5e5e5eff),
        Color::fromRGBA(0xc8c8c8ff),
        Color::fromRGBA(0xafafafff),
        Color::fromRGBA(0x6d6e6eff),
        Color::fromRGBA(0x2a2a2aff),
        Color::fromRGBA(0x332b04ff),
        Color::fromRGBA(0xad910eff),
        Color::fromRGBA(0xf3bb17ff),
        Color::fromRGBA(0xe56c1eff),
        Color::fromRGBA(0xd11e24ff),
        Color::fromRGBA(0xcd0e26ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xbe9c0fff),
        Color::fromRGBA(0x4a3d06ff),
        Color::fromRGBA(0x030200ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x646464ff),
        Color::fromRGBA(0x343537ff),
        Color::fromRGBA(0x0b0900ff),
        Color::fromRGBA(0x705e09ff),
        Color::fromRGBA(0xdfb713ff),
        Color::fromRGBA(0xf19b1bff),
        Color::fromRGBA(0xd83b22ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xce1125ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x100d01ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x0f0f0eff),
        Color::fromRGBA(0x3e350bff),
        Color::fromRGBA(0xb3960fff),
        Color::fromRGBA(0xf4b917ff),
        Color::fromRGBA(0xe4671fff),
        Color::fromRGBA(0xd01b25ff),
        Color::fromRGBA(0xcd0e26ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x120f01ff),
        Color::fromRGBA(0x776409ff),
        Color::fromRGBA(0xe2b913ff),
        Color::fromRGBA(0xf0961bff),
        Color::fromRGBA(0xd73722ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1125ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x030200ff),
        Color::fromRGBA(0x403505ff),
        Color::fromRGBA(0xb99a10ff),
        Color::fromRGBA(0xf4b518ff),
        Color::fromRGBA(0xe2611fff),
        Color::fromRGBA(0xd01925ff),
        Color::fromRGBA(0xcd0e26ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x080700ff),
        Color::fromRGBA(0x6d5a09ff),
        Color::fromRGBA(0xe4bd13ff),
        Color::fromRGBA(0xf3a31afe),
        Color::fromRGBA(0xd73822fe),
        Color::fromRGBA(0xcd0f26fe),
        Color::fromRGBA(0xcd1026fe),
        Color::fromRGBA(0xce1125fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe)
    ],
];

$img = new Image(16, 11);
$img->append($pixels['16x11'], new Size(16, 11));
$img->append($pixels['32x21'], new Size(32, 21));

return $img;