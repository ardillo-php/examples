<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x10' => [
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74ace0ff),
        Color::fromRGBA(0x74ace0ff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0xcce0f3ff),
        Color::fromRGBA(0xcce0f3ff),
        Color::fromRGBA(0xcce0f3ff),
        Color::fromRGBA(0xcce0f3ff),
        Color::fromRGBA(0xcce0f3ff),
        Color::fromRGBA(0xcce0f3ff),
        Color::fromRGBA(0xcbdff1ff),
        Color::fromRGBA(0xc5d2dbff),
        Color::fromRGBA(0xc5d3dbff),
        Color::fromRGBA(0xcbdff1ff),
        Color::fromRGBA(0xcce0f3ff),
        Color::fromRGBA(0xcce0f3ff),
        Color::fromRGBA(0xcce0f3ff),
        Color::fromRGBA(0xcce0f3ff),
        Color::fromRGBA(0xcce0f3ff),
        Color::fromRGBA(0xcce0f3ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfaf2e6ff),
        Color::fromRGBA(0xe5b766ff),
        Color::fromRGBA(0xe5b766ff),
        Color::fromRGBA(0xfaf2e6ff),
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
        Color::fromRGBA(0xfaf2e6ff),
        Color::fromRGBA(0xe5b766ff),
        Color::fromRGBA(0xe5b766ff),
        Color::fromRGBA(0xfbf2e6ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xcce0f3ff),
        Color::fromRGBA(0xcce0f3ff),
        Color::fromRGBA(0xcce0f3ff),
        Color::fromRGBA(0xcce0f3ff),
        Color::fromRGBA(0xcce0f3ff),
        Color::fromRGBA(0xcce0f3ff),
        Color::fromRGBA(0xcbdff1ff),
        Color::fromRGBA(0xc5d3dbff),
        Color::fromRGBA(0xc5d3dbff),
        Color::fromRGBA(0xcbdff1ff),
        Color::fromRGBA(0xcce0f3ff),
        Color::fromRGBA(0xcce0f3ff),
        Color::fromRGBA(0xcce0f3ff),
        Color::fromRGBA(0xcce0f3ff),
        Color::fromRGBA(0xcce0f3ff),
        Color::fromRGBA(0xcce0f3ff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74ace0ff),
        Color::fromRGBA(0x74ace0ff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x73abdeff),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc),
        Color::fromRGBA(0x74acdffc)
    ],
    '32x20' => [
        Color::fromRGBA(0x74acdffd),
        Color::fromRGBA(0x74abdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdeff),
        Color::fromRGBA(0x74acdffd),
        Color::fromRGBA(0x74acdffd),
        Color::fromRGBA(0x74abdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdeff),
        Color::fromRGBA(0x74acdffd),
        Color::fromRGBA(0x74acdffd),
        Color::fromRGBA(0x74abdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdeff),
        Color::fromRGBA(0x74acdffd),
        Color::fromRGBA(0x74acdffd),
        Color::fromRGBA(0x74abdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdeff),
        Color::fromRGBA(0x74acdffd),
        Color::fromRGBA(0x74acdffd),
        Color::fromRGBA(0x74abdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdeff),
        Color::fromRGBA(0x74acdffd),
        Color::fromRGBA(0x71aadefd),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadefd),
        Color::fromRGBA(0xa4c9eafe),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9ebff),
        Color::fromRGBA(0xa4c9eaff),
        Color::fromRGBA(0xa4c9eaff),
        Color::fromRGBA(0xa5c9ebff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa4c9eafe),
        Color::fromRGBA(0xfcfdfeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xf8f1e8ff),
        Color::fromRGBA(0xefdec9ff),
        Color::fromRGBA(0xefdfc9ff),
        Color::fromRGBA(0xf8f1e8ff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfcfdfeff),
        Color::fromRGBA(0xfdfdfeff),
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
        Color::fromRGBA(0xf8f1e9ff),
        Color::fromRGBA(0xe7cba0ff),
        Color::fromRGBA(0xd9a960ff),
        Color::fromRGBA(0xd9aa60ff),
        Color::fromRGBA(0xe7cba0ff),
        Color::fromRGBA(0xf8f1e9ff),
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
        Color::fromRGBA(0xfdfdfeff),
        Color::fromRGBA(0xfdfdfeff),
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
        Color::fromRGBA(0xfefeffff),
        Color::fromRGBA(0xefdfc9ff),
        Color::fromRGBA(0xd9aa60ff),
        Color::fromRGBA(0xdf9c14ff),
        Color::fromRGBA(0xdf9c14ff),
        Color::fromRGBA(0xd9a960ff),
        Color::fromRGBA(0xefdfc9ff),
        Color::fromRGBA(0xfefefeff),
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
        Color::fromRGBA(0xfdfdfeff),
        Color::fromRGBA(0xfdfdfeff),
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
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xefdfc9ff),
        Color::fromRGBA(0xd9aa60ff),
        Color::fromRGBA(0xe09d14ff),
        Color::fromRGBA(0xe09d14ff),
        Color::fromRGBA(0xd9aa60ff),
        Color::fromRGBA(0xefdfc9ff),
        Color::fromRGBA(0xfefeffff),
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
        Color::fromRGBA(0xfdfdfeff),
        Color::fromRGBA(0xfdfdfeff),
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
        Color::fromRGBA(0xf8f1e9ff),
        Color::fromRGBA(0xe7cba0ff),
        Color::fromRGBA(0xd9aa60ff),
        Color::fromRGBA(0xd9a960ff),
        Color::fromRGBA(0xe7cba0ff),
        Color::fromRGBA(0xf8f2e9ff),
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
        Color::fromRGBA(0xfdfdfeff),
        Color::fromRGBA(0xfcfdfeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xf8f1e8ff),
        Color::fromRGBA(0xefdfc9ff),
        Color::fromRGBA(0xefdec9ff),
        Color::fromRGBA(0xf8f1e8ff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfcfdfeff),
        Color::fromRGBA(0xa5c9eafe),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9ebff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9ebff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eaff),
        Color::fromRGBA(0xa5c9eafe),
        Color::fromRGBA(0x71aadefd),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadeff),
        Color::fromRGBA(0x71aadefd),
        Color::fromRGBA(0x74acdffd),
        Color::fromRGBA(0x74abdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdeff),
        Color::fromRGBA(0x74acdffd),
        Color::fromRGBA(0x74acdffd),
        Color::fromRGBA(0x74abdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdeff),
        Color::fromRGBA(0x74acdffd),
        Color::fromRGBA(0x74acdffd),
        Color::fromRGBA(0x74abdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdeff),
        Color::fromRGBA(0x74acdffd),
        Color::fromRGBA(0x74acdffd),
        Color::fromRGBA(0x74abdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdeff),
        Color::fromRGBA(0x74acdffd),
        Color::fromRGBA(0x74acdffd),
        Color::fromRGBA(0x74abdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdfff),
        Color::fromRGBA(0x74acdeff),
        Color::fromRGBA(0x74acdffd)
    ],
];

$img = new Image(16, 10);
$img->append($pixels['16x10'], new Size(16, 10));
$img->append($pixels['32x20'], new Size(32, 20));

return $img;
