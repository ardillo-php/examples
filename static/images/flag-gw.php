<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x8' => [
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1225ff),
        Color::fromRGBA(0xec901bfc),
        Color::fromRGBA(0xfcd415ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1026ff),
        Color::fromRGBA(0xce1225ff),
        Color::fromRGBA(0xec901bfc),
        Color::fromRGBA(0xfcd415ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xc41024ff),
        Color::fromRGBA(0xcc1025ff),
        Color::fromRGBA(0xce1225ff),
        Color::fromRGBA(0xed901bfc),
        Color::fromRGBA(0xfed415ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xb30e21ff),
        Color::fromRGBA(0x56070fff),
        Color::fromRGBA(0x940c1bff),
        Color::fromRGBA(0xcd1225ff),
        Color::fromRGBA(0xd88c1ffc),
        Color::fromRGBA(0xdece1bff),
        Color::fromRGBA(0xddca1cff),
        Color::fromRGBA(0xddca1cff),
        Color::fromRGBA(0xddca1cff),
        Color::fromRGBA(0xddca1cff),
        Color::fromRGBA(0xddca1cff),
        Color::fromRGBA(0xddca1cff),
        Color::fromRGBA(0xddca1cff),
        Color::fromRGBA(0xddca1cff),
        Color::fromRGBA(0xddca1cff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xb70f21ff),
        Color::fromRGBA(0x55070fff),
        Color::fromRGBA(0x960c1bff),
        Color::fromRGBA(0xce1226ff),
        Color::fromRGBA(0x597239fc),
        Color::fromRGBA(0x1ba643ff),
        Color::fromRGBA(0x1ea442ff),
        Color::fromRGBA(0x1ea442ff),
        Color::fromRGBA(0x1ea442ff),
        Color::fromRGBA(0x1ea442ff),
        Color::fromRGBA(0x1ea442ff),
        Color::fromRGBA(0x1ea442ff),
        Color::fromRGBA(0x1ea442ff),
        Color::fromRGBA(0x1ea442ff),
        Color::fromRGBA(0x1ea442ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcb1025ff),
        Color::fromRGBA(0xc81024ff),
        Color::fromRGBA(0xc91025ff),
        Color::fromRGBA(0xcc1126ff),
        Color::fromRGBA(0x446e3dfc),
        Color::fromRGBA(0x009f49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0xcd1125ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1026ff),
        Color::fromRGBA(0xcc1126ff),
        Color::fromRGBA(0x456e3dfc),
        Color::fromRGBA(0x00a049ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1025ff),
        Color::fromRGBA(0xcc1126ff),
        Color::fromRGBA(0x456e3dfc),
        Color::fromRGBA(0x00a049ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff)
    ],
    '32x16' => [
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xde5620fc),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xde5620fc),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xde5620fc),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xde5620fc),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1125ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xde5620fc),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xc81024ff),
        Color::fromRGBA(0xb10e20ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xde5620fc),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcc1025ff),
        Color::fromRGBA(0xc51024ff),
        Color::fromRGBA(0xa40d1eff),
        Color::fromRGBA(0x570710ff),
        Color::fromRGBA(0xbe0f23ff),
        Color::fromRGBA(0xc61024ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xdf5720fc),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xc81024ff),
        Color::fromRGBA(0x7a0a16ff),
        Color::fromRGBA(0x280307ff),
        Color::fromRGBA(0x0a0001ff),
        Color::fromRGBA(0x3f050bff),
        Color::fromRGBA(0x9b0c1cff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xd35322fc),
        Color::fromRGBA(0xdcca1cfd),
        Color::fromRGBA(0xdcca1cfd),
        Color::fromRGBA(0xdcca1cfd),
        Color::fromRGBA(0xdcca1cfd),
        Color::fromRGBA(0xdcca1cfd),
        Color::fromRGBA(0xdcca1cfd),
        Color::fromRGBA(0xdcca1cfd),
        Color::fromRGBA(0xdcca1cfd),
        Color::fromRGBA(0xdcca1cfd),
        Color::fromRGBA(0xdcca1cfd),
        Color::fromRGBA(0xdcca1cfd),
        Color::fromRGBA(0xdcca1cfd),
        Color::fromRGBA(0xdcca1cfd),
        Color::fromRGBA(0xdcca1cfd),
        Color::fromRGBA(0xdcca1cfd),
        Color::fromRGBA(0xdcca1cfd),
        Color::fromRGBA(0xdcca1cfd),
        Color::fromRGBA(0xdcca1cfd),
        Color::fromRGBA(0xdcca1cfd),
        Color::fromRGBA(0xdcca1cfd),
        Color::fromRGBA(0xdcca1cfd),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xbd0f22ff),
        Color::fromRGBA(0x300408ff),
        Color::fromRGBA(0x020000ff),
        Color::fromRGBA(0x630812ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xd10e25ff),
        Color::fromRGBA(0x8d4530fc),
        Color::fromRGBA(0x1aa343fd),
        Color::fromRGBA(0x1aa343fd),
        Color::fromRGBA(0x1aa343fd),
        Color::fromRGBA(0x1aa343fd),
        Color::fromRGBA(0x1aa343fd),
        Color::fromRGBA(0x1aa343fd),
        Color::fromRGBA(0x1aa343fd),
        Color::fromRGBA(0x1aa343fd),
        Color::fromRGBA(0x1aa343fd),
        Color::fromRGBA(0x1aa343fd),
        Color::fromRGBA(0x1aa343fd),
        Color::fromRGBA(0x1aa343fd),
        Color::fromRGBA(0x1aa343fd),
        Color::fromRGBA(0x1aa343fd),
        Color::fromRGBA(0x1aa343fd),
        Color::fromRGBA(0x1aa343fd),
        Color::fromRGBA(0x1aa343fd),
        Color::fromRGBA(0x1aa343fd),
        Color::fromRGBA(0x1aa343fd),
        Color::fromRGBA(0x1aa343fd),
        Color::fromRGBA(0x1aa343fd),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcf1126ff),
        Color::fromRGBA(0xb70f21ff),
        Color::fromRGBA(0x6d0914ff),
        Color::fromRGBA(0x890b19ff),
        Color::fromRGBA(0x780916ff),
        Color::fromRGBA(0xcb1025ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xd10e25ff),
        Color::fromRGBA(0x824432fc),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0x009d49ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xc81024ff),
        Color::fromRGBA(0xc91025ff),
        Color::fromRGBA(0xd01126ff),
        Color::fromRGBA(0xc51024ff),
        Color::fromRGBA(0xcb1025ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xd10e25ff),
        Color::fromRGBA(0x834432fc),
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
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1125ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xd10e25ff),
        Color::fromRGBA(0x834432fc),
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
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xd10e25ff),
        Color::fromRGBA(0x834432fc),
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
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xd10e25ff),
        Color::fromRGBA(0x834432fc),
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
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xd10e25ff),
        Color::fromRGBA(0x834432fc),
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
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xd10e25ff),
        Color::fromRGBA(0x834432fc),
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
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff),
        Color::fromRGBA(0x009e49ff)
    ],
];

$img = new Image(16, 8);
$img->append($pixels['16x8'], new Size(16, 8));
$img->append($pixels['32x16'], new Size(32, 16));

return $img;
