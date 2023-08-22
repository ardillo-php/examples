<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x8' => [
        Color::fromRGBA(0x977394ff),
        Color::fromRGBA(0xa48ba7ff),
        Color::fromRGBA(0x4d6294ff),
        Color::fromRGBA(0x98587bff),
        Color::fromRGBA(0x995578ff),
        Color::fromRGBA(0x474b80ff),
        Color::fromRGBA(0xa17c9bff),
        Color::fromRGBA(0x8a7c9fff),
        Color::fromRGBA(0x0e2c70ff),
        Color::fromRGBA(0x001f68ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x022265ff),
        Color::fromRGBA(0x032166ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012168ff),
        Color::fromRGBA(0x995376ff),
        Color::fromRGBA(0xc5667eff),
        Color::fromRGBA(0xd47e91ff),
        Color::fromRGBA(0xcb556dff),
        Color::fromRGBA(0xc94c65ff),
        Color::fromRGBA(0xd16f83ff),
        Color::fromRGBA(0xcc7a8fff),
        Color::fromRGBA(0x885279ff),
        Color::fromRGBA(0x10256aff),
        Color::fromRGBA(0x0f2d62ff),
        Color::fromRGBA(0x0f2d60ff),
        Color::fromRGBA(0x1a365cff),
        Color::fromRGBA(0x243661ff),
        Color::fromRGBA(0x0c2b61ff),
        Color::fromRGBA(0x052763ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x9d5b7cff),
        Color::fromRGBA(0xcc7a90ff),
        Color::fromRGBA(0xd47185ff),
        Color::fromRGBA(0xcb4e67ff),
        Color::fromRGBA(0xcd556dff),
        Color::fromRGBA(0xd78092ff),
        Color::fromRGBA(0xca6980ff),
        Color::fromRGBA(0x8a4f76ff),
        Color::fromRGBA(0x10256bff),
        Color::fromRGBA(0x1f4051ff),
        Color::fromRGBA(0x254e41ff),
        Color::fromRGBA(0x4a5a50ff),
        Color::fromRGBA(0x51604aff),
        Color::fromRGBA(0x68733dff),
        Color::fromRGBA(0x244252ff),
        Color::fromRGBA(0x001f69ff),
        Color::fromRGBA(0x897c9fff),
        Color::fromRGBA(0x8f7295ff),
        Color::fromRGBA(0x40477eff),
        Color::fromRGBA(0x865078ff),
        Color::fromRGBA(0x885279ff),
        Color::fromRGBA(0x455b90ff),
        Color::fromRGBA(0x9280a1ff),
        Color::fromRGBA(0x75608aff),
        Color::fromRGBA(0x0a246bff),
        Color::fromRGBA(0x113457ff),
        Color::fromRGBA(0x526e40ff),
        Color::fromRGBA(0x6c7958ff),
        Color::fromRGBA(0x5b7457ff),
        Color::fromRGBA(0x4d673fff),
        Color::fromRGBA(0x253d5aff),
        Color::fromRGBA(0x001f69ff),
        Color::fromRGBA(0x1d2d6eff),
        Color::fromRGBA(0x08246aff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x11266aff),
        Color::fromRGBA(0x12266aff),
        Color::fromRGBA(0x001f68ff),
        Color::fromRGBA(0x09296eff),
        Color::fromRGBA(0x1b3172ff),
        Color::fromRGBA(0x02206aff),
        Color::fromRGBA(0x1f3c54ff),
        Color::fromRGBA(0x457359ff),
        Color::fromRGBA(0x558e84ff),
        Color::fromRGBA(0x44838aff),
        Color::fromRGBA(0x456a4cff),
        Color::fromRGBA(0x253f55ff),
        Color::fromRGBA(0x001f69ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x001f68ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x112e5fff),
        Color::fromRGBA(0x4d6b50ff),
        Color::fromRGBA(0x658e3fff),
        Color::fromRGBA(0x548249ff),
        Color::fromRGBA(0x2a534fff),
        Color::fromRGBA(0x0e2d60ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012168ff),
        Color::fromRGBA(0x2b4256ff),
        Color::fromRGBA(0x466735ff),
        Color::fromRGBA(0x41603cff),
        Color::fromRGBA(0x203b59ff),
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
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x052367ff),
        Color::fromRGBA(0x062665ff),
        Color::fromRGBA(0x062665ff),
        Color::fromRGBA(0x062467ff),
        Color::fromRGBA(0x002069ff),
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
        Color::fromRGBA(0x012168ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x383f78ff),
        Color::fromRGBA(0x88597fff),
        Color::fromRGBA(0xd07d91ff),
        Color::fromRGBA(0xd9aab8ff),
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
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012267ff),
        Color::fromRGBA(0x022364ff),
        Color::fromRGBA(0x022167ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x536394ff),
        Color::fromRGBA(0x5a6a99ff),
        Color::fromRGBA(0x8c82a5ff),
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
        Color::fromRGBA(0x5b6a99ff),
        Color::fromRGBA(0x48598dff),
        Color::fromRGBA(0x0b286eff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x001f69ff),
        Color::fromRGBA(0x001f69ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x06295eff),
        Color::fromRGBA(0x123a47ff),
        Color::fromRGBA(0x2c3151ff),
        Color::fromRGBA(0x102563ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x001f6aff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012168ff),
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
        Color::fromRGBA(0x012168ff),
        Color::fromRGBA(0x334755ff),
        Color::fromRGBA(0x364f4cff),
        Color::fromRGBA(0x012167ff),
        Color::fromRGBA(0x0f2b66ff),
        Color::fromRGBA(0x3e515bff),
        Color::fromRGBA(0x4a5068ff),
        Color::fromRGBA(0x1f3368ff),
        Color::fromRGBA(0x062466ff),
        Color::fromRGBA(0x1b3b54ff),
        Color::fromRGBA(0x0a2f5aff),
        Color::fromRGBA(0x012168ff),
        Color::fromRGBA(0x002069ff),
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
        Color::fromRGBA(0x062467ff),
        Color::fromRGBA(0x677041ff),
        Color::fromRGBA(0x3e6434ff),
        Color::fromRGBA(0x093056ff),
        Color::fromRGBA(0x203a5aff),
        Color::fromRGBA(0x67724dff),
        Color::fromRGBA(0x647054ff),
        Color::fromRGBA(0x1a3460ff),
        Color::fromRGBA(0x3b4d53ff),
        Color::fromRGBA(0x7c8a2dff),
        Color::fromRGBA(0x1d4f3bff),
        Color::fromRGBA(0x042662ff),
        Color::fromRGBA(0x002069ff),
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
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x052762ff),
        Color::fromRGBA(0x1d4942ff),
        Color::fromRGBA(0x245a31ff),
        Color::fromRGBA(0x1e5337ff),
        Color::fromRGBA(0x415453ff),
        Color::fromRGBA(0x71714dff),
        Color::fromRGBA(0x6d782fff),
        Color::fromRGBA(0x455c41ff),
        Color::fromRGBA(0xa29c30ff),
        Color::fromRGBA(0xa59f2eff),
        Color::fromRGBA(0x3b504eff),
        Color::fromRGBA(0x052565ff),
        Color::fromRGBA(0x002069ff),
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
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x032564ff),
        Color::fromRGBA(0x1b4d3eff),
        Color::fromRGBA(0x2b5938ff),
        Color::fromRGBA(0x314b4dff),
        Color::fromRGBA(0x616a3cff),
        Color::fromRGBA(0x706755ff),
        Color::fromRGBA(0x7b7d46ff),
        Color::fromRGBA(0x4b6833ff),
        Color::fromRGBA(0x254252ff),
        Color::fromRGBA(0x949432ff),
        Color::fromRGBA(0x777c3eff),
        Color::fromRGBA(0x042367ff),
        Color::fromRGBA(0x002069ff),
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
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x0a2863ff),
        Color::fromRGBA(0x63723aff),
        Color::fromRGBA(0xa1a737ff),
        Color::fromRGBA(0x7f9949ff),
        Color::fromRGBA(0x7a7c6bff),
        Color::fromRGBA(0x6e7c82ff),
        Color::fromRGBA(0x5c804fff),
        Color::fromRGBA(0x255737ff),
        Color::fromRGBA(0x3a5644ff),
        Color::fromRGBA(0x0b2864ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012168ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x1d2667ff),
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
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x566742ff),
        Color::fromRGBA(0x8f912eff),
        Color::fromRGBA(0x357377ff),
        Color::fromRGBA(0x0b70beff),
        Color::fromRGBA(0x739762ff),
        Color::fromRGBA(0x398496ff),
        Color::fromRGBA(0x0c6eb4ff),
        Color::fromRGBA(0x3c654cff),
        Color::fromRGBA(0x234e3dff),
        Color::fromRGBA(0x325244ff),
        Color::fromRGBA(0x052367ff),
        Color::fromRGBA(0x002069ff),
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
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x214a45ff),
        Color::fromRGBA(0x35612eff),
        Color::fromRGBA(0x0f5d7fff),
        Color::fromRGBA(0x2a80a3ff),
        Color::fromRGBA(0x99b26eff),
        Color::fromRGBA(0x75a073ff),
        Color::fromRGBA(0x0f6fb5ff),
        Color::fromRGBA(0x597453ff),
        Color::fromRGBA(0x8d902dff),
        Color::fromRGBA(0x70793cff),
        Color::fromRGBA(0x032268ff),
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
        Color::fromRGBA(0x19355bff),
        Color::fromRGBA(0x7f872eff),
        Color::fromRGBA(0x31697bff),
        Color::fromRGBA(0x5a915cff),
        Color::fromRGBA(0x859f43ff),
        Color::fromRGBA(0x729637ff),
        Color::fromRGBA(0x397f84ff),
        Color::fromRGBA(0x174a5cff),
        Color::fromRGBA(0x416633ff),
        Color::fromRGBA(0x1c365cff),
        Color::fromRGBA(0x001f69ff),
        Color::fromRGBA(0x012168ff),
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
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x0e2b64ff),
        Color::fromRGBA(0x75793fff),
        Color::fromRGBA(0x526b53ff),
        Color::fromRGBA(0x53832aff),
        Color::fromRGBA(0x739119ff),
        Color::fromRGBA(0x5b861bff),
        Color::fromRGBA(0x4c7841ff),
        Color::fromRGBA(0x174351ff),
        Color::fromRGBA(0x144247ff),
        Color::fromRGBA(0x012365ff),
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
        Color::fromRGBA(0x012168ff),
        Color::fromRGBA(0x001f69ff),
        Color::fromRGBA(0x1e365eff),
        Color::fromRGBA(0x43564aff),
        Color::fromRGBA(0x466d2eff),
        Color::fromRGBA(0x73941aff),
        Color::fromRGBA(0x5f871dff),
        Color::fromRGBA(0x2f5440ff),
        Color::fromRGBA(0x43564bff),
        Color::fromRGBA(0x072863ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012168ff),
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
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x0a2765ff),
        Color::fromRGBA(0x546048ff),
        Color::fromRGBA(0x1c3b54ff),
        Color::fromRGBA(0x53722fff),
        Color::fromRGBA(0x3b5b3eff),
        Color::fromRGBA(0x2d4454ff),
        Color::fromRGBA(0x5f6845ff),
        Color::fromRGBA(0x012168ff),
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
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012168ff),
        Color::fromRGBA(0x032267ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x022464ff),
        Color::fromRGBA(0x012267ff),
        Color::fromRGBA(0x022168ff),
        Color::fromRGBA(0x062466ff),
        Color::fromRGBA(0x012168ff),
        Color::fromRGBA(0x002169ff),
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
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x002069ff),
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