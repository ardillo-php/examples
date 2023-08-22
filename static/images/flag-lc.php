<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x8' => [
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccfeff),
        Color::fromRGBA(0x65cbffff),
        Color::fromRGBA(0x68cdfdff),
        Color::fromRGBA(0x68cdfdff),
        Color::fromRGBA(0x65cbffff),
        Color::fromRGBA(0x66ccfeff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x65cbfeff),
        Color::fromRGBA(0x67ccfeff),
        Color::fromRGBA(0x5dcaffff),
        Color::fromRGBA(0x94d6f3ff),
        Color::fromRGBA(0x94d6f3ff),
        Color::fromRGBA(0x5dcaffff),
        Color::fromRGBA(0x67ccfeff),
        Color::fromRGBA(0x65cbfeff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccfeff),
        Color::fromRGBA(0x63c8fbff),
        Color::fromRGBA(0x70dcffff),
        Color::fromRGBA(0x758b92ff),
        Color::fromRGBA(0x758b92ff),
        Color::fromRGBA(0x70dcffff),
        Color::fromRGBA(0x63c8fbff),
        Color::fromRGBA(0x66ccfeff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccfeff),
        Color::fromRGBA(0x67ccfeff),
        Color::fromRGBA(0x5ec8fdff),
        Color::fromRGBA(0x8ae0ffff),
        Color::fromRGBA(0x333333ff),
        Color::fromRGBA(0x333333ff),
        Color::fromRGBA(0x8ae0ffff),
        Color::fromRGBA(0x5ec8fdff),
        Color::fromRGBA(0x67ccfeff),
        Color::fromRGBA(0x66ccfeff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x65cbfeff),
        Color::fromRGBA(0x65cafcff),
        Color::fromRGBA(0x69d6ffff),
        Color::fromRGBA(0x71a4c9ff),
        Color::fromRGBA(0x755c08ff),
        Color::fromRGBA(0x755c08ff),
        Color::fromRGBA(0x71a5c9ff),
        Color::fromRGBA(0x69d6ffff),
        Color::fromRGBA(0x65cafcff),
        Color::fromRGBA(0x65cbfeff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccfeff),
        Color::fromRGBA(0x63c9fbff),
        Color::fromRGBA(0x6ed5ffff),
        Color::fromRGBA(0x959771ff),
        Color::fromRGBA(0xf0ca0aff),
        Color::fromRGBA(0xf0ca0aff),
        Color::fromRGBA(0x959771ff),
        Color::fromRGBA(0x6ed5ffff),
        Color::fromRGBA(0x63c9fbff),
        Color::fromRGBA(0x66ccfeff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x68ccfdff),
        Color::fromRGBA(0x5dcbffff),
        Color::fromRGBA(0x9cd3d7ff),
        Color::fromRGBA(0xfcd017ff),
        Color::fromRGBA(0xfdd20cff),
        Color::fromRGBA(0xfdd20cff),
        Color::fromRGBA(0xfcd017ff),
        Color::fromRGBA(0x9cd3d7ff),
        Color::fromRGBA(0x5dcbffff),
        Color::fromRGBA(0x68ccfdff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccfeff),
        Color::fromRGBA(0x66cbfdff),
        Color::fromRGBA(0x62ccffff),
        Color::fromRGBA(0x87cdd0ff),
        Color::fromRGBA(0x9ccda7ff),
        Color::fromRGBA(0x96cdb2ff),
        Color::fromRGBA(0x96cdb2ff),
        Color::fromRGBA(0x9ccda7ff),
        Color::fromRGBA(0x87cdd1ff),
        Color::fromRGBA(0x62ccffff),
        Color::fromRGBA(0x66cbfdff),
        Color::fromRGBA(0x66ccfeff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff)
    ],
    '32x16' => [
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x65cbffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x64cbfeff),
        Color::fromRGBA(0x64cbfeff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x65cbffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccfeff),
        Color::fromRGBA(0x63cbffff),
        Color::fromRGBA(0x6ecefdff),
        Color::fromRGBA(0x6ecefdff),
        Color::fromRGBA(0x63cbffff),
        Color::fromRGBA(0x66ccfeff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x65cbffff),
        Color::fromRGBA(0x68ccffff),
        Color::fromRGBA(0x58c7feff),
        Color::fromRGBA(0xb0e4feff),
        Color::fromRGBA(0xb0e4feff),
        Color::fromRGBA(0x58c7feff),
        Color::fromRGBA(0x68ccffff),
        Color::fromRGBA(0x65cbffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccfeff),
        Color::fromRGBA(0x64cafdff),
        Color::fromRGBA(0x6ad2ffff),
        Color::fromRGBA(0xbeced5ff),
        Color::fromRGBA(0xbeced5ff),
        Color::fromRGBA(0x6ad2ffff),
        Color::fromRGBA(0x64cafdff),
        Color::fromRGBA(0x66ccfeff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x67ccfeff),
        Color::fromRGBA(0x5ac5fbff),
        Color::fromRGBA(0x9fecffff),
        Color::fromRGBA(0x6c6968ff),
        Color::fromRGBA(0x6c6a68ff),
        Color::fromRGBA(0x9fecffff),
        Color::fromRGBA(0x5ac5fbff),
        Color::fromRGBA(0x67ccfeff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x65cbfeff),
        Color::fromRGBA(0x67cbfeff),
        Color::fromRGBA(0x5ecbffff),
        Color::fromRGBA(0xbee3f5ff),
        Color::fromRGBA(0x211c19ff),
        Color::fromRGBA(0x211c1aff),
        Color::fromRGBA(0xbee3f5ff),
        Color::fromRGBA(0x5ecbffff),
        Color::fromRGBA(0x67cbfeff),
        Color::fromRGBA(0x65cbfeff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccfeff),
        Color::fromRGBA(0x5ec7fbff),
        Color::fromRGBA(0x84dfffff),
        Color::fromRGBA(0xa0a5a7ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0xa0a5a7ff),
        Color::fromRGBA(0x83dfffff),
        Color::fromRGBA(0x5ec7fbff),
        Color::fromRGBA(0x66ccfeff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x65cbfeff),
        Color::fromRGBA(0x68ccfeff),
        Color::fromRGBA(0x59c6fdff),
        Color::fromRGBA(0xb3ebffff),
        Color::fromRGBA(0x514a46ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x514a46ff),
        Color::fromRGBA(0xb3ebffff),
        Color::fromRGBA(0x59c6fdff),
        Color::fromRGBA(0x68ccfeff),
        Color::fromRGBA(0x65cbfeff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccfeff),
        Color::fromRGBA(0x63c9fcff),
        Color::fromRGBA(0x6ed4ffff),
        Color::fromRGBA(0xbacbd1ff),
        Color::fromRGBA(0x000001ff),
        Color::fromRGBA(0x705e09ff),
        Color::fromRGBA(0x705d09ff),
        Color::fromRGBA(0x000001ff),
        Color::fromRGBA(0xbbcbd1ff),
        Color::fromRGBA(0x6ed4ffff),
        Color::fromRGBA(0x63c9fcff),
        Color::fromRGBA(0x66ccfeff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x67ccfeff),
        Color::fromRGBA(0x59c5fbff),
        Color::fromRGBA(0xa1ebffff),
        Color::fromRGBA(0x6f6d73ff),
        Color::fromRGBA(0x2d2300ff),
        Color::fromRGBA(0xffda1aff),
        Color::fromRGBA(0xffda1aff),
        Color::fromRGBA(0x2d2300ff),
        Color::fromRGBA(0x6f6d73ff),
        Color::fromRGBA(0xa1ebffff),
        Color::fromRGBA(0x59c5fbff),
        Color::fromRGBA(0x67ccfeff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66cbfeff),
        Color::fromRGBA(0x66cbfeff),
        Color::fromRGBA(0x62ceffff),
        Color::fromRGBA(0xb5d9efff),
        Color::fromRGBA(0x3e331fff),
        Color::fromRGBA(0xddbb0eff),
        Color::fromRGBA(0xffd617ff),
        Color::fromRGBA(0xffd617ff),
        Color::fromRGBA(0xdcbb0eff),
        Color::fromRGBA(0x3e331fff),
        Color::fromRGBA(0xb5d9efff),
        Color::fromRGBA(0x62ceffff),
        Color::fromRGBA(0x66cbfeff),
        Color::fromRGBA(0x66cbfeff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccfeff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x5fc7fbff),
        Color::fromRGBA(0x86e0ffff),
        Color::fromRGBA(0x9ea0a1ff),
        Color::fromRGBA(0xb59602ff),
        Color::fromRGBA(0xffdf1aff),
        Color::fromRGBA(0xf8cd15ff),
        Color::fromRGBA(0xf8cd15ff),
        Color::fromRGBA(0xffdf1aff),
        Color::fromRGBA(0xb59502ff),
        Color::fromRGBA(0x9ea0a1ff),
        Color::fromRGBA(0x86e0ffff),
        Color::fromRGBA(0x5fc7fbff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccfeff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x65cbffff),
        Color::fromRGBA(0x68ccfeff),
        Color::fromRGBA(0x5ac8feff),
        Color::fromRGBA(0xa9e4ffff),
        Color::fromRGBA(0xdfc14cff),
        Color::fromRGBA(0xf8d30eff),
        Color::fromRGBA(0xf8cf1bff),
        Color::fromRGBA(0xf9d119ff),
        Color::fromRGBA(0xf9d119ff),
        Color::fromRGBA(0xf8cf1bff),
        Color::fromRGBA(0xf8d30eff),
        Color::fromRGBA(0xdfc14dff),
        Color::fromRGBA(0xa9e4ffff),
        Color::fromRGBA(0x5ac8feff),
        Color::fromRGBA(0x68ccfeff),
        Color::fromRGBA(0x65cbffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccfeff),
        Color::fromRGBA(0x64cbfcff),
        Color::fromRGBA(0x6bcfffff),
        Color::fromRGBA(0xeae387ff),
        Color::fromRGBA(0xffd400ff),
        Color::fromRGBA(0xfdd007ff),
        Color::fromRGBA(0xffd105ff),
        Color::fromRGBA(0xffd105ff),
        Color::fromRGBA(0xffd105ff),
        Color::fromRGBA(0xffd105ff),
        Color::fromRGBA(0xfdd007ff),
        Color::fromRGBA(0xffd400ff),
        Color::fromRGBA(0xeae387ff),
        Color::fromRGBA(0x6bcfffff),
        Color::fromRGBA(0x64cbfcff),
        Color::fromRGBA(0x66ccfeff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccfeff),
        Color::fromRGBA(0x61cbffff),
        Color::fromRGBA(0x7bcfecff),
        Color::fromRGBA(0xc3d071ff),
        Color::fromRGBA(0xbecd70ff),
        Color::fromRGBA(0xc0cf73ff),
        Color::fromRGBA(0xc0cf72ff),
        Color::fromRGBA(0xc0cf72ff),
        Color::fromRGBA(0xc0cf72ff),
        Color::fromRGBA(0xc0cf72ff),
        Color::fromRGBA(0xc0cf73ff),
        Color::fromRGBA(0xbecd70ff),
        Color::fromRGBA(0xc3d071ff),
        Color::fromRGBA(0x7bcfecff),
        Color::fromRGBA(0x61cbffff),
        Color::fromRGBA(0x66ccfeff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x65cbfeff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x64cbfeff),
        Color::fromRGBA(0x5acbfeff),
        Color::fromRGBA(0x5bcbffff),
        Color::fromRGBA(0x5bcbffff),
        Color::fromRGBA(0x5bcbffff),
        Color::fromRGBA(0x5bcbffff),
        Color::fromRGBA(0x5bcbffff),
        Color::fromRGBA(0x5bcbffff),
        Color::fromRGBA(0x5bcbffff),
        Color::fromRGBA(0x5bcbffff),
        Color::fromRGBA(0x5acbfeff),
        Color::fromRGBA(0x64cbfeff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x65cbfeff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff),
        Color::fromRGBA(0x66ccffff)
    ],
];

$img = new Image(16, 8);
$img->append($pixels['16x8'], new Size(16, 8));
$img->append($pixels['32x16'], new Size(32, 16));

return $img;