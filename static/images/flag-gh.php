<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x11' => [
        Color::fromRGBA(0xce1425ff),
        Color::fromRGBA(0xce1425ff),
        Color::fromRGBA(0xce1425ff),
        Color::fromRGBA(0xce1425ff),
        Color::fromRGBA(0xce1425ff),
        Color::fromRGBA(0xce1425ff),
        Color::fromRGBA(0xce1425ff),
        Color::fromRGBA(0xce1425ff),
        Color::fromRGBA(0xce1425ff),
        Color::fromRGBA(0xce1425ff),
        Color::fromRGBA(0xce1425ff),
        Color::fromRGBA(0xce1425ff),
        Color::fromRGBA(0xce1425ff),
        Color::fromRGBA(0xce1425ff),
        Color::fromRGBA(0xce1425ff),
        Color::fromRGBA(0xce1425ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xcd0e26ff),
        Color::fromRGBA(0xcd0e26ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xde5320ff),
        Color::fromRGBA(0xde5320ff),
        Color::fromRGBA(0xde5320ff),
        Color::fromRGBA(0xde5320ff),
        Color::fromRGBA(0xde5320ff),
        Color::fromRGBA(0xde5420ff),
        Color::fromRGBA(0xdf5520ff),
        Color::fromRGBA(0xd74e1fff),
        Color::fromRGBA(0xd74e1fff),
        Color::fromRGBA(0xdf5520ff),
        Color::fromRGBA(0xde5420ff),
        Color::fromRGBA(0xde5320ff),
        Color::fromRGBA(0xde5320ff),
        Color::fromRGBA(0xde5320ff),
        Color::fromRGBA(0xde5320ff),
        Color::fromRGBA(0xde5320ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xeec414ff),
        Color::fromRGBA(0xa98b0eff),
        Color::fromRGBA(0xa98b0eff),
        Color::fromRGBA(0xeec414ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xbf9e10ff),
        Color::fromRGBA(0x292203ff),
        Color::fromRGBA(0x292203ff),
        Color::fromRGBA(0xbf9f10ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xf9d016ff),
        Color::fromRGBA(0xf9d016ff),
        Color::fromRGBA(0xf9d016ff),
        Color::fromRGBA(0xf9d016ff),
        Color::fromRGBA(0xf9d016ff),
        Color::fromRGBA(0xfbd116ff),
        Color::fromRGBA(0xe5bf14ff),
        Color::fromRGBA(0x625209ff),
        Color::fromRGBA(0x625209ff),
        Color::fromRGBA(0xe5bf14ff),
        Color::fromRGBA(0xfbd116ff),
        Color::fromRGBA(0xf9d016ff),
        Color::fromRGBA(0xf9d016ff),
        Color::fromRGBA(0xf9d016ff),
        Color::fromRGBA(0xf9d016ff),
        Color::fromRGBA(0xf9d016ff),
        Color::fromRGBA(0x578e30ff),
        Color::fromRGBA(0x578e30ff),
        Color::fromRGBA(0x578e30ff),
        Color::fromRGBA(0x578e30ff),
        Color::fromRGBA(0x578e30ff),
        Color::fromRGBA(0x588e30ff),
        Color::fromRGBA(0x4f872fff),
        Color::fromRGBA(0x48812fff),
        Color::fromRGBA(0x48812fff),
        Color::fromRGBA(0x4f872fff),
        Color::fromRGBA(0x588e30ff),
        Color::fromRGBA(0x578e30ff),
        Color::fromRGBA(0x578e30ff),
        Color::fromRGBA(0x578e30ff),
        Color::fromRGBA(0x578e30ff),
        Color::fromRGBA(0x578e30ff),
        Color::fromRGBA(0x00693fff),
        Color::fromRGBA(0x00693fff),
        Color::fromRGBA(0x00693fff),
        Color::fromRGBA(0x00693fff),
        Color::fromRGBA(0x00693fff),
        Color::fromRGBA(0x00693fff),
        Color::fromRGBA(0x00693fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x00693fff),
        Color::fromRGBA(0x00693fff),
        Color::fromRGBA(0x00693fff),
        Color::fromRGBA(0x00693fff),
        Color::fromRGBA(0x00693fff),
        Color::fromRGBA(0x00693fff),
        Color::fromRGBA(0x00693fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3ffd),
        Color::fromRGBA(0x006b3ffd),
        Color::fromRGBA(0x006b3ffd),
        Color::fromRGBA(0x006b3ffd),
        Color::fromRGBA(0x006b3ffd),
        Color::fromRGBA(0x006b3ffd),
        Color::fromRGBA(0x006b3ffd),
        Color::fromRGBA(0x006b3ffd),
        Color::fromRGBA(0x006b3ffd),
        Color::fromRGBA(0x006b3ffd),
        Color::fromRGBA(0x006b3ffd),
        Color::fromRGBA(0x006b3ffd),
        Color::fromRGBA(0x006b3ffd),
        Color::fromRGBA(0x006b3ffd),
        Color::fromRGBA(0x006b3ffd),
        Color::fromRGBA(0x006b3ffd)
    ],
    '32x21' => [
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xcd1026ff),
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
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd22724ff),
        Color::fromRGBA(0xd22724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xd32724ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xf8ba18ff),
        Color::fromRGBA(0xc99414ff),
        Color::fromRGBA(0xc99414ff),
        Color::fromRGBA(0xf8ba18ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xf6b817ff),
        Color::fromRGBA(0xfcd215ff),
        Color::fromRGBA(0xfcd215ff),
        Color::fromRGBA(0xfcd215ff),
        Color::fromRGBA(0xfcd215ff),
        Color::fromRGBA(0xfcd215ff),
        Color::fromRGBA(0xfcd215ff),
        Color::fromRGBA(0xfcd215ff),
        Color::fromRGBA(0xfcd215ff),
        Color::fromRGBA(0xfcd215ff),
        Color::fromRGBA(0xfcd215ff),
        Color::fromRGBA(0xfcd215ff),
        Color::fromRGBA(0xfcd215ff),
        Color::fromRGBA(0xfdd316ff),
        Color::fromRGBA(0xffd616ff),
        Color::fromRGBA(0xffd716ff),
        Color::fromRGBA(0x7d690aff),
        Color::fromRGBA(0x7d690aff),
        Color::fromRGBA(0xffd716ff),
        Color::fromRGBA(0xffd616ff),
        Color::fromRGBA(0xfdd316ff),
        Color::fromRGBA(0xfcd215ff),
        Color::fromRGBA(0xfcd215ff),
        Color::fromRGBA(0xfcd215ff),
        Color::fromRGBA(0xfcd215ff),
        Color::fromRGBA(0xfcd215ff),
        Color::fromRGBA(0xfcd215ff),
        Color::fromRGBA(0xfcd215ff),
        Color::fromRGBA(0xfcd215ff),
        Color::fromRGBA(0xfcd215ff),
        Color::fromRGBA(0xfcd215ff),
        Color::fromRGBA(0xfcd215ff),
        Color::fromRGBA(0xfcd215ff),
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
        Color::fromRGBA(0xd8b312ff),
        Color::fromRGBA(0xa5890eff),
        Color::fromRGBA(0x9f830dff),
        Color::fromRGBA(0x2c2403ff),
        Color::fromRGBA(0x2c2503ff),
        Color::fromRGBA(0x9f830dff),
        Color::fromRGBA(0xa5890eff),
        Color::fromRGBA(0xd8b312ff),
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
        Color::fromRGBA(0xfbd016ff),
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
        Color::fromRGBA(0xe5be14ff),
        Color::fromRGBA(0x74600aff),
        Color::fromRGBA(0x100d01ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x100d01ff),
        Color::fromRGBA(0x74600aff),
        Color::fromRGBA(0xe5be14ff),
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
        Color::fromRGBA(0xfbd016ff),
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
        Color::fromRGBA(0xfbd015ff),
        Color::fromRGBA(0xfdd216ff),
        Color::fromRGBA(0xf8ce15ff),
        Color::fromRGBA(0x615008ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x615008ff),
        Color::fromRGBA(0xf8ce15ff),
        Color::fromRGBA(0xfdd216ff),
        Color::fromRGBA(0xfbd015ff),
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
        Color::fromRGBA(0xfbd016ff),
        Color::fromRGBA(0xfed115ff),
        Color::fromRGBA(0xfed115ff),
        Color::fromRGBA(0xfed115ff),
        Color::fromRGBA(0xfed115ff),
        Color::fromRGBA(0xfed115ff),
        Color::fromRGBA(0xfed115ff),
        Color::fromRGBA(0xfed115ff),
        Color::fromRGBA(0xfed115ff),
        Color::fromRGBA(0xfed115ff),
        Color::fromRGBA(0xfed115ff),
        Color::fromRGBA(0xfed115ff),
        Color::fromRGBA(0xfed115ff),
        Color::fromRGBA(0xfed215ff),
        Color::fromRGBA(0xf0c614ff),
        Color::fromRGBA(0x453805ff),
        Color::fromRGBA(0x534406ff),
        Color::fromRGBA(0x534406ff),
        Color::fromRGBA(0x453805ff),
        Color::fromRGBA(0xf0c614ff),
        Color::fromRGBA(0xfed215ff),
        Color::fromRGBA(0xfed115ff),
        Color::fromRGBA(0xfed115ff),
        Color::fromRGBA(0xfed115ff),
        Color::fromRGBA(0xfed115ff),
        Color::fromRGBA(0xfed115ff),
        Color::fromRGBA(0xfed115ff),
        Color::fromRGBA(0xfed115ff),
        Color::fromRGBA(0xfed115ff),
        Color::fromRGBA(0xfed115ff),
        Color::fromRGBA(0xfed115ff),
        Color::fromRGBA(0xfed115ff),
        Color::fromRGBA(0xfdd115ff),
        Color::fromRGBA(0xdcc41bff),
        Color::fromRGBA(0xdcc41bff),
        Color::fromRGBA(0xdcc41bff),
        Color::fromRGBA(0xdcc41bff),
        Color::fromRGBA(0xdcc41bff),
        Color::fromRGBA(0xdcc41bff),
        Color::fromRGBA(0xdcc41bff),
        Color::fromRGBA(0xdcc41bff),
        Color::fromRGBA(0xdcc41bff),
        Color::fromRGBA(0xdcc41bff),
        Color::fromRGBA(0xdcc41bff),
        Color::fromRGBA(0xdcc41bff),
        Color::fromRGBA(0xdec51bff),
        Color::fromRGBA(0xb9a718ff),
        Color::fromRGBA(0x7d7512ff),
        Color::fromRGBA(0xd1bb1aff),
        Color::fromRGBA(0xd1bb1aff),
        Color::fromRGBA(0x7d7512ff),
        Color::fromRGBA(0xb9a718ff),
        Color::fromRGBA(0xdec51bff),
        Color::fromRGBA(0xdcc41bff),
        Color::fromRGBA(0xdcc41bff),
        Color::fromRGBA(0xdcc41bff),
        Color::fromRGBA(0xdcc41bff),
        Color::fromRGBA(0xdcc41bff),
        Color::fromRGBA(0xdcc41bff),
        Color::fromRGBA(0xdcc41bff),
        Color::fromRGBA(0xdcc41bff),
        Color::fromRGBA(0xdcc41bff),
        Color::fromRGBA(0xdcc41bff),
        Color::fromRGBA(0xdcc41bff),
        Color::fromRGBA(0xdcc41bff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x1a7439ff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x1e773aff),
        Color::fromRGBA(0x1e773aff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x1a7439ff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x1d773aff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006a3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3fff),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe),
        Color::fromRGBA(0x006b3ffe)
    ],
];

$img = new Image(16, 11);
$img->append($pixels['16x11'], new Size(16, 11));
$img->append($pixels['32x21'], new Size(32, 21));

return $img;
