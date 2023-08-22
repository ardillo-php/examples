<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x8' => [
        Color::fromRGBA(0x977394ff),
        Color::fromRGBA(0xa48ba8ff),
        Color::fromRGBA(0x4d6294ff),
        Color::fromRGBA(0x98587bff),
        Color::fromRGBA(0x995578ff),
        Color::fromRGBA(0x474b80ff),
        Color::fromRGBA(0xa17c9bff),
        Color::fromRGBA(0x8a7c9fff),
        Color::fromRGBA(0x0e2c70ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x001f69ff),
        Color::fromRGBA(0x001f69ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x995376ff),
        Color::fromRGBA(0xc5667eff),
        Color::fromRGBA(0xd47e91ff),
        Color::fromRGBA(0xcb556dff),
        Color::fromRGBA(0xc94c65ff),
        Color::fromRGBA(0xd16f83ff),
        Color::fromRGBA(0xcc7a8fff),
        Color::fromRGBA(0x885279ff),
        Color::fromRGBA(0x11266aff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x092b68ff),
        Color::fromRGBA(0x0b2f64ff),
        Color::fromRGBA(0x0b2e63ff),
        Color::fromRGBA(0x092b67ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x9d5b7cff),
        Color::fromRGBA(0xcc7a90ff),
        Color::fromRGBA(0xd47185ff),
        Color::fromRGBA(0xcb4e67ff),
        Color::fromRGBA(0xcd556dff),
        Color::fromRGBA(0xd78092ff),
        Color::fromRGBA(0xca6980ff),
        Color::fromRGBA(0x8a4f76ff),
        Color::fromRGBA(0x12266aff),
        Color::fromRGBA(0x01216aff),
        Color::fromRGBA(0x27504fff),
        Color::fromRGBA(0x3f7043ff),
        Color::fromRGBA(0x51734aff),
        Color::fromRGBA(0x26544dff),
        Color::fromRGBA(0x02226aff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x897c9fff),
        Color::fromRGBA(0x8f7295ff),
        Color::fromRGBA(0x40477eff),
        Color::fromRGBA(0x865078ff),
        Color::fromRGBA(0x885279ff),
        Color::fromRGBA(0x455b90ff),
        Color::fromRGBA(0x9280a1ff),
        Color::fromRGBA(0x75608aff),
        Color::fromRGBA(0x0b256aff),
        Color::fromRGBA(0x01226aff),
        Color::fromRGBA(0x225046ff),
        Color::fromRGBA(0x6b8d5cff),
        Color::fromRGBA(0x7d9368ff),
        Color::fromRGBA(0x265544ff),
        Color::fromRGBA(0x02226aff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x1d2d6eff),
        Color::fromRGBA(0x08246aff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x11266aff),
        Color::fromRGBA(0x12266aff),
        Color::fromRGBA(0x001f68ff),
        Color::fromRGBA(0x09296eff),
        Color::fromRGBA(0x1b3172ff),
        Color::fromRGBA(0x042169ff),
        Color::fromRGBA(0x02226bff),
        Color::fromRGBA(0x245047ff),
        Color::fromRGBA(0x719566ff),
        Color::fromRGBA(0x86a079ff),
        Color::fromRGBA(0x295646ff),
        Color::fromRGBA(0x02226aff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x001f68ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x132d69ff),
        Color::fromRGBA(0x767851ff),
        Color::fromRGBA(0x618752ff),
        Color::fromRGBA(0x73915fff),
        Color::fromRGBA(0x7a7e53ff),
        Color::fromRGBA(0x173068ff),
        Color::fromRGBA(0x001f69ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x062469ff),
        Color::fromRGBA(0x334364ff),
        Color::fromRGBA(0x606456ff),
        Color::fromRGBA(0x626653ff),
        Color::fromRGBA(0x354463ff),
        Color::fromRGBA(0x072569ff),
        Color::fromRGBA(0x002069ff),
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
        Color::fromRGBA(0x001f69ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x022169ff),
        Color::fromRGBA(0x001f69ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012169ff)
    ],
    '32x16' => [
        Color::fromRGBA(0xd27084ff),
        Color::fromRGBA(0xedb2bcff),
        Color::fromRGBA(0xb1b0c7ff),
        Color::fromRGBA(0x405b91ff),
        Color::fromRGBA(0x06256bff),
        Color::fromRGBA(0x001a64ff),
        Color::fromRGBA(0x576696ff),
        Color::fromRGBA(0xd44a61ff),
        Color::fromRGBA(0xd4465dff),
        Color::fromRGBA(0x5c6998ff),
        Color::fromRGBA(0x001b65ff),
        Color::fromRGBA(0x05266dff),
        Color::fromRGBA(0x38417aff),
        Color::fromRGBA(0x9d6384ff),
        Color::fromRGBA(0xe28090ff),
        Color::fromRGBA(0xc8a4b7ff),
        Color::fromRGBA(0x1a3677ff),
        Color::fromRGBA(0x001f68ff),
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
        Color::fromRGBA(0x383e78ff),
        Color::fromRGBA(0x88597fff),
        Color::fromRGBA(0xd07d91ff),
        Color::fromRGBA(0xdaaab8ff),
        Color::fromRGBA(0x999cb9ff),
        Color::fromRGBA(0x334e87ff),
        Color::fromRGBA(0x5c6b99ff),
        Color::fromRGBA(0xd44a61ff),
        Color::fromRGBA(0xd4465dff),
        Color::fromRGBA(0x616d9aff),
        Color::fromRGBA(0x2d3976ff),
        Color::fromRGBA(0x885980ff),
        Color::fromRGBA(0xce7b8fff),
        Color::fromRGBA(0xdba9b7ff),
        Color::fromRGBA(0x9b9dbaff),
        Color::fromRGBA(0x39538bff),
        Color::fromRGBA(0x03236aff),
        Color::fromRGBA(0x002068ff),
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
        Color::fromRGBA(0x536394ff),
        Color::fromRGBA(0x5a6a99ff),
        Color::fromRGBA(0x8b82a5ff),
        Color::fromRGBA(0xd694a5ff),
        Color::fromRGBA(0xeea9b3ff),
        Color::fromRGBA(0xe4d9e1ff),
        Color::fromRGBA(0xcbc5d5ff),
        Color::fromRGBA(0xd3485fff),
        Color::fromRGBA(0xd3445cff),
        Color::fromRGBA(0xc8b2c3ff),
        Color::fromRGBA(0xd1899bff),
        Color::fromRGBA(0xf1b4bcff),
        Color::fromRGBA(0xe7d8e0ff),
        Color::fromRGBA(0x939cbbff),
        Color::fromRGBA(0x5c6a99ff),
        Color::fromRGBA(0x48598dff),
        Color::fromRGBA(0x0b286eff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x001f68ff),
        Color::fromRGBA(0x001f68ff),
        Color::fromRGBA(0x001f68ff),
        Color::fromRGBA(0x001f68ff),
        Color::fromRGBA(0x001f68ff),
        Color::fromRGBA(0x001f68ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0xd3465eff),
        Color::fromRGBA(0xd2465dff),
        Color::fromRGBA(0xd0455dff),
        Color::fromRGBA(0xd3485fff),
        Color::fromRGBA(0xd4445bff),
        Color::fromRGBA(0xd5475eff),
        Color::fromRGBA(0xd6485eff),
        Color::fromRGBA(0xcb1e3aff),
        Color::fromRGBA(0xcb1c39ff),
        Color::fromRGBA(0xd6455cff),
        Color::fromRGBA(0xd5465dff),
        Color::fromRGBA(0xd54a61ff),
        Color::fromRGBA(0xd2465eff),
        Color::fromRGBA(0xd0435cff),
        Color::fromRGBA(0xd4465dff),
        Color::fromRGBA(0xba425fff),
        Color::fromRGBA(0x1a2567ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x0b2a6cff),
        Color::fromRGBA(0x17396dff),
        Color::fromRGBA(0x15396cff),
        Color::fromRGBA(0x16396bff),
        Color::fromRGBA(0x15396aff),
        Color::fromRGBA(0x15396bff),
        Color::fromRGBA(0x15396bff),
        Color::fromRGBA(0x0d2d6cff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0xd3455cff),
        Color::fromRGBA(0xd3445cff),
        Color::fromRGBA(0xd0425aff),
        Color::fromRGBA(0xd2445cff),
        Color::fromRGBA(0xd5485fff),
        Color::fromRGBA(0xd5445bff),
        Color::fromRGBA(0xd5445bff),
        Color::fromRGBA(0xcb1d39ff),
        Color::fromRGBA(0xca1c38ff),
        Color::fromRGBA(0xd6455cff),
        Color::fromRGBA(0xd5465dff),
        Color::fromRGBA(0xd3425aff),
        Color::fromRGBA(0xd2465dff),
        Color::fromRGBA(0xd0435bff),
        Color::fromRGBA(0xd4455cff),
        Color::fromRGBA(0xba405eff),
        Color::fromRGBA(0x1a2567ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x001f69ff),
        Color::fromRGBA(0x1c426cff),
        Color::fromRGBA(0x3d673bff),
        Color::fromRGBA(0x356d35ff),
        Color::fromRGBA(0x27653cff),
        Color::fromRGBA(0x466137ff),
        Color::fromRGBA(0x366431ff),
        Color::fromRGBA(0x356e38ff),
        Color::fromRGBA(0x1d4767ff),
        Color::fromRGBA(0x001f69ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x566494ff),
        Color::fromRGBA(0x5d6998ff),
        Color::fromRGBA(0x929ab9ff),
        Color::fromRGBA(0xe6d9e1ff),
        Color::fromRGBA(0xf1b5beff),
        Color::fromRGBA(0xd58a9cff),
        Color::fromRGBA(0xc9b2c4ff),
        Color::fromRGBA(0xd3485fff),
        Color::fromRGBA(0xd3435bff),
        Color::fromRGBA(0xcec5d4ff),
        Color::fromRGBA(0xe6dae2ff),
        Color::fromRGBA(0xefaab4ff),
        Color::fromRGBA(0xd894a5ff),
        Color::fromRGBA(0x8f85a7ff),
        Color::fromRGBA(0x5e6c9aff),
        Color::fromRGBA(0x4c5d90ff),
        Color::fromRGBA(0x0b296eff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x001f69ff),
        Color::fromRGBA(0x194168ff),
        Color::fromRGBA(0x3f672bff),
        Color::fromRGBA(0x3a6e22ff),
        Color::fromRGBA(0x417d54ff),
        Color::fromRGBA(0x8c9a80ff),
        Color::fromRGBA(0x476926ff),
        Color::fromRGBA(0x3c7028ff),
        Color::fromRGBA(0x194663ff),
        Color::fromRGBA(0x001f6aff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x3b568dff),
        Color::fromRGBA(0x959ab8ff),
        Color::fromRGBA(0xdaaab8ff),
        Color::fromRGBA(0xd48193ff),
        Color::fromRGBA(0x8e5b80ff),
        Color::fromRGBA(0x343c77ff),
        Color::fromRGBA(0x5e6c9aff),
        Color::fromRGBA(0xd54a60ff),
        Color::fromRGBA(0xd5465dff),
        Color::fromRGBA(0x626f9bff),
        Color::fromRGBA(0x375189ff),
        Color::fromRGBA(0x9b9cb9ff),
        Color::fromRGBA(0xddabb8ff),
        Color::fromRGBA(0xd17e92ff),
        Color::fromRGBA(0x88577dff),
        Color::fromRGBA(0x313c77ff),
        Color::fromRGBA(0x02226aff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x001f69ff),
        Color::fromRGBA(0x194168ff),
        Color::fromRGBA(0x42672bff),
        Color::fromRGBA(0x407026ff),
        Color::fromRGBA(0x809e86ff),
        Color::fromRGBA(0xc3c2b9ff),
        Color::fromRGBA(0x5d7132ff),
        Color::fromRGBA(0x356f29ff),
        Color::fromRGBA(0x194663ff),
        Color::fromRGBA(0x001f69ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0xc7a7b9ff),
        Color::fromRGBA(0xc87a90ff),
        Color::fromRGBA(0x8f5b7fff),
        Color::fromRGBA(0x394079ff),
        Color::fromRGBA(0x06276dff),
        Color::fromRGBA(0x001c66ff),
        Color::fromRGBA(0x4d5e91ff),
        Color::fromRGBA(0xbb4562ff),
        Color::fromRGBA(0xbc425fff),
        Color::fromRGBA(0x526192ff),
        Color::fromRGBA(0x001b65ff),
        Color::fromRGBA(0x05246bff),
        Color::fromRGBA(0x3c578eff),
        Color::fromRGBA(0x9d9fbbff),
        Color::fromRGBA(0xd29fb0ff),
        Color::fromRGBA(0xa36080ff),
        Color::fromRGBA(0x14266aff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x001f69ff),
        Color::fromRGBA(0x194168ff),
        Color::fromRGBA(0x2a682dff),
        Color::fromRGBA(0x4f6e2cff),
        Color::fromRGBA(0x8ea68dff),
        Color::fromRGBA(0xa2b1a0ff),
        Color::fromRGBA(0x4c6a27ff),
        Color::fromRGBA(0x366f29ff),
        Color::fromRGBA(0x184562ff),
        Color::fromRGBA(0x001f69ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x1d2668ff),
        Color::fromRGBA(0x1a286aff),
        Color::fromRGBA(0x07276dff),
        Color::fromRGBA(0x001f68ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x0c2a6eff),
        Color::fromRGBA(0x1c2668ff),
        Color::fromRGBA(0x1c2567ff),
        Color::fromRGBA(0x0c2a6fff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x001e67ff),
        Color::fromRGBA(0x06256cff),
        Color::fromRGBA(0x1f3d7cff),
        Color::fromRGBA(0x1d3373ff),
        Color::fromRGBA(0x042168ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x001f69ff),
        Color::fromRGBA(0x1a4167ff),
        Color::fromRGBA(0x21612dff),
        Color::fromRGBA(0x486e23ff),
        Color::fromRGBA(0xa4b698ff),
        Color::fromRGBA(0xa8bdb0ff),
        Color::fromRGBA(0x466a28ff),
        Color::fromRGBA(0x397029ff),
        Color::fromRGBA(0x184562ff),
        Color::fromRGBA(0x001f69ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x001f67ff),
        Color::fromRGBA(0x001f68ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x001f69ff),
        Color::fromRGBA(0x183e68ff),
        Color::fromRGBA(0x46692bff),
        Color::fromRGBA(0x336d24ff),
        Color::fromRGBA(0x91b5a1ff),
        Color::fromRGBA(0xdae1ddff),
        Color::fromRGBA(0x60793dff),
        Color::fromRGBA(0x356e28ff),
        Color::fromRGBA(0x174365ff),
        Color::fromRGBA(0x001f69ff),
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
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x05246aff),
        Color::fromRGBA(0x596369ff),
        Color::fromRGBA(0x747f4aff),
        Color::fromRGBA(0x326d2bff),
        Color::fromRGBA(0x679776ff),
        Color::fromRGBA(0xa5bba8ff),
        Color::fromRGBA(0x597c43ff),
        Color::fromRGBA(0x6b854bff),
        Color::fromRGBA(0x66706bff),
        Color::fromRGBA(0x09276aff),
        Color::fromRGBA(0x002068ff),
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
        Color::fromRGBA(0x001f69ff),
        Color::fromRGBA(0x2b406bff),
        Color::fromRGBA(0xbb9d49ff),
        Color::fromRGBA(0xbb9e46ff),
        Color::fromRGBA(0x67815aff),
        Color::fromRGBA(0x2b7042ff),
        Color::fromRGBA(0x296e3dff),
        Color::fromRGBA(0x64825aff),
        Color::fromRGBA(0xb39c4eff),
        Color::fromRGBA(0xc4a348ff),
        Color::fromRGBA(0x3a4a6bff),
        Color::fromRGBA(0x001f69ff),
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
        Color::fromRGBA(0x09276aff),
        Color::fromRGBA(0x263d6dff),
        Color::fromRGBA(0x75705cff),
        Color::fromRGBA(0xaa8f45ff),
        Color::fromRGBA(0xab9642ff),
        Color::fromRGBA(0xb29b3eff),
        Color::fromRGBA(0xb39542ff),
        Color::fromRGBA(0x797156ff),
        Color::fromRGBA(0x2a3f6dff),
        Color::fromRGBA(0x0d2a6bff),
        Color::fromRGBA(0x002068ff),
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
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x001f68ff),
        Color::fromRGBA(0x04236cff),
        Color::fromRGBA(0x223a6cff),
        Color::fromRGBA(0x434e62ff),
        Color::fromRGBA(0x454f60ff),
        Color::fromRGBA(0x253b69ff),
        Color::fromRGBA(0x05246cff),
        Color::fromRGBA(0x001f68ff),
        Color::fromRGBA(0x002068ff),
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
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x001f68ff),
        Color::fromRGBA(0x001e69ff),
        Color::fromRGBA(0x001e69ff),
        Color::fromRGBA(0x001f69ff),
        Color::fromRGBA(0x002068ff),
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
        Color::fromRGBA(0x012169ff)
    ],
];

$img = new Image(16, 8);
$img->append($pixels['16x8'], new Size(16, 8));
$img->append($pixels['32x16'], new Size(32, 16));

return $img;