<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x11' => [
        Color::fromRGBA(0x18b539ff),
        Color::fromRGBA(0x18b539ff),
        Color::fromRGBA(0x18b539ff),
        Color::fromRGBA(0x18b439ff),
        Color::fromRGBA(0x19b539ff),
        Color::fromRGBA(0xaac522ff),
        Color::fromRGBA(0xffce15ff),
        Color::fromRGBA(0xfbcd16ff),
        Color::fromRGBA(0xfbcd16ff),
        Color::fromRGBA(0xfcd015ff),
        Color::fromRGBA(0xeb8b1bfe),
        Color::fromRGBA(0xce1225fd),
        Color::fromRGBA(0xcd1026fd),
        Color::fromRGBA(0xce1126fd),
        Color::fromRGBA(0xce1126fd),
        Color::fromRGBA(0xce1126fd),
        Color::fromRGBA(0x13b53aff),
        Color::fromRGBA(0x13b53aff),
        Color::fromRGBA(0x13b53aff),
        Color::fromRGBA(0x13b43aff),
        Color::fromRGBA(0x15b539ff),
        Color::fromRGBA(0xa9c722ff),
        Color::fromRGBA(0xffd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd415ff),
        Color::fromRGBA(0xeb8c1bff),
        Color::fromRGBA(0xce1225ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x13b43aff),
        Color::fromRGBA(0x15b539ff),
        Color::fromRGBA(0xa9c722ff),
        Color::fromRGBA(0xffd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd415ff),
        Color::fromRGBA(0xeb8c1bff),
        Color::fromRGBA(0xce1225ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x13b43aff),
        Color::fromRGBA(0x15b539ff),
        Color::fromRGBA(0xa9c722ff),
        Color::fromRGBA(0xffd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd415ff),
        Color::fromRGBA(0xeb8c1bff),
        Color::fromRGBA(0xce1225ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x13b43aff),
        Color::fromRGBA(0x15b539ff),
        Color::fromRGBA(0xa9c722ff),
        Color::fromRGBA(0xffd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd415ff),
        Color::fromRGBA(0xeb8c1bff),
        Color::fromRGBA(0xce1225ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x13b43aff),
        Color::fromRGBA(0x15b539ff),
        Color::fromRGBA(0xa9c722ff),
        Color::fromRGBA(0xffd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd415ff),
        Color::fromRGBA(0xeb8c1bff),
        Color::fromRGBA(0xce1225ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x13b43aff),
        Color::fromRGBA(0x15b539ff),
        Color::fromRGBA(0xa9c722ff),
        Color::fromRGBA(0xffd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd415ff),
        Color::fromRGBA(0xeb8c1bff),
        Color::fromRGBA(0xce1225ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x13b43aff),
        Color::fromRGBA(0x15b539ff),
        Color::fromRGBA(0xa9c722ff),
        Color::fromRGBA(0xffd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd415ff),
        Color::fromRGBA(0xeb8c1bff),
        Color::fromRGBA(0xce1225ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x13b43aff),
        Color::fromRGBA(0x15b539ff),
        Color::fromRGBA(0xa9c722ff),
        Color::fromRGBA(0xffd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd415ff),
        Color::fromRGBA(0xeb8c1bff),
        Color::fromRGBA(0xce1225ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x13b53aff),
        Color::fromRGBA(0x13b53aff),
        Color::fromRGBA(0x13b53aff),
        Color::fromRGBA(0x13b43aff),
        Color::fromRGBA(0x15b539ff),
        Color::fromRGBA(0xa9c722ff),
        Color::fromRGBA(0xffd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd415ff),
        Color::fromRGBA(0xeb8c1bff),
        Color::fromRGBA(0xce1225ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x18b539ff),
        Color::fromRGBA(0x18b539ff),
        Color::fromRGBA(0x18b539ff),
        Color::fromRGBA(0x18b439ff),
        Color::fromRGBA(0x19b539ff),
        Color::fromRGBA(0xaac522ff),
        Color::fromRGBA(0xffce15ff),
        Color::fromRGBA(0xfbcd16ff),
        Color::fromRGBA(0xfbcd16ff),
        Color::fromRGBA(0xfcd015ff),
        Color::fromRGBA(0xeb8b1bfe),
        Color::fromRGBA(0xce1225fd),
        Color::fromRGBA(0xcd1026fd),
        Color::fromRGBA(0xce1126fd),
        Color::fromRGBA(0xce1126fd),
        Color::fromRGBA(0xce1126fd)
    ],
    '32x21' => [
        Color::fromRGBA(0x17b539ff),
        Color::fromRGBA(0x17b539ff),
        Color::fromRGBA(0x17b539ff),
        Color::fromRGBA(0x17b539ff),
        Color::fromRGBA(0x17b539ff),
        Color::fromRGBA(0x17b539ff),
        Color::fromRGBA(0x17b539ff),
        Color::fromRGBA(0x17b539ff),
        Color::fromRGBA(0x17b539ff),
        Color::fromRGBA(0x13b43aff),
        Color::fromRGBA(0x68be2cff),
        Color::fromRGBA(0xface16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbcd16ff),
        Color::fromRGBA(0xde5420fe),
        Color::fromRGBA(0xcd0d26fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0x13b53aff),
        Color::fromRGBA(0x13b53aff),
        Color::fromRGBA(0x13b53aff),
        Color::fromRGBA(0x13b53aff),
        Color::fromRGBA(0x13b53aff),
        Color::fromRGBA(0x13b53aff),
        Color::fromRGBA(0x13b53aff),
        Color::fromRGBA(0x13b53aff),
        Color::fromRGBA(0x13b53aff),
        Color::fromRGBA(0x0fb43aff),
        Color::fromRGBA(0x66bf2dff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfbd016ff),
        Color::fromRGBA(0xde5520ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x10b43aff),
        Color::fromRGBA(0x66be2dff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xde5520ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x10b43aff),
        Color::fromRGBA(0x66be2dff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xde5520ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x10b43aff),
        Color::fromRGBA(0x66be2dff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xde5520ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x10b43aff),
        Color::fromRGBA(0x66be2dff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xde5520ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x10b43aff),
        Color::fromRGBA(0x66be2dff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xde5520ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x10b43aff),
        Color::fromRGBA(0x66be2dff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xde5520ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x10b43aff),
        Color::fromRGBA(0x66be2dff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xde5520ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x10b43aff),
        Color::fromRGBA(0x66be2dff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xde5520ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x10b43aff),
        Color::fromRGBA(0x66be2dff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xde5520ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x10b43aff),
        Color::fromRGBA(0x66be2dff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xde5520ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x10b43aff),
        Color::fromRGBA(0x66be2dff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xde5520ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x10b43aff),
        Color::fromRGBA(0x66be2dff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xde5520ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x10b43aff),
        Color::fromRGBA(0x66be2dff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xde5520ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x10b43aff),
        Color::fromRGBA(0x66be2dff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xde5520ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x10b43aff),
        Color::fromRGBA(0x66be2dff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xde5520ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x10b43aff),
        Color::fromRGBA(0x66be2dff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xde5520ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x14b53aff),
        Color::fromRGBA(0x10b43aff),
        Color::fromRGBA(0x66be2dff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xde5520ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x13b53aff),
        Color::fromRGBA(0x13b53aff),
        Color::fromRGBA(0x13b53aff),
        Color::fromRGBA(0x13b53aff),
        Color::fromRGBA(0x13b53aff),
        Color::fromRGBA(0x13b53aff),
        Color::fromRGBA(0x13b53aff),
        Color::fromRGBA(0x13b53aff),
        Color::fromRGBA(0x13b53aff),
        Color::fromRGBA(0x0fb43aff),
        Color::fromRGBA(0x66bf2dff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfbd016ff),
        Color::fromRGBA(0xde5520ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0x17b539ff),
        Color::fromRGBA(0x17b539ff),
        Color::fromRGBA(0x17b539ff),
        Color::fromRGBA(0x17b539ff),
        Color::fromRGBA(0x17b539ff),
        Color::fromRGBA(0x17b539ff),
        Color::fromRGBA(0x17b539ff),
        Color::fromRGBA(0x17b539ff),
        Color::fromRGBA(0x17b539ff),
        Color::fromRGBA(0x13b43aff),
        Color::fromRGBA(0x68be2cff),
        Color::fromRGBA(0xface16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbcd16ff),
        Color::fromRGBA(0xde5420fe),
        Color::fromRGBA(0xcd0d26fe),
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